<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_detail extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'degree',
    'university',
    'country_residence',
    'about',
    'specialty',
    'masters_diplomas',
    'experience',
    'example_exerc_photo1',
    'example_exerc_photo2',
    'example_exerc_photo3',
    'example_exerc_video1',
    'example_exerc_video2',
    'example_exerc_video3',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
