<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function index()
    {
        $this->load->database();
        $this->load->model("produtos_model");
        $produtos = $this->produtos_model->buscarTodos();

        $dados = array("produtos" => $produtos);
        //$this->load->helper("url");
        //$this->load->helper("currency");
        // $this->load->helper("form");

        $this->load->view("produtos/index.php", $dados);
    }
}
