<?php
class Blog extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('entry_model');
    }

    // Vista para mostrar el listado de entradas
    public function index() {

        $this->load->helper('url');

        // Tu código para obtener datos y cargar la vista
    
        $data['entries'] = $this->entry_model->get_entries();

        // Cargar la vista y pasar los datos

        $search = $this->input->get('search'); // Obtener el valor del campo de búsqueda
    
        // Obtener entradas con filtros si se proporciona una búsqueda
        if ($search) {
            $data['entries'] = $this->entry_model->get_entries($search);
        } else {
            $data['entries'] = $this->entry_model->get_entries();
        }
    
        $this->load->view('blog/list', $data);
    }

    // Vista para mostrar el detalle de una entrada
    public function view($entry_id) {
        $this->load->helper('url');

        $data['entry'] = $this->entry_model->get_entry_by_id($entry_id);
        $this->load->view('blog/view', $data);
    }

    // Función para guardar una nueva entrada
    public function create() {
        $this->load->helper('url');
        $this->load->library('form_validation'); // Cargar la biblioteca de validación

        // Verificar si se ha enviado el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array(
                'title' => $this->input->post('title'),
                'author' => $this->input->post('author'),
                'content' => $this->input->post('content'),
                'date_published' => date('Y-m-d H:i:s')
            );
    
            // Insertar la entrada en la base de datos
            $this->entry_model->insert_entry($data);
            
            // Redirigir después de la inserción
            redirect('blog');
        } else {
            // Si no se ha enviado el formulario, cargar la vista del formulario
            $this->load->view('blog/create');
        }
    }
    
}
