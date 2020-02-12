$requestInput = file_get_contents('php://input');

        // Converts it into a PHP object
        $requestData = json_decode($requestInput);

        exit(json_encode($requestData));

        // if (isset($_POST['email']) && isset($_POST['password'])) {
            //     $email = trim($_POST['email']);
        //     $password = trim($_POST['password']);

        //     // $user = database::query("SELECT * FROM login WHERE email=:email", array(":email" => $email));
        //     // if ($user) {
        //     //     if (password_verify($password, database::query("SELECT hash_password FROM login WHERE email=:email", array(":email" => $email))[0]['hash_password'])) {
        //     //         $_SESSION['loggedin'] = TRUE;
        //     //         $_SESSION['email'] = $_POST['email'];
        //     //         $_SESSION['id'] = $user[0]["Id"];
        //     //         $response = array("message"=>"you are logged in");
        //     //         return  json_encode($response);

        //     //     }
        //     //     header("HTTP/1.1 401 Unauthorized");
        //     //     exit;

        //     // }
        // }
