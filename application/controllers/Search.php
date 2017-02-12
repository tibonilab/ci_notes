<?php

class Search extends CI_Controller {

    public function index()
    {
        $this->load->model('note_model');

        $data = [
            'results' => $this->note_model->search()
        ];

        $this->_view('search/index', $data);
    }


    private function _view($view, $data = NULL)
    {
        $this->load->view('template/header');
        $this->load->view($view, $data);
        $this->load->view('template/footer');
    }

}
