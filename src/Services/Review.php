<?php

namespace MihaiStefanescu\LaravelTmdb\Services;

class Review extends AbstractApi
{
    public const REVIEW_URI = 'review/%s';

    public function getReview(int $reviewId, array $parameters = [], array $headers = []): array
    {
        return $this->get(sprintf(self::REVIEW_URI, $reviewId), $parameters, $headers);
    }
}
