<?php

namespace mjrm;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as TF;

 class Main extends PluginBase{
 
  public function onEnable(){
  $this->getServer()->getLogger()->info(TF::AQUA."food plugin has been enabled");
  $this->getLogger()->info(TF::GREEN."Plugin by cvv_119 for server MjrmCraft");
   }
   
   public function onCommand(CommandSender $s, Command $c, $label, array $args){
   switch($c->getName()){
    case 'food':
    $s->setFood(20);
    $s->sendMessage(TF::GREEN."Done you hunger now 20");
    $s->sendMessage(TF::YELLOW."plugin by cvv_119");
    }
  }
 }
