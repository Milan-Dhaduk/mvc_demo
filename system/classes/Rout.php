<?php
// for controller only
    class Rout {
        public $controller = "Welcome";  //welcome page
        public $method = "index";  // welcome page index method set 
        public $parameter = []; // user can pass maultiple parameter request url
        
        public function __construct() {
           // echo "<pre>";
            $url = $this->url();

            if(!empty($url)) {  //url empty not
                if(file_exists("../application/controller/" .$url[0]. ".php")) { //controller present
                    $this->controller = $url[0];   // deafult controller replace
                    unset($url[0]);                 // remove controller
                } else {
                    echo "Sorry Controller " .$url[0]. ".php not Found";
                }
            }
           // print_r($this->controller);

            // include controller 
            include_once "../application/controller/" .$this->controller. ".php";

            // create object of controller folder
            $this->controller = new $this->controller; //instance of controller variable

            if(isset($url[1]) && !empty($url[1])) {  // url value 1 or not empty
                if(method_exists($this->controller, $url[1])) { //method exit for controller url1
                    $this->method = $url[1];               //set 1 index url
                    unset($url[1]);
                } else {
                    echo "Sorry Method " .$url[1]. " not found";
                }
            }

            if(isset($url)) {    //url parameter set
                $this->parameter = $url;  //set parameter
            } else {
                $this->parameter = [];  // not set to empty array
            }
            
            
            //print_r($this->method);
           
            call_user_func_array([$this->controller, $this->method],$this->parameter);
        }

        public function url() {
            if(isset($_GET['url'])) {
                $url = $_GET['url'];
                $url = rtrim($url);
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode("/", $url);
                //print_r($url);
                return $url;
            }
        }
    }


?>