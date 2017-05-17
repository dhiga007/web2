<?php 

require_once 'view.php';
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