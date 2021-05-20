<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotficationModel extends Model
{
    //use HasFactory;
    protected $table='notfication_models';
    protected $fillable=['scholarship','notboard','acheivements','admission','successstory'];

}
