<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, $configKey)
 */
class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';
    use SoftDeletes;
}
