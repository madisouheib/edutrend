<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Avi extends Model
{
    

        
    protected $table = 'avis';


    protected $primaryKey = 'id';

    public $timestamps = true;


    protected $fillable = [

        'title','body','image'
    ];
    
}
