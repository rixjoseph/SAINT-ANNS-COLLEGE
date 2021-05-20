<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UgModel extends Model
{
    use HasFactory;
    protected $table='ug_models';
    protected $fillable=['fname','lname','fathername','mothername','gender','dob','hname','street','district','state','mobileno','email','sslcboard','sslcmarks','sslcyear','hsboard','hsmarks','hsyear','photo','sslc','hs','course','status','paystatus'];
}
