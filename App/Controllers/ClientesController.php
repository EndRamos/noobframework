<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Clientes;

class ClientesController extends Controller {

    private $clienteModel;

    public function __construct() {
        $this->clienteModel = new Clientes();
    }

    public function index() {
        $clientes = $this->clienteModel->get();
        $this->view('clientes', ['clientes' => $clientes]);
    }
}