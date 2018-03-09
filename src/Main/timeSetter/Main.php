<?php
namespace Main\timeSetter;

use pocketmine\{
  plugin\PluginBase,
  utils\TextFormat as TF
};

class Main extends PluginBase {

  private const TIMEZONE = "Asia/Tokyo";

  public function onLoad() {
    date_default_timezone_set(self::TIMEZONE);
    $this->getLogger()->info(TF::GREEN."時刻を ".self::TIMEZONE." に合わせました。");
  }
}
