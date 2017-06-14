<?php 

require_once 'View.php';
/**
* 
*/
class BerandaUI extends View
{
	
	public function tampilLengkap()
	{
		$nama = "Alif";
		include_once 'pages/beranda.php';
		echo "$alamat";
		$this->end();
	}
}



 ?>