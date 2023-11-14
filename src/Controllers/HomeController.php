<?php

namespace MSVT\Controllers;

class HomeController extends LayoutController {
    public function index() {
        $this->render('home/index');
    }

    public function galerie() {
        $this->render('home/galerie');
    }

    public function contact() {
        $this->render('home/contact');
    }

    public function error404() {
      $this->render('errors/404');
    }

}
