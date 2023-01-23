<?php

namespace app\modules\bookshop\models;

use app\modules\bookshop\interfaces\BookInterface;
use app\modules\bookshop\interfaces\BookTypeInterface;

final class BookFactory
{
    /**
     * @param int $type
     * @return BookInterface|null
     */
    public static function getBook(int $type): ?BookInterface
    {
        switch ($type) {
            case BookTypeInterface::MAGAZINE:
                return new Magazine();
            case BookTypeInterface::ENCYCLOPEDIA:
                return new Encyclopedia();
            case BookTypeInterface::ANTIQUE:
                return new Antique();
            default:
                return null;
        }
    }
}