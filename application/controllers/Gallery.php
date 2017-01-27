<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gallery
 *
 * @author chach
 */
class Gallery extends Application{
    public function index() {
        $this->load->view('gallery');
    }
}
