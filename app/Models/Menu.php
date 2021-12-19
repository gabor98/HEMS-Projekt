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
 * @property        string  $description
 * @property        int     $category
 */
class Menu extends Model
{
    use HasFactory;

    /**
     * Disable default timestamps
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = [
        'image',
        'name',
        'price',
        'description',
        'category',
    ];
}