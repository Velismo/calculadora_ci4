<?php

namespace App\Controllers;

class Calculadora extends BaseController
{
    public function index()
    {
        $this->load->view('pages/calculadora');
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
        $data['title'] = 'Prueba';
		$model= model(Modelo_Calculadora::class);
		$data['digito1'] = $this->request->getPost('digito1');
		$data['digito2'] = $this->request->getPost('digito2');
		$data['operador'] = $this->request->getPost('operador');
		$data['resultado'] = $model->calculo($data['digito1'],$data['digito2'],$data['operador']);
		
        echo view('templates/header', $data);
        echo view('pages/calculadora', $data);
        echo view('templates/footer', $data);
	}
}