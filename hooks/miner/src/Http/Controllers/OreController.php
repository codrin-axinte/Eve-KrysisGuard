<?php namespace Miner\Http\Controllers;

use Miner\Entities\Ore;
use Illuminate\Http\Request;
use Miner\MineCalculator;
use Miner\Modifiers;

class OreController extends Controller {
    public function index(Request $request){
    	$ores = Ore::all();

    	/*if(auth()->check()){
		    if($request['auth'] == "1")
		       return \Eve::driver()->scopes('esi-assets.read_assets.v1')->redirect();
		    else {
			    $user = auth()->user();
			    debug( \Eve::assets( $user->providerAccountId(), $user->token()));
		    }
	    }*/
    	return view('miner::ores.index', compact('ores'));
	}

	public function table(Request $request){

    	if(auth()->check()){
		    dd(\Eve::skills());
	    }

		$cargo = $request->get('cargo', 5000);
		$sort = $request->get('sort', 'iskPerHour');
		$calculator = new MineCalculator($cargo, $this->getMiningAmount());
		$rows   = Ore::all()->map( function ( Ore $ore ) use ( $calculator ) {
			return $calculator->compute( $ore );
		} )->sortByDesc($sort);

		return view('miner::ores.table', compact('rows'));
	}
	
	protected function getMiningAmount(){
		$am = new Modifiers([60, 60], true);
		$am->miningSkill = 5;
		$am->astroSkill = 3;
		$am->frigateSkill = 3;
		$am->upgradeLaser = 1;
		return $am->total();
	}
}
