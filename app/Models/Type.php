<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function category()
    {
        return $this->hasOne('App\Models\Categorie', 'id', 'category_id');
    }
}
