<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;
    protected $specialists = [
        'name', 'TK', 'PK','status',
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
            'name' => 'Chuyên khoa',
            'type' => 'text'
          ),
          array(
            'field' => 'TK',
            'name' => 'Trưởng khoa',
            'type' => 'text'
          ),
          array(
            'field' => 'PK',
            'name' => 'Phó khoa',
            'type' => 'text'
          ),
          array(
            'field' => 'status',
            'name' => 'Tình trạng',
            'type' => 'text'
          ),
          array(
            'field' => 'created_at',
            'name' => 'Ngày tạo',
            'type' => 'text'
          ),
          array(
            'field' => 'control',
            'name' => 'Điều chỉnh',
            'type' => 'text'
          ),
          
         
        );
 	return $listingconfigs ;
 }
}
