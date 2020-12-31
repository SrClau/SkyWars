<?php

namespace CF\SkyWars;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\{TextFormat as Text,Config};
use pocketmine\{Player,Server};
use pocketmine\entity\{Entity,Skin};

class Load extends PluginBase {

/* @return Load */
public static $instance = null;

//public $ymls = [];
  
/* @here Function Enable */
public function onEnable(){
$this->getLogger()->notice("Plugin SkyWars Enabled");
$config = new Config($this->getDataFolder()."config.yml", Config::YAML);
if($config->get("arenas") == null) {
 $config->set("arenas", []);
 $config->save();
     }
  }
}
