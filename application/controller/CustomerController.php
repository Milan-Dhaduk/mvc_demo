<?php

    class CustomerController extends Framework{

        public function __constructor()
        {
            
        }
        public function index1() {
            
            echo "CustomerController Method";
        }

        public function getAll($id)
        {
            $this->model('UserModel');
            $user = New userModel(); 
            $data = $user->myData();
            return $this->view('userView',['employee'=>'11']);
        }

        public function userMethod($firstName, $lastName) {
            echo "This is user method. <br>";
            echo $firstName. " " .$lastName. ".";
        }

       

        public function userModel() {
            $myModel = $this->model("UserModel");
            $myModel->myData();
        }

      
            
            
    }

?>