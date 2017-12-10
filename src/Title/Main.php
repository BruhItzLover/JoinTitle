<?php

namespace Title;

use pocketmine\plugin\PluginBase as P;
use pocketmine\event\Listener as L;
use pocketmine\event\player\PlayerJoinEvent;
use Title\Title;
use pocketmine\utils\Config;

class Main extends P implements L{

	public function onEnable(){
        $this->saveDefaultConfig();
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onJoin(PlayerJoinEvent $e){
		$player = $e->getPlayer();

		$this->getServer()->getScheduler()->scheduleDelayedTask(new Title($this, $player), 30);
	}
}