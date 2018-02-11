<?php

class User_model extends CI_Model {

    public function getUser(){
        $query = "SELECT * FROM users";
        $users = $this->db->query($query);
        return $users;
    }

    public function getUserByID($userID)
    {
        $query = "SELECT * FROM users WHERE user_id = '$userID'";
        return $this->db->query($query);
    }

     public function insertUser($data)
     {
        $username = $data['username'];
        $password = $data['password'];
        $fullname = $data['fullname'];
        $email = $data['email'];
        $age = $data['age'];
        $pic ='';
        $query = "INSERT INTO users (username,password,fullname, email, age, pic) VALUES ('$username','$password','$fullname', '$email', '$age','$pic')";
        return $this->db->query($query);
    } 

    public function update($userID, $data)
   {
       $username = $data['username'];
       $password = $data['password'];
       $fullname = $data['fullname'];
       $email = $data['email'];
       $age = $data['age'];
       $pic = '';
       $query = "UPDATE users SET username = '$username', password = '$password',fullname = '$fullname', email = '$email', age = '$age' WHERE user_id = '$userID'";
       return $this->db->query($query);
   }


   public function delete($userId)
   {
       $query = "DELETE FROM users WHERE user_id = '$userId'";
       return $this->db->query($query);
   }

   #Auth
   public function checkLogin($username, $password)
   {
       $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
       return $this->db->query($query);
   }

}