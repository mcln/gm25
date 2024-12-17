<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Section extends Model
{
    use HasFactory;
    use Searchable;
    

    public function items(){

        return $this->hasMany('App\Models\Item');

    }

    //relacion 1 a muchos
    public function chapter(){

        return $this->belongsTo('App\Models\Chapter');

    }

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
        ];
    }
}
