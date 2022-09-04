<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Aboutu extends Model
{
    

      
    protected $table = 'aboutus';


    protected $primaryKey = 'id';

    public $timestamps = true;


    protected $fillable = [

        'title','sub_title','img_bg','description','vedio_link','second_vedio','univ_vedio','institu_vedio','research_vedio','partenariat_vedio'
    ];

}
