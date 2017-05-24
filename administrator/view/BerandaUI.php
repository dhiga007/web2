<?php 

require_once 'View.php';
/**
* 
*/
class berandaUI extends View
{
	
	public function tampilLengkap()
	{
		include_once 'pages/beranda.php';
		$this->end();
	}
}



 ?>