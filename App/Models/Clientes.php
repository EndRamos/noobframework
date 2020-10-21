<?php

namespace App\Models;

use Core\DataBase;

class Clientes {

    public static function get($conditions = null, $columns = null) {
        $table = "cliente";
        $columns = $columns == null ? "*" : $columns;
        $db = DataBase::getInstance();
        $clientes = $db->getList($table, $columns, $conditions);

        return $clientes;
    }

    public static function record($data = null) {
        if($data != null && is_array($data)) {
            $table = "cliente";
            $data['cliente_at'] = date("Y-m-d H:i:s");
            $data['updated_at'] = date("Y-m-d H:i:s");

            $db = DataBase::getInstance();
            return $db->insert($table,$data);
        }

        return false;
    }
}