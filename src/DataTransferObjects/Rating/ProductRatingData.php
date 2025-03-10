<?php

namespace Ecommerce\Common\DataTransferObjects\Rating;

class ProductRatingData
{
    public int $productId;
    public int $rating;
    public float $averageRating;

    public function __construct(
        int $productId,
        int $rating,
        float $averageRating,
    ) {
        $this->productId = $productId;
        $this->rating = $rating;
        $this->averageRating = $averageRating;
    }

    /**
     * @param array{productId: int, rating: int, averageRating: float} $data
     */
    public static function fromArray(array $data): self
    {
        return new static(
            $data['productId'],
            $data['rating'],
            $data['averageRating'],
        );
    }
}
