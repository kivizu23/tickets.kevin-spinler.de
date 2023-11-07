<?php

namespace Kst\Models;

use mysqli;

class SqlConnection {
    private $host = 'localhost:58209';
    private $username = 'u_ks1821';
    private $password = 'testen';
    private $db_name = 'ks1821_tickets';
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function close() {
        $this->conn->close();
    }
}