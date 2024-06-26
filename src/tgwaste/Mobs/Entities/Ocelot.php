<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;

use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Ocelot extends MobsEntity {
	const TYPE_ID = EntityIds::OCELOT;
	const HEIGHT = 0.7;
	const basehealth = 10;
	const regenamount = 1;
	const drops = [];
	const xpamount = 2;
}
