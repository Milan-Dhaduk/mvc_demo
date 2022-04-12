<?php
// for controller only
    class Rout {
        public $controller = "Welcome";
        public $method = "index";
        public $parameter = [];
        
        public function __construct() {
            echo "<pre>";
            $url = $this->url();

            if(!empty($url)) {
                if(file_exists("../application/controller/" .$url[0]. ".php")) {
                    $this->controller = $url[0];
                    unset($url[0]);
                } else {
                    echo "Sorry Controller " .$url[0]. ".php not Found";
                }
            }
            print_r($this->controller);

            // include controller folder
            include_once "../application/controller/" .$this->controller. ".php";

            // create object of controller folder
            $this->controller = new $this->controller;

            if(isset($url[1]) && !empty($url[1])) {
                if(method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                } else {
                    echo "Sorry Method " .$url[1]. " not found";
                }
            }

            if(isset($url)) {
                $this->parameter = $url;
            } else {
                $this->parameter = [];
            }
            
            print_r($url);
            print_r($this->method);
            print_r($this->parameter);
            call_user_func_array([$this->controller, $this->method],$this->parameter);
        }

        public function url() {
            if(isset($_GET['url'])) {
                $url = $_GET['url'];
                $url = rtrim($url);
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode("/", $url);
                print_r($url);
                return $url;
            }
        }
    }


?>