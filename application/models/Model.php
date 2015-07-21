<?php 

class Model extends CI_Model {
     function get_all_courses()
     {
         return $this->db->query("SELECT * FROM courses")->result_array();
     }
     function login($email, $password){
        $link = mysqli_connect("localhost", "root", "root", "ecommerce"); /*this is a link to the db. this variable must be passed into the real escape string function.*/
        $password = mysqli_real_escape_string($link, $password);
        $email = mysqli_real_escape_string($link, $email);
        $query = "SELECT * FROM admin WHERE email = ?";
        if($email != null && $password != null){ /*this cant be removed. it doesnt like the query if we query a null value twice in a row for some reason. NOTE: let's double check to make sure we should be putting all this security stuff in our model*/
            $admin = $this->db->query($query,$email)->row_array();
            if(!empty($admin)){
                $encrypted_password = md5($password . '' . $admin['salt']);
                if($admin['password'] == $encrypted_password ){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
     }
}


?>