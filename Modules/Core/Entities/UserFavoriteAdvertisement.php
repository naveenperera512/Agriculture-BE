<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserFavoriteAdvertisement extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'advertisement_id'];

    protected static function newFactory()
    {
        return \Modules\Core\Database\factories\UserFavoriteAdvertisementFactory::new();
    }
}
