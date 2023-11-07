<?php

namespace Kst\Controllers;

use Kst\Models\SqlConnection;

class SqlController {
    private $model;

    public function __construct() {
        $this->model = new SqlConnection();
    }

    public function query($sql) {
        return $this->model->query($sql);
    }

    public function close() {
        $this->model->close();
    }
}