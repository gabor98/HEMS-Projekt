<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @package App\Models
 * 
 * @property-read   int     $id
 * @property        string  $image
 * @property        string  $name
 * @property        double  $price
 * @property        int     $category
 */
class Drink extends Model
{
    use HasFactory;

    /**
     * Disable default timestamps
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'image',
        'name',
        'price',
        'category',
    ];

    public function imageURL(): string
    {
        return '';
    }
}