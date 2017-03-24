<?php
require_once("GoodManClass.php");
require_once("BadManClass.php");
require_once("WeaponClass.php");
class War
{
	public $weaponArray = ['二营长','骑兵连','意大利炮','军乐团','秀芹'];
	public $attactArray = [80,100,200,40,999];
	public function startWar(GoodMan $goodMan, BadMan $badMan)
	{
		echo "李云龙和楚云飞的战斗开始<br>";
		$flag = true;
		while($flag)
		{
			$randNumber1 = rand(1,3);
			$weapon1 = new Weapon();
			$randWeapon1 = rand(0,4);
			$weapon1->setWeaponName($this->weaponArray[$randWeapon1]);
			$weapon1->setWeaponAttact($this->attactArray[$randWeapon1]);
			
			$randNumber2 = rand(1,3);
			$weapon2 = new Weapon();
			$randWeapon2 = rand(0,4);
			$weapon2->setWeaponName($this->weaponArray[$randWeapon2]);
			$weapon2->setWeaponAttact($this->attactArray[$randWeapon2]);

			switch($randNumber1){
				case 1 :
						$badMan->attact($goodMan);
						break;

				case 2 :
						$badMan->getWeapon($weapon2);
						break;
				default :
						echo $badMan->getName()."什么也没有做"."<br>";
						break;

			}

			switch($randNumber2){
				case 1 :
						$goodMan->attact($badMan);
						break;

				case 2 :
						$goodMan->getWeapon($weapon1);
						break;
				default :
						echo $goodMan->getName()."什么也没有做"."<br>";
						break;

			}

			if($badMan->getHP() <=0 || $goodMan->getHP() <=0){
				$flag = false;
				if($badMan->getHP() <=0){
					echo $goodMan->getName()."战胜了".$badMan->getName()."<br>";
				}else{
					echo $badMan->getName()."战胜了".$goodMan->getName()."<br>";
				}
			}
		}
	}

}
?>