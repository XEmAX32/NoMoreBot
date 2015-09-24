<?php
namespace NoMoreBot

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerPreSpawnEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pockermine\utils\TextFormat;

class Main extends PluginBase implements Listener{

private $whitelist == false;

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
$ip = $player->getIp();
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
if(!$wl->exist($name) && $this->whitelist === true){
  $player->Kick();//settare messaggio di kick
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
}

