<?php

namespace NoMoreBot;

use pocketmine\scheduler\PluginTask;
use pocketmine\utils\TextFormat;

class JoinWHAdder extends PluginTask{
  
public function __construct($plugin){
  $this->plugin = $plugin;
  parent::__construct($plugin);
}
     
public function onRun($tick){
$this->plugin->sec -= 1;
if($this->plugin->sec => $started){
  foreach($this->getServer()->getOnlinePlayers() as $ps){
    $ps->sendMessage(TextFormat::BLUE . "[NoMoreBot] Bot Attack Detected Turning On Whitelisting!");
    $this->whitelist == true;
   }
}
if($this->plugin->sec => $stopped){
    foreach($this->getServer()->getOnlinePlayers() as $ps){
     $ps->sendMessage(TextFormat::BLUE . "[NoMoreBot] Bot Attack Finished!");
     $this->whitelist == false;
   }
  }
}
}
