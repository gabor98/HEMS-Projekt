<?php

declare(strict_types=1);

namespace App\Services\Shop;

class CategoryService
{
    public const DRINK_SOFTDRINK = 'Softgetränke';
    public const DRINK_FRUITDRINK = 'Fruchtgetränke';
    public const DRINK_WARMDRINK = 'Aufgussgetränke';

    public const MENU_DAILY = 0;
    public const MENU_HEALTHY = 1;
    public const MENU_SNACK = 2;
    public const MENU_DESERT = 3;
    public const MENU_LUNCH = 4;

    /**
     * Get all drink categories
     * 
     * @return array 
     */
    public function mapDrinkCategories(): array
    {
        return [
            self::DRINK_SOFTDRINK,
            self::DRINK_FRUITDRINK,
            self::DRINK_WARMDRINK,
        ];
    }

    /**
     * Get all menu categories
     * 
     * @return array 
     */
    public function mapMenuCategories(): array
    {
        return [
            self::MENU_DAILY,
            self::MENU_HEALTHY,
            self::MENU_SNACK,
            self::MENU_DESERT,
            self::MENU_LUNCH,
        ];
    }
}