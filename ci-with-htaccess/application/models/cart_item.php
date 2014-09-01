<?php 
class Cart_item extends CI_Model {

     function get_all_cart_items()
     {
         return $this->db->query("SELECT * FROM cart_items")->result_array();
     }

     function get_product_by_id($cart_item_id)
     {
         return $this->db->query("SELECT * FROM cart_items WHERE id = ?", array($cart_item_id))->row_array();
     }
     function add_cart_item($cart_item)
     {
         $query = "INSERT INTO Cart_items (quantity, description, price) VALUES (?,?,?)";
         $values = array($cart_item[0], $cart_item[1], $cart_item[2]); 
         return $this->db->query($query, $values);
     }
}

?>