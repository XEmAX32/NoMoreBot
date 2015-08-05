<php?
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
$this->getLogger->info(TextFormat::BLUE . " [NoMoreBot enabled]");
}

public function onDisable(){
$this->getLogger()->info(TextFormat::BLUE . " [NoMoreBot disabled]");
}

public function 
