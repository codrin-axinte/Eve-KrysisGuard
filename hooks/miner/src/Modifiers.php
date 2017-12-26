<?php namespace Miner;


class Modifiers {
	/**
	 * @var int
	 */
	public $miningSkill = 0;
	/**
	 * @var int
	 */
	public $astroSkill = 0;
	/**
	 * @var int
	 */
	public $frigateSkill = 0;
	/**
	 * @var int
	 */
	public $upgradeLaser = 0;
	/**
	 * @var bool
	 */
	private $ventureBonus = false;	
	/**
	 * @var array
	 */
	private $turrets = [];

	/**
	 * @param array $turrets
	 * @param bool $ventureBonus
	 */
	public function __construct(array $turrets, $ventureBonus = false){
		$this->turrets = $turrets;	
		$this->ventureBonus = $ventureBonus;	
	}

	/**
	 * Get the total amount for each turret
	 * @return float
	 */
	public function total() {
		$total = 0;
		foreach($this->turrets as $turret)
			$total += $this->compute($turret);		
		return $total;
	}

	/**
	 * Get the mining amount by the base mining amount value.
	 * @param int $base
	 * @return float
	 */
	private function compute($base){
		$amount = 
		 $this->getSkillPercent($this->miningSkill)  *
		 $this->getSkillPercent($this->astroSkill)   *
		 $this->getSkillPercent($this->frigateSkill) *
		 $this->getSkillPercent($this->upgradeLaser)		
		;
		return $base * $amount * $this->getVentureBonus();
	}

	/**
	 * Get the venture bonus value.
	 * If it hase the venture bonus double it, otherwise just set it 1 to not affect the value.
	 * @return int
	 */
	private function getVentureBonus(){
		return $this->ventureBonus ? 2 : 1;
	}

	/**
	 * Apply 5% for each level of the skill
     * Astro 3 = 1.15
		Mining 5 = 1.25
		Mining Frigate 3 = 1.15
		Upgrade Laser = 1.05
		Venture Bonus = 2
		1.15 * 1.25 * 1.15 * 1.05 * 2
	 * @param int $level
	 * @return float
	 */
	private function getSkillPercent($level){	
		//echo sprintf('Level %s: %s | ', $level, $value);	
		return  1 + ((5 * $level) / 100);	
	}
}