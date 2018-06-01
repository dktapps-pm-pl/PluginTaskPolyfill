<?php

declare(strict_types=1);

namespace pocketmine\scheduler;

use pocketmine\plugin\Plugin;

/**
 * Base class for lazy people who don't want to adapt their code to deal with the new updates.
 * This seems pointless to me, since you'll have to update code anyway, and this class was never very useful to begin
 * with because you can't typehint $owner or getOwner() without breaking it.
 *
 * This class is not hard to replace and in most cases was totally unnecessary anyway since most things did not use it
 * correctly.
 */
abstract class PluginTask extends Task{

	/** @var Plugin */
	protected $owner;

	/**
	 * @param Plugin $owner
	 */
	public function __construct(Plugin $owner){
		$this->owner = $owner;
	}

	/**
	 * @return Plugin
	 */
	final public function getOwner() : Plugin{
		return $this->owner;
	}

}
