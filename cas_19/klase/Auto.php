
<?php

class Auto
{
	public $marka;
	public $model;
	public $kubikaza;
	public $boja;

	public function snimiAuto()
	{
		echo $this->marka . " " . $this->model;
	}

	public function ofarbaj($novaBoja)
	{
		$this->boja = $novaBoja;
	}
}
