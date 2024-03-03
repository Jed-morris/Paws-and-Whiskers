<?php
//require_once('./db_conn.php');
require_once __DIR__."/../db_conn.php";

class Dealer {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function read() {
        $connection = $this->db->getConnection();
        $sql = "SELECT * FROM dealers";
        $result = $connection->query($sql);
        $dealer = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dealer[] = $row;
            }
        }
        return $dealer;
    }
}

// Handle AJAX requests
$dealer = new Dealer();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        // Get product by ID
        $id = $_GET['id'];
        $options = $dealer->read();
        foreach ($options as $row) {
            if ($row['id'] == $id) {
                echo json_encode($row);
                break;
            }
        }
    } else {
        // Get all products
        // Fetch dealers data from the database
        $options = $dealer->read();
        // Output options as JSON
        echo json_encode($options);
    }
}
