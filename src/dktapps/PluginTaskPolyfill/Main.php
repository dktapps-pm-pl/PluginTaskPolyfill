<?php

namespace dktapps\PluginTaskPolyfill;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

	public function onEnable(){
		$this->getScheduler()->scheduleDelayedTask(new MyTask($this), 10);
	}
}
