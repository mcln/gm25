<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'external_id',
        'external_auth',
        'type',
        'username',
        'nationality',
        'university_name',
        'degree_name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //relacion 1 a 1
    public function address(){

        return $this->hasOne('App\Models\Address');

    }

    public function country(){

        return $this->hasOne('App\Models\Country');

    }

    //relacion 1 a muchos
    public function exercise_comments(){

        return $this->hasMany('App\Models\Exercise_comment');

    }

    //relacion 1 a muchos
    public function exercise_users(){

        return $this->hasMany('App\Models\Exercise_user');

    }

    //relacion 1 a muchos
    public function exercise_likes(){

        return $this->hasMany('App\Models\Exercise_like');

    }

    //relacion 1 a muchos
    public function exercise_reports(){

        return $this->hasMany('App\Models\Exercise_report');

    }

    //relacion 1 a muchos
    public function exercise_visualizations(){

        return $this->hasMany('App\Models\Exercise_visualization');

    }

    //relacion 1 a muchos
    public function payments(){

        return $this->hasMany('App\Models\Payment');

    }

    public function users_subjects(){

        return $this->hasMany('App\Models\User_subject');

    }

    //relacion 1 a 1
    public function role(){

        return $this->hasOne('App\Models\Role');

    }

    //relacion 1 a 1
    public function type_user(){

        return $this->hasOne('App\Models\Type_user');

    }

    //relacion 1 a muchos
    public function exercise_user_durations(){

        return $this->hasMany('App\Models\Exercise_user_duration');

    }

    //relacion 1 a muchos
    public function upload_exercise(){

        return $this->hasMany('App\Models\UploadExercise');

    }

    //relacion 1 a muchos
    public function upload_exercise_development(){

        return $this->hasMany('App\Models\UploadExerciseDevelopment');

    }

    public function user_detail() 
    {
      return $this->hasOne(User_detail::class);
    }

}
