<?php
include_once 'DB.php';

class User {
    public int $id;
    public string $username;
    public string $email;
    public string $avatar_url;

    public function __construct(int $id, string $username, string $email, string $avatar_url) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->avatar_url = $avatar_url;
    }

    public function __toString() {
        return $this->id . " - " . $this->username . " - " . $this->email . " - " . $this->avatar_url;
    }
}
