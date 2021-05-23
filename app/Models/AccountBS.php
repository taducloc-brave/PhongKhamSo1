<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;
class AccountBS extends Base
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
            'field' => 'specialist',
            'name' => 'Chuyên khoa',
            'type' => 'text'
          ),
          
          array(
            'field' => 'branch',
            'name' => 'Chi nhánh',
            'type' => 'text'
          ),
        );
 	return array_merge($listingconfigs, $defaultlistingconfigs);
 }

 }