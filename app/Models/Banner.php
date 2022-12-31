<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static latest()
 */
class Banner extends Model
{
    protected $table = 'banners';
    use HasFactory;
    use SoftDeletes;
}
