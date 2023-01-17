<?php
include_once 'DB.php';

class User {
    public int $id;
    public string $username;
    public string $name;
    public string $surname;
    public string $password;
    public string $email;
    public string $avatar_url;

    public static function withoutID(string $username, string $name, string $surname, string $password, string $email, string $avatar_url) {
        $user = new self();
        $user->id = -1;
        $user->username = $username;
        $user->name = $name;
        $user->surname = $surname;
        $user->password = $password;
        $user->email = $email;
        $user->avatar_url = $avatar_url;
        return $user;
    }

    public static function withID(int $id, string $username, string $name, string $surname, string $password, string $email, string $avatar_url) {
        $user = self::withoutID($username, $name, $surname, $password, $email, $avatar_url);
        $user->id = $id;
        return $user;
    }

    public function __toString() {
        return $this->id . " - " . $this->username . " - " . $this->password . " - " . $this->email . " - " . $this->avatar_url;
    }
}
