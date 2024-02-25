<?php
    class Project {
        private $db;
        function __construct() {
            $this->db = new mysqli("localhost","root","","shoping");
            $this->db->set_charset("UTF8");
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                if(isset($_POST["ajax"])) {
                    if($_POST["ajax"] == "register") {
                        $this->register();
                    }
                    if($_POST["ajax"] == "login") {
                        $this->login();
                    }
                    if($_POST["ajax"] == "logout"){
                        $this->logout();
                    }
                }
            }
        }
        // Registration
        function register(){
            // destructing all values
            extract($_POST["user"]);
            $errors = [];
            // checking that we have some same mail
            $mails = $this->db->query("SELECT * from users WHERE email = '$email' ")->fetch_all(true);
            // Email
            if(!empty($mails)){
                $errors["email"] = "this email already used!";
            }
            if(empty($email)) {
                $errors["email"] = "fiil the field please!";
            }
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors["email"] = " fill the right email! (test@mail.ru)";
            }
            // Name
            if(empty($name)) {
                $errors["name"] = "fiil the field please!";
            }
            // Password
            if(empty($password)) {
                $errors["password"] = "fiil the field please!";
            }
            if(empty($cpassword)) {
                $errors["cpassword"] = "fiil the field please!";
            }
            else if ($password != $cpassword) {
                $errors["cpassword"] = "passwords its not the same!";
            }
            // Request
            if(count($errors) > 0) {
                print json_encode($errors);
            } else {
                print "success";
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $this->db->query("INSERT into users(name, email, password) VALUES ('$name', '$email', '$hash')");
            }
        }
        // Login
        function login() {
            // destructing all values
            extract($_POST['user']);
            $errors = [];
            // chekin is field empty?
            
            if(empty($email)){
                $errors['email'] = "fill the field please!";
            } else {
                // find the user by email
                $users = $this->db->query("SELECT * from users WHERE email = '$email' ")->fetch_all(true);
                if(count($users) == 0) {
                    $errors['email'] = "email is not registered yet!";
                } else {
                    if(empty($password)){
                        $errors['password'] = "fill the field please!";
                    } else {
                        // checkin is the password right ?
                        $user = $users[0];
                        if(!password_verify($password, $user["password"])) {
                            $errors['password'] = "password is not correct!";
                        } else {
                            session_start();
                            unset($user['password']);
                            $_SESSION['user'] = $user;
                            print "success";
                        }
                    }
                }
            }
            if (count($errors) > 0) {
                print json_encode($errors);
            }
        }
        // Logout
        function logout(){
                session_start();
                session_destroy();
         
        }
    }
    new Project();

?>