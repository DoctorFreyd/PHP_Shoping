<?php
    class Project {
        private $db;
        function __construct() {
            $this->db = new mysqli("localhost","root","shoping");
            $this->db->set_charset("UTF8");
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "GOOOOD"
            }
        }
    }

?>