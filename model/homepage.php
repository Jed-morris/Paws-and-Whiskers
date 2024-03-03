<?php
//require_once './db_conn.php'; // Assuming you have a Database class
require_once __DIR__."/../db_conn.php";

class Users {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function register($fname, $lname, $num, $username, $email, $password) {
        $connection = $this->db->getConnection();
        $fname = $connection->real_escape_string($fname);
        $lname = $connection->real_escape_string($lname);
        $num = $connection->real_escape_string($num);
        $username = $connection->real_escape_string($username);
        $email = $connection->real_escape_string($email);
        $password = $connection->real_escape_string($password);

        $duplicate = mysqli_query($connection, "SELECT * FROM users2 WHERE username='$username' OR email='$email'");

        if (mysqli_num_rows($duplicate) > 0) {
            return false;
            //username or email has already taken
        }else {
            $sql = "INSERT INTO users2 (username, first_name, last_name, contact_number, email, password) VALUES ('$username', '$fname', '$lname', '$num', '$email', '$password')";
            if ($connection->query($sql) === TRUE) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function login($email, $password) {
        $connection = $this->db->getConnection();
        $email = $connection->real_escape_string($email);
        $password = $connection->real_escape_string($password);

        $sql = mysqli_query($connection, "SELECT * FROM users2 WHERE email='$email'");

        if (mysqli_num_rows($sql) > 0) {
            $user = mysqli_fetch_assoc($sql);
            if (password_verify($password, $user["password"])) {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $user["id"];
                exit;
            }else {
                echo ("Invalid Password!");
            }
        }else {
            echo("invalid credentials provided!");
            exit;
        }
    }
}

// Handle AJAX requests
$data = new Users();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["register"])) {
        $fname = $_POST["floatingFname"];
        $lname = $_POST["floatingLname"];
        $num = $_POST["floatingNumber"];
        $username = $_POST["floatingUsername"];
        $email = $_POST["floatingEmail"];
        $password = $_POST["floatingPwd"];
    
        if (empty($fname)) {
            echo ("First name is required in the field.");
            exit;    
        } else if (empty($lname)) {
            echo ("Last name is required in the field.");
            exit;   
        } else if (empty($num)) {
            echo ("Contact number is required in the field.");
            exit;   
        } else if (empty($username)) {
            echo ("Username is required in the field.");
            exit;
        } else if (empty($email)) {
            echo ("Email is required in the field.");
            exit;
        } else if (empty($password)) {
            echo ("Password is required in the field.");
            exit;
        }else {
            //Hashing password
            $password = password_hash($password, PASSWORD_DEFAULT);
            if ($data->register($fname, $lname, $num, $username, $email, $password)) {
                return true;
                exit;
            }else {
                echo ("Username and email already exist!");
                exit;
            }
        }
    }elseif (isset($_POST["login"])) {
        $email = $_POST["loginEmail"];
        $password = $_POST["loginPassword"];

        if (empty($email)) {
            echo ("Email address is required in the field.");
            exit;
        } else if (empty($password)) {
            echo ("Password is required in the field.");
            exit;
        } else {
            $data->login($email, $password);
        }
    }
}