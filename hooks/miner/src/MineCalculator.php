<?php namespace Miner;
use Miner\Entities\Ore;

class MineCalculator {

	protected $cargo;
	protected $miningAmount;

	public function __construct($cargo, $miningAmount){
		$this->cargo = $cargo;
		$this->miningAmount = $miningAmount;
	}

	public function compute(Ore $ore) {		
		$fullCargoAmount = $this->cargo / $ore->volume;
		$iskPerCargo     = $fullCargoAmount * $ore->unit_price;
		$am = $this->miningAmount / $ore->volume;
		$iskPerHour      = $am * $ore->unit_price * 60;

		return [
			'name'            => $ore->name,
			'volume'          => number_format($ore->volume, 2),
			'price'           => number_format( $ore->unit_price ),
			'am'              => number_format( $am, 2 ),
			'fullCargoAmount' => number_format( $fullCargoAmount ),
			'iskPerCargo'     => number_format( $iskPerCargo ),
			'iskPerHour'      => number_format( $iskPerHour ),
		];
	}
	
}
