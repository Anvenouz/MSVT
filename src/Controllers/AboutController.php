<?php

namespace MSVT\Controllers;

class AboutController extends LayoutController {

    public function terms() {
        $this->render('about/term');
    }

    public function privacy() {
        $this->render('about/privacy');
    }

    public function historique() {
        $this->render('about/historique');
    }
}
