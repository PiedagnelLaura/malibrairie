<?php
namespace App\Controllers;


class CoreController {

    protected function show($viewName, $viewData = []) {
        global $router;

        $viewData['currentPage'] = $viewName;
        extract( $viewData );

        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }

}