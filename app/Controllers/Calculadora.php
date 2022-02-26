<?php

namespace App\Controllers;

class Calculadora extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'calculadora')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // En caso de que la página no se encuente, se carga la página 404
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Ponemos en mallúscula la primera letra

        echo view('templates/header', $data);
        echo view('pages/' . $page, $data);
        echo view('templates/footer', $data);
    }

    public function calculo(){
		$this->load->model('Model_Calculadora');
		$data['digito1'] = $this->input->post('digito1');
		$data['digito2'] = $this->input->post('digito2');
		$data['operador'] = $this->input->post('operator');
		$data['resultado'] = $this->Model_Calculator->calculo($data['digito1'],$data['digito2'],$data['operador']);
		
        echo view('templates/header', $data);
        echo view('pages/' . $page, $data);
        echo view('templates/footer', $data);
	}
}