<?php

namespace App\Http\Controllers\Kiboweb;

use App\KBModel\Stok;
use App\KBModel\Uretici;
use App\KBModel\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\ArrayToXml\ArrayToXml;

class StokController extends Controller
{
    public function lists(){

    	$stok = Stok::where("stokno",">",0)
    	->select(array("stokno","stokcins","kfiyat","ureticino","yazar"))
    	->with(array("uretici" => function($query){
    		$query->select(array("ureticikod","ureticiad"));
    	}))
    	->limit(10)->get();

        $stok = json_encode($stok);
        $stok = (array) json_decode($stok);

        $result = ArrayToXml::convert($stok);

        echo $result;
    }

    public function kategori(){
        return Kategori::limit(10)->get();
    }

    
}
