<?php
require_once __DIR__ . '/../model/DB.php';
require_once __DIR__ . '/../model/User.php';

class UserController {
    static private $table = 'users';

    static function map(array $arrayValues) {
        return new User(
            $arrayValues['id'],
            $arrayValues['username'],
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
                $userList[] = self::map($user);
            }

            return $userList;
        } else {
            return false;
        }
    }

    /**
     * Fetch user by Id.
     * @param string $id The Id to find
     * @return User|false User object if successful, false if not.
     */
    static function fetchUserById(int $id) {
        $user = DB::prepare(
            "SELECT * FROM " . self::$table . " WHERE id=?",
            array($id)
        )[0];

        return $user ? self::map($user) : false;
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

        return $user ? self::map($user) : false;
    }
}
