<?php
require_once __DIR__ . '/../model/DB.php';
require_once __DIR__ . '/../model/User.php';

class UserController {
    static private $table = 'users';

    static function mapToUser(array $arrayValues) {
        return User::withID(
            $arrayValues['id'],
            $arrayValues['username'],
            $arrayValues['name'],
            $arrayValues['surname'],
            $arrayValues['password'],
            $arrayValues['email'],
            $arrayValues['avatar_url']
        );
    }

    /**
     * Fetch all users from DB.
     * @return array|false Array of User objects if successful, false if not.
     */
    static function fetchAllUsers() {
        $userStatement = DB::prepare("SELECT * FROM " . self::$table);

        if ($userStatement) {
            $userList = array();
            foreach ($userStatement as $user) {
                $userList[] = self::mapToUser($user);
            }

            return $userList;
        } else {
            return false;
        }
    }

    /**
     * Fetch user by Id.
     * @param int $id The Id to find
     * @return User|false User object if successful, false if not.
     */
    static function fetchUserById(int $id) {
        $user = DB::prepare(
            "SELECT * FROM " . self::$table . " WHERE id=?",
            array($id)
        )[0];

        return $user ? self::mapToUser($user) : false;
    }

    /**
     * Fetch user by username.
     * @param string $username The username to find
     * @return User|false User object if successful, false if not.
     */
    static function fetchUserByUsername(string $username) {
        $user = DB::prepare(
            "SELECT * FROM " . self::$table . " WHERE username=?",
            array($username)
        )[0];

        return $user ? self::mapToUser($user) : false;
    }

    /**
     * Fetch user by email.
     * @param string $email The email to find
     * @return User|false User object if successful, false if not.
     */
    static function fetchUserByEmail(string $email) {
        $user = DB::prepare(
            "SELECT * FROM " . self::$table . " WHERE email=?",
            array($email)
        )[0];

        return $user ? self::mapToUser($user) : false;
    }

    static function registerUser(string $email, string $username, string $name, string $surname, string $password) {
        try {
            DB::prepare(
                "INSERT INTO " . self::$table . " (username, name, surname, password, email) VALUES(?, ?, ?, ?, ?)",
                array($username, $name, $surname, $password, $email)
            );
        } catch (Throwable $th) {
            // throw $th;
            return "Ha ocurrido un error al registrar el usuario";
        }
    }

    /**
     * Funcion para añadir imagen al usuario
     * @param string $imageUrl URL de la imagen
     * @param string $username Usuario al que añadirle la imagen
     */
    static function addImageToUser(string $imageUrl, string $username) {
        try {
            DB::prepare(
                "UPDATE " . self::$table . " SET `avatar_url` = ? WHERE `users`.`id` = ?",
                array($imageUrl, self::fetchUserByUsername($username)->id)
            );
        } catch (Throwable $th) {
            // throw $th;
            return "Ha ocurrido un error al cambiar la imagen";
        }
    }
}
