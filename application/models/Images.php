<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Images
 *
 * @author chach
 */
class Images extends CI_Model {
    //Constructor, calls the parent constructot
    function __construct() {
        parent::__construct();
    }
    
    //return all images, newest first
    function all() {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }
    
    //return just the newest 3 images
    function newest() {
        $this->db->order_by("id", "desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query->result_array();
    }
}
