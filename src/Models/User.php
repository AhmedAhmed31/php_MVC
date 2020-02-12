$requestInput = file_get_contents('php://input');

// Converts it into a PHP object
$requestData = json_decode($requestInput);

exit(json_encode($requestData));

class User
{
public static function Signup()
{
if (isset($_POST['Submit'])) {
$email = $_POST['Email'];
$password = $_POST['pwd'];
$name = $_POST['Name'];
if (!database::query("SELECT email FROM login WHERE email=:email", array(':email' => $email))) {
if (strlen($name) >= 3 && strlen($name) <= 60) {
if (preg_match('/[a-zA-Z]+/', $name)) {
if (strlen($password) >= 8 && strlen($password) <= 64) {
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
database::query("INSERT INTO login VALUES ('',:name,:email,:hash_password)", array(':name' => $name, ':email' => $email, ':hash_password' => password_hash($password, PASSWORD_BCRYPT)));
} else {
loadView('retry');
}
}
}
}
} else {
loadView('retry');
}
}
return header('Location: /register');
}


public static function logging()
{
$requestInput = file_get_contents('php://input');

// Converts it into a PHP object
$requestData = json_decode($requestInput);

exit(json_encode($requestData));

}


public static function findByemail($email)
{
$user = database::query("SELECT * FROM login LEFT JOIN user_data ON login.id = user_data.user_id WHERE login.email=:email", array(":email" => $email));
return $user;
}


public static function update($id)
{
if (isset($_POST['update'])) {
$age = $_POST['age'];
$Bio = $_POST['bio'];
if (database::query("SELECT * FROM user_data WHERE user_id=:id ", array(':id' => $id))) {
database::query('UPDATE  user_data SET age=:age,bio=:bio WHERE user_id=:id', array(':age' => $age, ':bio' => $Bio, ':id' => $id));
} else {
database::query("INSERT INTO user_data  VALUES ('',:bio,:user_id,:age)   ", array(':age' => $age, ':bio' => $Bio, ':user_id' => $id));
}
}
}
}

