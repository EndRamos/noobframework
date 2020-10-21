<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Clientes;

class ClientesController extends Controller {

    public function index() {
        $clientes = Clientes::get();
        $this->view('clientes', ['clientes' => $clientes]);
    }

    public function edit() {
        die("Editando....");
    }
}