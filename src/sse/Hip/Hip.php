<?php

namespace sse\Hip;
  
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Hip extends PluginBase implements Listener
{

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
		$command = $command->getName ();
		$player = $sender->getPlayer ();
		$name = $player->getName ();
		if ($command == "흔들") {
		   $this->getServer()->broadcastMessage ("§l§6(( §f왼쪽으로! \n§l§6))§f 오른쪽으로! §6{name} 님이 흔들었습니다.");
		   return true;
		}
		return true;
	}
}
