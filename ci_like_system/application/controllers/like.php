<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Like extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this -> jquery -> script(base_url() . 'js/jquery.js', TRUE);
        $this -> load -> model('like_model');
        $this -> like_model -> java_fucntions();
    }

    function index() {
       

        if ($this->input->post('likes')){
            $id = $this->input->post('id');
            $likes = $this->input->post('likes');
            $this->like_model->add_likes($id,$likes);
            
        }
        $data['likes'] = $this -> like_model -> get_likes();
        $this -> load -> view('header_view');
        $this -> load -> view('main_view', $data);
    }

}
