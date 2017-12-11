<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->library('library');
    }

    public function index()
    {   
        $meta['title'] = '';
        $meta['image'] = base_url().'assets/images/meta_images.jpg';
        $meta['description'] = '';
        $meta['keyword'] = '';

        $this->load->view('layouts/header', $array = array(
            'meta' => $meta
        ));
        $this->load->view('layouts/home');
        $this->load->view('layouts/footer');
    }
}
