<?php
require_once("BadManClass.php");
require_once("ManClass.php");
require_once("WeaponClass.php");
class GoodMan extends Man
{
	public function __construct($_name,$_hp,$_attact)
	{
		$this->name = $_name;
		$this->hp = $_hp;
		$this->attact = $_attact;
	}

	public function attact(BadMan $badman)
	{
		echo $this->name."向发".$badman->name."起了攻击<br>";
		$badman->setHP($this->attact);

	}
	public function setHP($attact)
	{
		$this->hp -= $attact;
		echo $this->name."被攻击，血量减少了".$attact."<br>";
		echo $this->name."的HP还剩下".$this->hp."<br>";
	}
	public function getHP(){
		return $this->hp;
	}
	public function getName()
	{
		return $this->name;
	}

	public function getWeapon(Weapon $weapon)
	{
		$this->attact += $weapon->getWeaponAttact();
		echo $this->name."获得了".$weapon->getWeaponName().",攻击力提升了".$weapon->getWeaponAttact()."<br>";
	}
	

}

?>