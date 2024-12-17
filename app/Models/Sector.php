<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Sector extends Model
{
    use HasFactory;
    use Searchable;

    public function chapters(){

        return $this->hasMany('App\Models\Chapter');

    }

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
        ];
    }
}
