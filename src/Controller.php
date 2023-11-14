<?php

namespace MSVT;

class Controller {
    protected function render($view, $data = []) {
        extract($data);

        include_once "Views/$view.php";
    }
}
