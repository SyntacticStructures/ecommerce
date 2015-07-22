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
        $salt = bin2hex(openssl_random_pseudo_bytes(22));
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
     function insert($product){
        $this->load->library("form_validation");
        /*Here is the built-in form validation*/
        $this->form_validation->set_rules("name", "name", "trim|required");
        $this->form_validation->set_rules("description", "description", "trim");
        $this->form_validation->set_rules("category", "category", "trim");
        $this->form_validation->set_rules("image", "image", "required");
            if($this->form_validation->run() === FALSE) /*registration errors*/
        {
            $this->session->set_flashdata('errors',validation_errors()); 
        }
        else{/*we need to build the ability to add a new category, too*/

            /*get id of chosen category*/

            $query = "SELECT id FROM categories WHERE category = ?";
            $values = $product['categories'];
            $category_id = $this->db->query($query,$values)->row_array();

            /*insert name and price and description*/
            $query = "INSERT INTO products (name, price, description, category_id, created_at, updated_at) VALUES(?,?,?,?,?,?)";
            $values = array($product['name'], $product['price'], $product['description'], $category_id, date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
            $this->db->query($query, $values);

            /*get id of inserted product*/

            $query = "SELECT id FROM products WHERE name = ?";
            $values = $product['name'];
            $product_id = $this->db->query($query,$values)->row_array();

            // Insert the image.

            $query = "INSERT INTO images (image, product_id, created_at, updated_at) VALUES (?,?,?,?)";
            $values = array($product['image'], $product_id, date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
            $this->db->query($query,$values);
        }
     }
     function get_categories(){
        $query = "SELECT * FROM categories";
        return $this->db->query($query)->result_array();
     }
     function insert_category($category){
        $query = "INSERT INTO categories (category, created_at, updated_at) VALUES (?,?,?)";
        $values = array($category, date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
        $this->db->query($query,$values);
     }
     function get_all_products(){
        $query = "SELECT * FROM products LEFT JOIN images on images.product_id = products.id";
        return $this->db->query($query)->result_array();
     }
     function get_product_by_id($id){
        $query = "SELECT * FROM products LEFT JOIN images on images.product_id = products.id WHERE products.id=?";
        $values = $id;
        $products = $this->db->query($query, $id)->row_array();
        $query = "SELECT category FROM categories WHERE id = ?";
        $values = $products['category_id'];
        $category = $this->db->query($query, $values)->row_array();
        return array($products, $category);
     }
}


?>