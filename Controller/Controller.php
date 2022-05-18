<?php

namespace Controller;

class Controller {
    
    private $model;
    
    public function __construct($model) {
        $this->model = $model;
    }
    
    public function action(){
        $this->model->title = "This is controller change data";
    }
}
