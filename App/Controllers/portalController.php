<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Noticia;

class PortalController extends Controller {

    public function index() {
        $noticiaModel = new Noticia();
        $noticias = $noticiaModel->getAll();

        $this->view('noticias', ['noticias' => $noticias]);
    }

    public function noticia($titulo) {
        $noticiaModel = new Noticia();
        $noticia = $noticiaModel->getByTituloUrl($titulo);

        $this->view('noticia', ['noticia' => $noticia]);
    } 
}



