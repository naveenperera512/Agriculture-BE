<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'subcategory_id', 'admin_id', 'slug', 'title', 'description', 'data', 'status'];

    protected static function newFactory()
    {
        return \Modules\Core\Database\factories\AdvertisementFactory::new();
    }
}
