<?php

class Weapon
{
	private $weaponName;
	private $weaponAttact;

	public function setWeaponName($name)
	{
		$this->weaponName = $name;
	}
	public function getWeaponName()
	{
		return $this->weaponName;
	}
	public function setWeaponAttact($attact)
	{
		$this->weaponAttact = $attact;
	}
	public function getWeaponAttact()
	{
		return $this->weaponAttact;
	}
}

?>