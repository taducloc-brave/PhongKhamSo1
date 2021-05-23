<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;
class DSbenhnhan extends Base
{
    use HasFactory;


 public function listingconfigs(){
 	$defaultlistingconfigs = parent::defaultlistingconfigs();
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
        );
 	return array_merge($listingconfigs, $defaultlistingconfigs);
 }

 }