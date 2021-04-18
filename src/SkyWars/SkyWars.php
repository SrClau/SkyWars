<?php

namespace SkyWars;

use pocketmine\plugin\PluginBase;

class SkyWars extends PluginBase {

/** @var SkyWars **/
public static $instance;

public function onEnable(): void {
self::$instance = $this;
}

public static function getInstance(): SkyWars {
return self::$instance ?? null;
}
}
