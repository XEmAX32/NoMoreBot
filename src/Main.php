<?php
namespace NoMoreBot

use pocketmine\plugin\PluginBase;
use pocketmine\event\PlayerPreLoginEvent;
use pocketmine\event\Listener;
use pockermine\utils\TextFormat;

class Main extends PluginBase implements Listener{

private $IPs = [];
private $ipBanList;

public funtion onEnable(){
$this->getServer->getPluginManager()->registerEvents($this, $this);
$this->getLogger->info(TextFormat::GREEN . "NoMoreBot enabled");
}

public function onLoad(){
$this->getLogger()->info(TextFormat::YELLOW . "Loading NoMoreBot");
}

public function onDisable(){
$this->getLogger->info(TextFormat::RED . "NoMoreBot disabled");
}

public function onPreLog(PlayerPreLoginEvent $event{
isset($this->IPs[$ip = $event->getPlayer()->getAddress()]) ? $this->IPs[$ip] += 1 : $this->IPs[$ip] = 1; 
if($this->IPs[$ip] > 5)){
$address = $event->getPlayer()->getAddress();
$this->ipBanList->set($address);
}
}
}
?>
