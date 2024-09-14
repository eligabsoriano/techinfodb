<?php

class DbConnect {

    private $con;

    public function connect(): ?mysqli {
        include_once dirname(__FILE__) . '/Constants.php';
        
        $this->con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if ($this->con->connect_error) {
            echo "Failed To Connect: " . $this->con->connect_error;
            return null;
        }

        return $this->con;
    }

    public function getConnection(): ?mysqli {
        if (!$this->con) {
            $this->connect();
        }
        return $this->con;
    }

    public function close(): void {
        if ($this->con) {
            $this->con->close();
        }
    }
}

?>
