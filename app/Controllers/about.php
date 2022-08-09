<?php

namespace App\Controllers;

class About extends BaseController {

    public function aboutPage() {
        helper('url');
        echo view('header/header');
        echo view('css/css');
        echo view('tophead/tophead');
        echo view('navbar/navbar');
        echo view('about/about-section1');
        echo view('about/about-section2');
        echo view('about/about-section3');
        echo view('about/about-section4');
        echo view('about/about-section5');
        echo view('about/about-section6');
        echo view('about/about-section7');
        echo view('about/about-section8');
        echo view('about/about-section9');
        echo view('about/about-section10');
        echo view('about/about-section11');


        echo view('footer/footer');
        echo view('footer/footer-section1');
        echo view('js/js');

    }
    

}
