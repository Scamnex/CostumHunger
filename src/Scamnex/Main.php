<?php
#This plugin is written by Scamnex
#Copyright by Scamnex | 2019 | CustomHunger
namespace Scamnex;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
class NoHunger extends PluginBase implements Listener {
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function Hunger(PlayerExhaustEvent $exhaustEvent) {
        $Settings = new Config($this->getDataFolder() . "config.yml", Config::YAML);
          $nohunger = $settings->get("no_hunger");
        $exhaustEvent->setCancelled("$nohunger");
    }
}
