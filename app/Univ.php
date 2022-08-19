<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Univ extends Model
{
    

    protected $table = 'univs';


    protected $primaryKey = 'id';

    public $timestamps = true;


    protected $fillable = [

        'logo_univ','descrip_univ'
    ];




}
