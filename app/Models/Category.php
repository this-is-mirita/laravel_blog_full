<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    // привязка к таблице
    protected $table = 'categories';
    // разрешение
    protected $guarded = false;

    public function posts(){
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
