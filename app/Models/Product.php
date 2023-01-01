<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static lastest()
 * @method static latest()
 */
class Product extends Model
{
    protected $table = 'products';
    use HasFactory;
    use SoftDeletes;
}
