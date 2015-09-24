<?php
namespace NoMoreBot

use pocketmine\plugin\PluginBase;
use pocketmine\event\PlayerPreLoginEvent;
use pocketmine\event\Listener;
use pockermine\utils\TextFormat;

class Main extends PluginBase implements Listener{

private $whitelist == false;

public funtion onEnable(){
$this->getServer->getPluginManager()->registerEvents($this, $this);
$this->getLogger->info(TextFormat::BLUE . " [NoMoreBot enabled]");
$this->wl = new Config($this->getDataFolder()."NMBWhitelist.properties", Config::PROPERTIES);
}

public function onDisable(){
$this->getLogger()->info(TextFormat::BLUE . " [NoMoreBot disabled]");
}

public function onJoin(PlayerJoinEvent $e){
$player = $e->getPlayer();
$ip = $player->getIp();
$this->getServer()->getScheduler()->scheduleRepeatingTask(new Timer($this), 120);
if(){
$wl->set($name);
$player->sendMessage(TextFormat::BLUE . "[NoMoreBot] You Has Been Added On Whitelist")
}


foreach($this->getServer()->getOnlinePlayers() as $ps){
$ps->sendMessage(TextFormat::BLUE . "[NoMoreBot] Bot Attack Detected Turning On Whitelisting!");
$this->whitelist == true;
}
}
}
