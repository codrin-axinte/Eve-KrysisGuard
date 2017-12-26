<?php namespace Miner\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Support\Arrayable;
use Symfony\Component\Console\Helper\TableSeparator;
use Miner\Entities\Ore;
use Miner\Modifiers;
use Miner\MineCalculator;

class MineCommand extends Command {

	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'miner:best {cargo=5000} {sort=iskPerHour}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Get the best ore option to mine. 
	Sorting: 
	- price 
	- am(Amount/Minute)
	- fullCargoAmount
	- iskPerCargo
	- iskPerHour';
	
	protected $headers = [
		'Name',
		'Volume',
		'Price',
		'M3/Minute',
		'Full Cargo Amount',
		'Isk/Cargo',
		'Isk/Hour',
	];

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct() {
		parent::__construct();
		//$this->addArgument('cargo', 'int', '', 5000);
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle() {
		$calculator = new MineCalculator($this->argument('cargo'), $this->getMiningAmount());
		
		$this->renderTable($calculator);				
	}

	protected function renderTable(MineCalculator $calculator){
		$rows   = Ore::all()->map( function ( Ore $ore ) use ( $calculator ) {
			return $calculator->compute( $ore );
		} )->sortByDesc($this->argument('sort'));	

		$this->table($this->headers, $rows );
	}

	protected function getMiningAmount(){
		$am = new Modifiers([60], true);
		$am->miningSkill = 5;
		$am->astroSkill = 3;
		$am->frigateSkill = 3;
		$am->upgradeLaser = 1;
		return $am->total();
	}
}



