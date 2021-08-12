<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategorySubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'slug', 'description', 'form_id'];
    
    protected static function newFactory()
    {
        return \Modules\Core\Database\factories\CategorySubCategoryFactory::new();
    }
}
