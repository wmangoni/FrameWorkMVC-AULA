<?php

/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/


namespace App\Controllers;

use FrameworkAULA\Http\Controller;

//controller
class IndexController extends BaseController{

	
	//action
	public function Index(){

		$this->service->render('home/list.home.phtml');
	}



	

}