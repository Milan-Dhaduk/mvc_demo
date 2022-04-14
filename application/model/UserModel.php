<?php
    
    class UserModel extends database
     {
        // public function myData()
        //  {
           
        //    $fullname="milan";
        //    $email="m@yahoo.com";
        //    $password="123";

        //     if($this->Query("insert into users (fullname,email,password)
        //     values (?,?,?)",[$fullname,$email,$password]))
        //     {
        //         return true;
        //     }
        //     else
        //     {
        //         return false;
        //     }
        // } 

        public function usersignup($fullname,$email,$pass)

        {

            if($this->Query("Insert into users(fullname,email,password)values(?,?,?)",[$fullname,$email,$pass]))
            {
                return true;

            }
            else
            {
                return false;
            }
        }
        
    }

?>