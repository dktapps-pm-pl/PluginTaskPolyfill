<?php

declare(strict_types=1);

namespace dktapps\PluginTaskPolyfill;

use pocketmine\scheduler\PluginTask;

class MyTask extends PluginTask{

	public function onRun(int $currentTick) : void{
		$this->getOwner()->getLogger()->info("hello!");
	}
}
