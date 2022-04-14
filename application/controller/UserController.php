<?php

    class UserController extends Framework
    {

        public function __constructor()
        {
            
        }

        public function index() {
            $data='hello';
           $this->view('userView',$data);
        }

        // public function getAll($id)
        // {
        //     $this->model('UserModel');
        //     $user = New userModel(); 
        //     $data = $user->myData();
        //     return $this->view('userView',['employee'=>'14']);
        // }

        // public function userMethod($firstName, $lastName) {
        //     echo "This is user method. <br>";
        //     echo $firstName. " " .$lastName. ".";
        // }

        // public function userMethod() {
        //     $myModel=$this->model('userModel');
        //     if($myModel->myData())
        //     {
        //         echo "insert sucessfully";
        //     }
        //     else
        //     {
        //         echo "sorry";
        //     }
        // }

        public function signup() {

          $userModel=$this->model('userModel');
          $fullname=$this->input('fullname');
          $email=$this->input('email');
          $pass=$this->input('pass');
         if( $userModel->usersignup($fullname,$email,$pass))
         {
             echo "success";

         }
         else
         {
             echo "not successes";
         }

        }

        public function userModel() {
            $myModel = $this->model("UserModel");
            $myModel->myData();
        }
    }

?>