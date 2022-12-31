<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class Banner extends Model
{
    protected $table = 'banners';
    use HasFactory;
}
