<?php
// for view only
    class Framework {

        // for access file inside of view folder 
        public function view($viewName,$data) {    // call to userview in view folder viewname variable
            if(file_exists("../application/view/" .$viewName. ".php")) {  //file found ?
                //extract($data);

                include_once "../application/view/$viewName.php";
            } else {
                echo "Sorry $viewName.php file not found";
            }
        }

        // for access file inside of model folder
        public function model($modelName) 
        {
            if(file_exists("../application/model/" .$modelName. ".php")) {  
                include_once "../application/model/$modelName.php";
                return new $modelName;    // instance of usermodel file
            } else {
                echo "Sorry $modelName.php file not found";
            }
        }
        
        public function input($inputname)
        {
            if($_SERVER['REQUEST_METHOD']=="POST" || $_SERVER['REQUEST_METHOD'] == 'post' )
            {
                return trim($_POST[$inputname]);
            }
            else if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'get')
            {
                return trim($_GET[$inputname]);
            }
            
        
        }
    }


?>