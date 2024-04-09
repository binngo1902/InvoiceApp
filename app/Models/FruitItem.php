<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FruitItem extends Model
{
    /**
     * The FruitItem model represents a fruit item.
     *
     * @var string $table The name of the database table for fruit items.
     */
    protected $table = 'fruit_items';
}
