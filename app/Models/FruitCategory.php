<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FruitCategory extends Model
{
    /**
     * The FruitCategory model represents a category of fruits.
     *
     * @var string $table The name of the database table for fruit categories.
     */
    protected $table = 'fruit_categories';
}
