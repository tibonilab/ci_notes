<?php

class Notes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('note_model');
    }

    public function form()
    {
        $this->load->library('form_validation');

        if ($this->form_validation->run() === FALSE)
        {
            $data = ['error' => validation_errors()];
        }
        else
        {
            $this->note_model->insert();
            redirect(base_url());
        }

        $this->_view('notes/form', $data);
    }

    public function index($id = NULL)
    {
        $note = $id ? $this->note_model->get_by_id($id) : $this->note_model->get_last_note();

        if($id && ! $note) {
            show_404();
        }

        $data = [
            'note' => $note,
            'list' => $this->note_model->get_list()
        ];

        $this->_view('notes/index', $data);
    }

    public function missing()
    {
        $this->_view('notes/missing');
    }

    private function _view($view, $data = NULL)
    {
        $this->load->view('template/header');
        $this->load->view($view, $data);
        $this->load->view('template/footer');
    }
}
