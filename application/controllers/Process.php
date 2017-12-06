<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Process extends CI_Controller {
    
    public function index() {
        $json = json_encode( $this->input->post() );
        $data = [
            'data' => $json
        ];
        $this->db->insert( 'data', $data );

        $this->session->set_flashdata('response', 'true');
        redirect( base_url() );
    }
}
