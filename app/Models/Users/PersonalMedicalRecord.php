<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonalMedicalRecord extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'nameDoctor',
        'name_patient',
        'symptom',
        'branch',
        'specialist',
        'diagnose',
        'support',
        'status',
        'note',
        'file',
        'created_by',
        'doctor_id',
        'dateBook',
        'timeBook',
        'noteMedicine',
        'Diagnostic_Results'
    ];
}
