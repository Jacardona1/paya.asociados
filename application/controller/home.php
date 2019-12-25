<?php

class Home extends Controller
{

  private $model = null;

  function __construct(){
}

    public function index()
    {
        require APP . 'view/home/index.php';
    }

    public function Registro()
    {
      require APP . 'view/home/registro.php';
    }


}
