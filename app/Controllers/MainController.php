<?php

namespace App\Controllers;
use App\Models\Book;


class MainController extends CoreController
{
       // action home
    public function home($params = [])
    {
        $book = new Book();
        $bookSlider = $book->findAllFavorite();
        $this->show('main/home', ['bookSlider' => $bookSlider]);
    }
}