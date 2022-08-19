<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{



      
    protected $table = 'services';


    protected $primaryKey = 'id';

    public $timestamps = true;


    protected $fillable = [

        'main_title','img_bg','description'
    ];
    


}
