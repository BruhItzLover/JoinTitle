<?php

declare(strict_types=1);

namespace Title;

use Title\Main;
use pocketmine\scheduler\PluginTask;
use pocketmine\Player;

class Title extends PluginTask{

    private $player;
    private $main;

    public function __construct(Main $main, Player $player){
        parent::__construct($main);
        $this->main = $main;
        $this->player = $player;
    }

    public function onRun(int $tick){
        $title = $this->main->getConfig()->get("Title");
        $title = str_replace("{player}", $this->player->getName(), $title);
        $subtitle = $this->main->getConfig()->get("Subtitle");
        $subtitle = str_replace("{player}", $this->player->getName(), $subtitle);
        $this->player->addTitle($title, $subtitle);
    }
}