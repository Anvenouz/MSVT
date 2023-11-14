<?php

namespace MSVT\Controllers;

class ReservationController extends LayoutController {
    public function index() {
        $this->render('reservation/index');
    }

    public function error404() {
      $this->render('errors/404');
    }

}
