<?php

namespace App\Controllers;



class BookController extends CoreController
{
       // action détail
    public function detail($params = [])
    {
      
        $this->show('book/detail');
    }
}