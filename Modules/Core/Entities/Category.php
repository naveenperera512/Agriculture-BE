<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name', 'description'];
    
    protected static function newFactory()
    {
        return \Modules\Core\Database\factories\CategoryFactory::new();
    }
}
