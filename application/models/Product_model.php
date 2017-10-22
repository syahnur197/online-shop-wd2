<?php

class Product_model extends CI_Model {
	
    /**
        Get all products

        @return PHP Object of all product
    **/
	public function getAllProducts() {
		return $this->db->join(CATEGORY, "catt.category_id = pt.category_id")->get(PRODUCT);
	}

	/**
        Get six products for display on homepage

        @return PHP Object of six products 
    **/

	public function getSixProducts() {
		return $this->db->limit(6)->get(PRODUCT);
	}

	/**
        Get data of product

        @param int $product_id (DEFAULT = "")

        @return PHP Object of product data
    **/

	public function getProduct($product_id = "") {
		return $this->db->get_where(PRODUCT, array("product_id" => $product_id));
	}

	/**
        Get data of product in a category

        @param int $category_id (DEFAULT = "")

        @return PHP Object of product data of the category
    **/

	public function getCategoryProduct($category_id = "") {
		return $this->db->get_where(PRODUCT, array("category_id" => $category_id));
	}

	/**
        Get data of seller's product

        @param int $seller (DEFAULT = "")

        @return PHP Object of seller's product data
    **/

	public function getSellerProduct($seller_id = "") {
		return $this->db->get_where(PRODUCT, array("seller_id" => $seller_id));		
	}

	/**
        Add product

        @param arr 

        @return void
    **/

	public function addProduct($array) {
		return $this->db->insert("product_table", $array);
	}

	/**
        Update product data

        @param int $product_id (DEFAULT = ""), arr $array

        @return void
    **/

	public function updateProduct($product_id, $array) {
		return $this->db->where("product_id", $product_id)->update(PRODUCT, $array);
	}

	/**
        Get data of searched product

        @param String $search (DEFAULT = "")

        @return PHP Object of product data
    **/

	public function searchProduct($search = "") {
		return $this->db->like('product_name', "$search")->get(PRODUCT);
	}

	/**
        Get data of active product

        @param int $product_id (DEFAULT = "")

        @return PHP Object of product data
    **/

	/* 	UNUSED
	public function getActiveProduct($userid) {
		return $this->db->join(CATEGORY, "catt.category_id = pt.category_id")->get_where(PRODUCT,array("seller_id" => $userid));
	} 
	*/

	/**
        Ban product

        @param int $product_id (DEFAULT = "")

        @return void
	**/

	/* UNUSED 
	public function banProduct($product_id) {
		return $this->db->where('product_id', $product_id)->update(PRODUCT, array('ban_flag' => 1));
	}
 	*/
}
?>