<?php

class Note_model extends CI_Model {

    public function get_by_id($id)
    {
        $item = $this->db->where('id', $id)->get('notes')->row();
        return $item ? $item : FALSE;
    }

    public function get_last_note()
    {
        $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $item = $this->db->get('notes')->row();
        return $item ? $item : FALSE;
    }

    public function get_list()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('notes')->result();
    }

    public function insert()
    {
        $data = $this->_sanitize($this->input->post('note'));
        $this->db->insert('notes', $data);
    }

    public function search()
    {
        $key = $this->input->get('s');
        
        $this->db->where('(`subject` LIKE "%'.$key.'%" OR `body` LIKE "%'.$key.'%")');
        return $this->db->get('notes')->result();
    }

    private function _sanitize($data)
    {
        // do some stuff
        // ...

        return $data;
    }

}
