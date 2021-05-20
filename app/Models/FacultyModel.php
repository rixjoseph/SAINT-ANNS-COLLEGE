<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyModel extends Model
{
    //use HasFactory;

    protected $table='faculty_models';
    protected $fillable=['facname','designation','qualification','facemail','department','facphoto'];
}
