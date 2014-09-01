<?php 
class Product extends CI_Model {

     function get_all_products()
     {
         return $this->db->query("SELECT * FROM products")->result_array();
     }

     function get_product_by_id($product_id)
     {
         return $this->db->query("SELECT * FROM products WHERE id = ?", array($product_id))->row_array();
     }
//      function add_product($product)
//      {
//          $query = "INSERT INTO Products (title, description, created_at) VALUES (?,?,?)";
//          $values = array($course['title'], $course['description'], date("Y-m-d, H:i:s")); 
//          return $this->db->query($query, $values);
//      }
}

?>