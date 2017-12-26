<?php
namespace Miner\Services;

use Miner\Modifiers;

class Miner {

    public function loadRoutes(){
        require __DIR__ . '/../../routes/web.php';
    }

    public function getUserModifiers(){
        $modifiers = new Modifiers([60, 60], true);
		$modifiers->miningSkill = 5;
		$modifiers->astroSkill = 3;
		$modifiers->frigateSkill = 3;
        $modifiers->upgradeLaser = 1;

        return $modifiers;
    }
}