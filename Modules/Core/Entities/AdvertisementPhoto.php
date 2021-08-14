<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdvertisementPhoto extends Model
{
    use HasFactory;

    protected $fillable = ['advertisement_id', 'key', 'path', 'size', 'file_type'];

    protected static function newFactory()
    {
        return \Modules\Core\Database\factories\AdvertisementPhotoFactory::new();
    }
}
