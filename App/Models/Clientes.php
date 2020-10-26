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

    public static function insert($data = null) {
        if($data != null && is_array($data)) {
            $table = "cliente";
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['updated_at'] = date("Y-m-d H:i:s");
        }
    }

    public static function update($data = null) {
        if($data != null && is_array($data) && isset($data['id'])) {
            $table = "cliente";
            $conditions = array('id' => $data['id']);
            $data['id'] = (int)$data['id'];
            $data['update_at'] = date("Y-m-d H:i:s");
            $db = DataBase::getInstance();

            return $db->getList($table, $data, $conditions);
        }

        return false;
    }

    public static function delete($id = null) {
        if($id != null) {
            $table = "cliente";
            $column['id'] = $id;
            $db = DataBase::getInstance();
            
            return $db->delete($table, $column);
        }

        return false;
    }
}