<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name',
    ];


    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
    }

    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class);
    }
}
