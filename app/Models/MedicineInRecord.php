<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicineInRecord extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'name',
        'DVT',
        'sl',
        'price',
        'total',
        'sl_Morning',
        'DVT_Morning',
        'sl_Afternoon',
        'DVT_Afternoon',
        'sl_Night',
        'DVT_Night',
        'date_create',
        'doctor_id',
        'record_id',
        'deleted_at'


    ];
}
