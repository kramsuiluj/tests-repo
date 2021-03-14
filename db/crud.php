<?php 

// This class contains all the CRUD functions.
class crud {

    // This variable will be used to assign the database connection variable.
    private $db;

    // This constructor assigns the database connection variable into the class.
    function __construct($conn) {
        $this->db = $conn;
    }

    public function getData() {

        // First, prepare the sql statement to be executed.
        $sql = "SELECT * FROM test";

        // Second, use the query function to save the sql command for execution.
        $results = $this->db->query($sql);

        return $results;

    }


}


?>