<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Institu extends Model
{

            
    protected $table = 'institus';


    protected $primaryKey = 'id';

    public $timestamps = true;


    protected $fillable = [

        'name_inst','logo'
    ];
    
}
