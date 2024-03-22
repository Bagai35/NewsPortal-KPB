<?php

class Register
{
    public function regiserUser()
    {
        $controll = array(0 => false, 1 => 'error');
        if (isset($_POST['save'])) {
            $errorString = "";
            $name = $_POST['name'];
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            if (!$email) {
                $errorString .= "Неправильный email <br />";
            }
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];
            if (!$password) {
                $errorString .= "Пароль должен быть более 6 символов <br />";
            }
            if ($password != $confirm) {
                $errorString .= "Парольи не совпадают <br />";
            }
            if (mb_strlen($errorString) == 0) {
                $passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $date = Date("Y-m-d");

                $sql = "INSERT INTO 'user' ('id', 'username', 'email', 'passwod', 'status',
                    'registration_date', 'pass',) VALUES (NULL, '$name', '$email', '$passwordHash',
                    'user', '$date', '$password')";
                $db = new Database();
                $item = $db->executeRun($sql);
                if ($item)
                    $controll = array(0 => true);
                else
                    $controll = array(0 => falce, 1 => 'error');
            } else {
                $controll = array(0 => falce, 1 => $errorString);
            }

        }
        return $controll;
    }


}
?>