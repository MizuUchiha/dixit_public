<?php session_start();
require_once "../includes/init.php";
/*
 * GET REQUESTS:
 *  register
 *  sign_in
 *  edit_pass
 *  log_out
 *  check_user
 */
$user_class = new User();
if (isset($_GET['register'])) {
    $user_class->createUser($_POST);
}
if (isset($_GET['sign_in'])) {
    $user_class->get_user($_POST['user']);
    if (password_verify($_POST['password'], $user_class->password)) {
        $session = new Session($_POST['user'], true);
        echo $user_class->full_name;
        return;
    }
    echo 'error';
}
if (isset($_GET['edit_pass'])) {

}
if (isset($_GET['log_out'])) {
    session_destroy();
}
if (isset($_GET['check_user'])) {
    echo (empty($user_class->checkUsername($_POST['u_name'], $_POST['u_email']))) ? 'success' : 'error';
}
