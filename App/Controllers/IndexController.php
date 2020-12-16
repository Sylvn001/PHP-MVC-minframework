<?php 

    namespace App\Controllers;

    class IndexController{

        private $view; 

        public function __construct(){
            $this->view = new \stdClass();
        }

        public function index(){
            $this->view->data =  array('cama' , 'sofá', 'cama');
            $this->render('index');
        }

        public function about(){
            $this->view->data =  array('cama' , 'sofá', 'cama');
            $this->render('about');
        }

        public function render($view){
            $className =  get_class($this);
            $className =  str_replace('App\\Controllers\\' , '', $className);
            $className = strtolower(str_replace('Controller', "",$className));

            require_once "../App/views/".$className."/".$view.".phtml";
        }
    }                       