<?php
namespace NoMoreBot

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerPreSpawnEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
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
  $this->getServer()->getScheduler()->scheduleRepeatingTask(new Timer($this), 120);
  if(){
    $wl->set($name);
    $player->sendMessage(TextFormat::BLUE . "[NoMoreBot] You Have Been Added On Whitelist");
  }
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
foreach($this->getServer()->getOnlinePlayers() as $ps){
  $ps->sendMessage(TextFormat::BLUE . "[NoMoreBot] Bot Attack Detected Turning On Whitelisting!");
  $this->whitelist == true;
  }
}

public function WLDisabler(){
foreach($this->getServer()->getOnlinePlayers() as $ps){
  $ps->sendMessage(TextFormat::BLUE . "[NoMoreBot] Bot Attack Finished!");
  $this->whitelist == false;
  }
}

public function onQuit(PlayerQuitEvent $e){
$ip = $e->getPlayer()->getAdress();
if(isset($this->IPs[$ip])){
  $this->IPs[$ip] -= 1;
  }
}

public function onRun($tick){
  $this->plugin->sec -= 1;
  $player = $e->getPlayer();
    if($this->plugin->sec => 0){
      $wl->set($name);
      $player->sendMessage(TextFormat::BLUE . "[NoMoreBot] You Have Been Added On Whitelist");
    }
  }  
}
