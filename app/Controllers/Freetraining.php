<?php

namespace App\Controllers;

class Freetraining extends BaseController {

    public function freetrainingPage() {
        echo view('css/ecomm');
        echo view('freetraining/freetraining-section1');


    }
    

}
