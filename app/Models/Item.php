<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Item extends Model
{
    use HasFactory;
    use Searchable;

    //relacion 1 a 1
    public function section()
    {

        return $this->belongsTo('App\Models\Section');
    }

    public function exercises()
    {

        return $this->hasMany('App\Models\Exercise');
    }

    public function exerciseUniversities()
    {
        return $this->hasMany(ExerciseUniversity::class, 'item_id');
    }

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
        ];
    }
}
