<?php
require_once("GoodManClass.php");
require_once("ManClass.php");
require_once("WeaponClass.php");
class BadMan extends Man
{
	public function __construct($_name,$_hp,$_attact)
	{
		$this->name = $_name;
		$this->hp = $_hp;
		$this->attact = $_attact;
	}

	public function attact(GoodMan $goodman)
	{
		echo $this->name."发起了攻击<br>";
		$goodman->setHP($this->attact);

	}
	public function getHP(){
		return $this->hp;
	}
	public function setHP($attact)
	{
		$this->hp -= $attact;
		echo $this->name."被攻击，血量减少了".$attact."<br>";
		echo $this->name."的HP还剩下".$this->hp."<br>";
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