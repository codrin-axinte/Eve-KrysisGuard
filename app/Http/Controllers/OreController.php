<?php

namespace App\Http\Controllers;

use App\Ore;
use Illuminate\Http\Request;

class OreController extends Controller {
    public function  index(){
    	$ores = Ore::all();
    	return view('ores.index', compact('ores'));
    }
}
