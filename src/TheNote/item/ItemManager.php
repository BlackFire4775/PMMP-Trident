<?php

declare(strict_types = 1);

namespace TheNote\item;

use TheNote\Main;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;

class ItemManager {
	public static function init(){
		ItemFactory::registerItem(new Trident(), true);
		Item::initCreativeItems();
	}
}
