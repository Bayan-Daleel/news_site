<?php

namespace MVC\Controllers;

use MVC\core\Controller;

class adminpostcontroller extends controller {

public function index() {   

    $this->view('back/index',['title' => 'Admin']);
}
}

?>