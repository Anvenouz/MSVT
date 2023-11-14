<?php

namespace MSVT\Controllers;

use MSVT\Controller;

class LayoutController extends Controller {
    protected function render($view, $data = []) {
      parent::render('layout/header');
      parent::render('layout/menu');
      parent::render($view, $data);
      parent::render('layout/footer');
    }
}