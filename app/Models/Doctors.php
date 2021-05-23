<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Doctors extends Authenticatable
{
    use HasFactory, SoftDeletes;

    public $table = 'doctors';

    public $fillable = [
        'id',
        'name',
        'email',
        'password',
        'gender',
        'dateOfBirth',
        'specialist',
        'phone',
        'image',
        'branch',
        'role',
    ];

    public function listingconfigs()
    {
        $defaultlistingconfigs = parent::defaultlistingconfigs();
        $listingconfigs = [
            [
                'field' => 'id',
                'name'  => 'ID',
                'type'  => 'text',
            ],
            [
                'field' => 'name',
                'name'  => 'Họ và tên',
                'type'  => 'text',
            ],
            [
                'field' => 'gender',
                'name'  => 'Giới tính',
                'type'  => 'text',
            ],
            [
                'field' => 'dateOfBirth',
                'name'  => 'Ngày sinh',
                'type'  => 'text',
            ],
            [
                'field' => 'email',
                'name'  => 'Email',
                'type'  => 'text',
            ],
            [
                'field' => 'specialist',
                'name'  => 'Chuyên khoa',
                'type'  => 'text',
            ],

            [
                'field' => 'branch',
                'name'  => 'Chi nhánh',
                'type'  => 'text',
            ],
            [
                'field' => 'role',
                'name'  => 'Chức vụ',
                'type'  => 'text',
            ],
        ];

        return array_merge($listingconfigs, $defaultlistingconfigs);
    }
}
