<?php


class Session extends User
{

    public function __construct($username = null, $start = false)
    {
        parent::__construct();
        $this->get_user($username);
        if ($start)
            $this->new_session();
    }

    public function new_session(): void
    {
        $_SESSION['ID'] = $this->id;
        $_SESSION['username'] = $this->username;
        $_SESSION['u_img'] = $this->img;
        $_SESSION['u_full'] = $this->full_name;
        $_SESSION['u_email'] = $this->email;
        $_SESSION['u_access'] = $this->access;
    }

    public function set_cookie()
    {
//       FOR FUTURE SET COOKIE SO USER DON'T HAVE TO LOGIN EVERY TIME TURN OFF BROWSER
    }

    public function verify_cookie()
    {
//       FOR FUTURE SET COOKIE SO USER DON'T HAVE TO LOGIN EVERY TIME TURN OFF BROWSER
    }

}