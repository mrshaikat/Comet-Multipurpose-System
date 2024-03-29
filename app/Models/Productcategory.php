<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getChild()
    {
        return $this->hasMany('App\Models\Productcategory', 'parent');
    }
}