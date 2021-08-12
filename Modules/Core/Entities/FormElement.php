<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormElement extends Model
{
    use HasFactory;

    protected $fillable = ['form_id', 'type', 'titls', 'placeholder', 'data'];
    
    protected static function newFactory()
    {
        return \Modules\Core\Database\factories\FormElementFactory::new();
    }
}
