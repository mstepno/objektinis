<?php
require_once 'Controllers/UserController.php';
require_once 'Models/UserModel.php';
// kitų reikalingų modelių ir kontrolerių importavimas

$db = new PDO("mysql:host=localhost;dbname=testdb", "username", "password");

$page = $_GET['page'] ?? 'home';

switch($page) {
    case 'home':
        require 'Views/home.php';
        break;
    case 'hotel':
        require 'Views/hotelDetails.php';
        break;
    case 'register':
        $userController = new UserController(new UserModel($db));
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $userController->register($_POST['username'], $_POST['password']);
            if ($userId) {
                // registracija sėkminga, nukreipkime vartotoją į prisijungimo puslapį
                header('Location: index.php?page=login');
                exit();
            } else {
                // kažkas neveikė, galite parodyti klaidos pranešimą
                echo "Vartotojo vardas jau užimtas arba įvyko klaida!";
            }
        } else {
            // rodo registracijos formą
            require 'Views/register.php';
        }
        break;
    // kitų puslapių maršrutai
    default:
        echo "Puslapis nerastas!";
        break;
        case 'login':
            $userController = new UserController(new UserModel($db));
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $user = $userController->login($_POST['username'], $_POST['password']);
                if ($user) {
                   
                    session_start();
                    $_SESSION['user'] = $user;
                    
                    header('Location: index.php');
                    exit();
                } else {
                    
                    echo "Nepavyko prisijungti. Patikrinkite vartotojo vardą ir slaptažodį.";
                }
            } else {
                
                require 'Views/login.php';
            }
            break;
        
            session_start(); 
            
            require_once 'Controllers/UserController.php';
            require_once 'Models/UserModel.php';
            
            
            $db = new PDO("mysql:host=localhost;dbname=testdb", "username", "password");
            
            $page = $_GET['page'] ?? 'home';
            
            
            
}
