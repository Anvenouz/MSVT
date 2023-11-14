<?php

namespace MSVT\Controllers;


class ActivitiesServicesController extends LayoutController {
    public function index() {
        $this->render('services/index');
    }

    public function stagesCN() {
        $this->render('services/stagesCN');
    }

    public function visites() {
        $this->render('services/visites');
    }

    public function anniversaires() {
        $this->render('services/anniversaires');
    }

    public function location() {
        $this->render('services/location');
    }
}
