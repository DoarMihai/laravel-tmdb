<?php

namespace MihaiStefanescu\LaravelTmdb\Services;

use Psr\Http\Message\ResponseInterface;

abstract class AbstractApi
{
    /** Base API URI */
    private const TMDB_URI = 'api.themoviedb.org/3';

    /** Insecure schema */
    private const SCHEME_INSECURE = 'http';

    /** Secure schema */
    private const SCHEME_SECURE = 'https';

    protected ?\GuzzleHttp\Client $httpClient = null;

    public function getHttpClient(): \GuzzleHttp\Client
    {
        if (null !== $this->httpClient) {
            $this->httpClient = new \GuzzleHttp\Client();
        }

        return $this->httpClient;
    }

    public function get(string $uri, array $parameters = [], array $headers = []): array
    {
        $options = [
            'headers' => $this->buildHeaders($headers),
        ];

        $uri = $this->buildUri($uri, $parameters);

        return $this->decode(
            $this->getHttpClient()->request( 'GET', $uri, $options)
        );
    }

    public function post(string $uri, string $postBody = '', array $parameters = [], array $headers = [])
    {
        $options = [
            'headers' => $this->buildHeaders($headers),
            'body' => $postBody
        ];

        $uri = $this->buildUri($uri, $parameters);

        return $this->decode(
            $this->getHttpClient()->request( 'POST', $uri, $options)
        );
    }

    public function decode(ResponseInterface $body)
    {
        try {
            return json_decode($body->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            throw new UnexpectedResponseException(
                sprintf(
                    'Unable to decode response %s, encountered error %s',
                    $body->getBody()->getContents(),
                    json_last_error_msg()
                ),
                $exception->getCode(),
                $exception
            );
        }
    }

    protected function buildHeaders(array $headers = []): array
    {
        $apiKey = config('tmdb.api_key');

        $defaultHeaders = [
            'Authorization' => 'Bearer '.$apiKey,
            'accept' => 'application/json',
        ];

        return array_merge($defaultHeaders, $headers);
    }

    protected function buildUri(string $uri, array $parameters = []): string
    {
        if (!empty($parameters)) {
            $queryString = http_build_query($parameters);

            return $uri . '?' . $queryString;
        }

        return $this->buildBaseUri($uri);
    }

    private function buildBaseUri(string $uri): string
    {
        $isSecure = config('tmdb.options.secure');

        return ($isSecure ? self::SCHEME_SECURE : self::SCHEME_INSECURE) . self::TMDB_URI . '/' . $uri;
    }
}
