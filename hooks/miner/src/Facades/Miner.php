<?php
namespace Miner\Facades;

use Illuminate\Support\Facades\Facade;

class Miner extends Facade {


    protected static function getFacadeAccessor(){
        return 'Miner';
    }

}