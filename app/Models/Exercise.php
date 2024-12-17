<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Exercise extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'id',
        'item_id',
        'slug',
        'active',
        'order',
        'likes',
        'view_count'
    ];

    //relacion 1 a muchos
    public function exercise_comments()
    {

        return $this->hasMany('App\Models\Exercise_comment');
    }

    //relacion 1 a 1
    public function item()
    {

        return $this->belongsTo('App\Models\Item');
    }
    //relacion 1 a 1
    public function Header_exercise()
    {

        return $this->hasOne('App\Models\Header_exercise');
    }

    //relacion 1 a muchos
    public function development_exercises()
    {

        return $this->hasMany('App\Models\Development_exercise');
    }

    //relacion 1 a muchos
    public function video_exercises()
    {

        return $this->hasMany('App\Models\Video_exercise');
    }

    //relacion 1 a muchos
    public function exercise_users()
    {

        return $this->hasMany('App\Models\Exercise_user');
    }

    //relacion 1 a muchos
    public function exercise_likes()
    {

        return $this->hasMany('App\Models\Exercise_like');
    }

    public function getLikesCountAttribute()
    {
        return $this->exercise_likes()->count();
    }


    //relacion 1 a muchos
    public function exercise_reports()
    {

        return $this->hasMany('App\Models\Exercise_report');
    }

    //relacion 1 a muchos
    public function exercise_visualizations()
    {

        return $this->hasMany('App\Models\Exercise_visualization');
    }

    //relacion 1 a muchos
    public function images()
    {

        return $this->hasMany('App\Models\Image');
    }

    public function exerciseVisualizationsUnregistered()
    {
        return $this->hasMany('App\Models\Exercise_visualization_unregistered');
    }

    //relacion 1 a muchos
    public function exercise_user_durations()
    {

        return $this->hasMany('App\Models\Exercise_user_duration');
    }

    public function toSearchableArray()
    {
        return [
            'slug' => $this->slug,
        ];
    }
}
