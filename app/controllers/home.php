<?php

class Home extends Controller{
    function index($a, $b, $c){
        show($a);
        show($b);
        show($c);

        $image_class = $this->loadModel("image_class");
        show($image_class);
        $this->view("home");
    }
}