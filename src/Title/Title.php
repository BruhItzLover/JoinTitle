<?php

namespace Title;

use Title\Main;
use pocketmine\scheduler\PluginTask;
use pocketmine\Player;

class Title extends PluginTask{

	public function __construct(Main $main, Player $player){

		parent::__construct($main, $player);
		$this->main = $main;
		$this->player = $player;
	}
	public function onRun($tick){
        
        $title = $this->main->getConfig()->get("Title");
        $title = str_replace("{player}", $this->player->getName(), $title);
        
        $subtitle = $this->main->getConfig()->get("Subtitle");
        $subtitle = str_replace("{player}", $this->player->getName(), $subtitle);
        
        $this->player->addTitle($title, $subtitle);
	}
}