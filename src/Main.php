<?php
namespace NoMoreBot

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerPreSpawnEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\scheduler\PluginTask;
use pockermine\utils\TextFormat;

class Main extends PluginBase implements Listener{

private $whitelist == false;
private $IPs = [];

public funtion onEnable(){
$this->getServer->getPluginManager()->registerEvents($this, $this);
$this->getLogger->info(TextFormat::BLUE . " [NoMoreBot enabled]");
$this->saveDefaultConfig();
$this->wl = new Config($this->getDataFolder()."NMBWhitelist.properties", Config::PROPERTIES);
}

public function onDisable(){
$this->getLogger()->info(TextFormat::BLUE . " [NoMoreBot disabled]");
$wl->save();
}

public function onJoin(PlayerJoinEvent $e){
$player = $e->getPlayer();
$ip = $player->getAdress();
$name = $player->getName();
if(!$wl->exist($name) && $this->whitelist === false){
  $this->getServer()->getScheduler()->scheduleRepeatingTask(new JoinWHAdder($this), 120);
  }
}

public function onPreSpawn(PlayerPreSpawnEvent $e){
$player = $e->getPlayer();
$name = $player->getName();
$ip = $player->getAdress();
isset($this->IPs[$ip]) ? $this->IPs[$ip] += 1 : $this->IPs[$ip] = 1;
if(!$wl->exist($name) && $this->whitelist === true){
  $player->SetKickMessage("[NMB] Bot Attack Detected");
  $player->Kick()"[NMB] Bot Attack Detected");
  }
}

public function WLEnabler(){
$this->getServer()->getScheduler()->scheduleRepeatingTask(new WhitelistNMB($this), 120);
}

public function onQuit(PlayerQuitEvent $e){
$ip = $e->getPlayer()->getAdress();
if(isset($this->IPs[$ip])){
  $this->IPs[$ip] -= 1;
  }
}
}
