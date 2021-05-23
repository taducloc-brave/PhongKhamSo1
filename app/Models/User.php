<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name', 'email', 'password','gender','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function listingconfigs(){
    $listingconfigs = array(
          array(
            'field' => 'id',
            'name' => 'ID',
            'type' => 'text'
          ),
          array(
            'field' => 'name',
            'name' => 'Họ và tên',
            'type' => 'text'
          ),
          array(
            'field' => 'gender',
            'name' => 'Giới tính',
            'type' => 'text'
          ),
          array(
            'field' => 'email',
            'name' => 'Email',
            'type' => 'text'
          ),
          array(
            'field' => 'phone',
            'name' => 'Số điện thoại',
            'type' => 'text'
          ),
          array(
            'field' => 'created_at',
            'name' => 'Ngày tạo',
            'type' => 'text'
          ),
          array(
            'field' => 'update_at',
            'name' => 'Ngày cập nhật',
            'type' => 'text'
          ),
        );
    return $listingconfigs;
 }

}
