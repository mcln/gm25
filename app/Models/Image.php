<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //relacion 1 a 1
    public function exercise(){

        return $this->belongsTo('App\Models\Exercise');

    }

    protected $table = 'images';

    protected $fillable = ['image_path'];
}
