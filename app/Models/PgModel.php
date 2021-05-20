<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PgModel extends Model
{
    //use HasFactory;

    protected $table='pg_models';
    protected $fillable=['fname','lname','fathername','mothername','gender','dob','hname','street','district','state','mobileno','email','sslcboard','sslcmarks','sslcyear','hsboard','hsmarks','hsyear','ugboard','ugmarks','ugyear','photo','sslc','hs','ug','course','status','paystatus'];
}
