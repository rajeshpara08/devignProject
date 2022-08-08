<?php

namespace App\Controllers;

class Blogs extends BaseController {

    public function blogsPage() {
        helper('url');
        echo view('header/header');
        echo view('css/css');
        echo view('tophead/tophead');
        echo view('navbar/navbar');
        echo view('blogs/blogs-section1');
        echo view('blogs/blogs-section2');
        echo view('blogs/blogs-section3');

        echo view('footer/footer');
        echo view('footer/footer-section1');
        echo view('js/js');

    }
    

}
