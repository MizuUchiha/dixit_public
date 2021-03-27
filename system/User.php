<?php


class User extends Conn
{
    public $user;

    public function __get($key)
    {
        return $this->user[$key];
    }

    public function __set($key, $value)
    {
        $this->user[$key] = $value;
    }

    public function __isset($key)
    {
        return ($this->user[$key]);
    }

    public function createUser($data)
    {
        $password = $this->encodePassword($data['u_pass']);
        $this->stmt("INSERT INTO users (full_name, username, password, email) VALUES (?, ?, ?, ?)", $data['f_name'], $data['u_name'], $password, $data['u_email']);
    }

    private function encodePassword($password): string
    {
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 12,]);
    }

    public function checkUsername($username, $email)
    {
        return $this->stmt("SELECT * FROM users WHERE username = ? OR email = ?", $username, $email)->fetchAll();
    }

    public function get_user($data)
    {
        $array = $this->stmt("SELECT id, username, password, email, created, img, full_name, access FROM users WHERE username = ? OR email = ?", $data, $data)->fetchAll();
        return $this->user = $array[0];
    }

}