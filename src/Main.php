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

public function onJoin(PlayerJoinEvent $e){
$player = $e->getPlayer();
$ip = $player->getIp();
foreach($this->getServer()->getOnlinePlayers() as $ps){
$ps->sendMessage(TextFormat::BLUE . "[NoMoreBot] Bot attack detected!");

