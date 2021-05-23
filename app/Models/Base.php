<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    use HasFactory;

    public function defaultlistingconfigs(){
 	return array(
          
          array(
            'field' => 'created_at',
            'name' => 'Ngày tạo',
            'type' => 'text'
          ),
          array(
            'field' => 'updated_at',
            'name' => 'Cập nhật',
            'type' => 'text'
          ),
        );
 }
}
