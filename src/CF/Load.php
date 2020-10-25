<?ph

namespace CF;

use pocketmine\plugin\PluginBase as PB;
use pocketmine\event\Listener as LT;
use pocketmine\utils\{Config,TextFormat as Text};
use pocketmine\{Server,Player};
class Load extends PB implements LT {

public static $instancia;
public static $config = [];
public const PREFIX_SW = "§8[§bSkyWars§8]";
public const SW_RESTART = "§8[§eRestart§8]";
public const SW_WAITING = "§8[§bWaiting§8]";

public function onEnable(){


$this->getLogger()->info('Enabled SkyWars');
$this->getLogger()->notice('Poggit: https://poggit.pmmp.io/SrClau/SkyWars, GitHub: https://github.com/SrClau/SkyWars, Discord: httpz://discord.gg/');
}

public static function SkyWars(): Load {
return self::$instancia;
}
}
