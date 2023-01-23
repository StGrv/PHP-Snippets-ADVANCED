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
            case BookInterface::MAGAZINE:
                return new Magazine();
            case BookInterface::ENCYCLOPEDIA:
                return new Encyclopedia();
            case BookInterface::ANTIQUE:
                return new Antique();
            default:
                return null; 
        }
    }
}
