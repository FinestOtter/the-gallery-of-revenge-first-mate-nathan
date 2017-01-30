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

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {
    public function index() {
        // get the newest images from our model
        $pix = $this->images->newest();
        
        // build an array of formatted cells from them
        foreach ($pix as $picture)
            $cells[] = $this->parser->parse('_cell', (array) $picture, true);
        
        // prime the table class
        $this->load->library('table');
        $params = array(
            'table_open' => '<table class="gallery">',
            'cell_start' => '<td class="oneimage">',
            'cell_alt_start' => '<td class="oneimage">'
        );
        $this->table->set_template($params);
        
        // finally! generate the table
        $rows = $this->table->make_columns($cells, 3);
        $this->data['thetable'] = $this->table->generate($rows);
        
        $this->data['pagebody'] = 'welcome'; 
        $this->render();
    }
}
