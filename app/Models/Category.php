<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, int $int)
 */
class Category extends Model
{
    protected $table = 'categories';
    use HasFactory;
    use SoftDeletes;

    public function categoryChildren()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
