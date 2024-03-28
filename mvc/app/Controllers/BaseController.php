<?php

namespace App\Controllers;

use eftec\bladeone\BladeOne;

class BaseController
{
    public function view($filePath, $data = [])
    {
        extract($data);
        include_once PATH_VIEW . "$filePath.php";
    }

    //function render dùng cho bladeone
    public function render($view, $data = [])
    {
        //Đường dẫn chứa view
        $viewDir = "./app/views";
        $cache = "./cache";

        $blade = new BladeOne($viewDir, $cache, BladeOne::MODE_DEBUG);

        echo $blade->run($view, $data);
    }
}
