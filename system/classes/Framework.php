<?php
// for view only
    class Framework {

        // for access file inside of view folder 
        public function view($viewName,$data) {
            if(file_exists("../application/view/" .$viewName. ".php")) {
                extract($data);

                include_once "../application/view/$viewName.php";
            } else {
                echo "Sorry $viewName.php file not found";
            }
        }

        // for access file inside of model folder
        public function model($modelName) {
            if(file_exists("../application/model/" .$modelName. ".php")) {
                include_once "../application/model/$modelName.php";
                return new $modelName;
            } else {
                echo "Sorry $modelName.php file not found";
            }
        }

    }


?>