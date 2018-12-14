<?php

namespace App\KBModel;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table="stok";
    public $timestamps=false;

    public function uretici(){
    	return $this->hasOne("App\KBModel\Uretici","ureticikod","ureticino");
    }
}
