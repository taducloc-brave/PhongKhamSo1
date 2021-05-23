<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use App\Models\Base;
class Admin extends Base implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
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
        );
 	return array_merge($listingconfigs, $defaultlistingconfigs);
 }
}
