<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{



      
    protected $table = 'posts';


    protected $primaryKey = 'id';

    public $timestamps = true;


    protected $fillable = [

        'title','author_id','category_id','seo_title','','image','body','status','slug','featured','meta_description','meta_keywords'
    ];
    


}
