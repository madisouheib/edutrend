<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Application extends Model
{
    
    protected $table = 'applications';


    protected $primaryKey = 'id';

    public $timestamps = true;


    protected $fillable = [

        'last_name','first_name','email','phone','nationality','country','type_service','prospected'
    ];





  


}
