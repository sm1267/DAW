<?php

require_once 'dbh.classes.php';

class Dashboard extends Dbh {
    public function getConnection() {
        return $this->connect(); 
    }
}
