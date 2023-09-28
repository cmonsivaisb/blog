<?php
class Entry_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    // Función para insertar una entrada en la base de datos
    public function insert_entry($data) {
        $this->db->insert('entries', $data);
    }

    // Función para obtener todas las entradas o filtrar por título, contenido o autor
    public function get_entries($filter = null) {
        if ($filter) {
            $this->db->like('title', $filter);
            $this->db->or_like('content', $filter);
            $this->db->or_like('author', $filter);
        }
        $query = $this->db->get('entries');
        return $query->result_array();
    }

    // Función para obtener una entrada por ID
    public function get_entry_by_id($entry_id) {
        $query = $this->db->get_where('entries', array('id' => $entry_id));
        return $query->row_array();
    }
}
