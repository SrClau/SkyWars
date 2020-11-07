<?php

namespace CF;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\{Player,Server};
use pocketmine\utils\{Config,TextFormat as Text};
use pocketmine\entity\{Skin,Entity};

class Load extends PluginBase implements Listener {

/** @array Arena (arenas.yml) **/
public $arenas = [];

/** @return Load.php **/
public static $plugin;

public function onLoad(){
/*$this->reloadConfig(); (no creado) */
}

public function onEnable(){
  
}

public function onDisable(){
  
}

/** @return $plugin 
**/
public static function getLoad(): Load {
return self::$plugin;
}

public function getArenas(): array {
return $this->arenas;
}

public function reloadConfig(){
//foreach()
}
}