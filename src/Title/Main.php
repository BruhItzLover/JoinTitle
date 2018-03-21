<?php

declare(strict_types=1);

namespace Title;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

    public function onEnable() : void{
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $event) : void{
        $this->getServer()->getScheduler()->scheduleDelayedTask(new Title($this, $event->getPlayer()), 30);
    }
}