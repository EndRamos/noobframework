<?php

namespace App\Models;

use Core\DataBase;

class Noticia {

    private $table = 'noticia';
    
    public static function getAll() {
        $db = DataBase::getInstance();
        return $db->getList('noticia', '*');
    }

    public function getByTituloUrl($tituloUrl) {
        $db = DataBase::getInstance();
        $noticia = $db->getList($this->table, '*', ['titulo_url' => "'".$tituloUrl."'"]);
        return $noticia[0];
    }
}