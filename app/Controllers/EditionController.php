<?php

namespace App\Controllers;
use App\Models\Book;


class EditionController extends CoreController
{
     
    public function list($id)
    {
       $bookEdition = Book::findByEdition($id);
        $this->show('edition/list', ["bookEdition" => $bookEdition]);
    }

}