<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product extends Model
{
    //
    protected $table ='product';

    protected $primaryKey = 'product_id';


    public static function getProduct($product_id)
    {
        $sql = "select * from product";
        return DB::select($sql);







    }


    public function post()
    {
        return $this->belongsTo('App\post');

    }

    public function category()
    {
        return $this->belongsTo('App\category');
    }

    public function thumbnail()
    {
        return $this->belongsTo('App\image');
    }





}
