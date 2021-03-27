<?php require_once "../includes/header.php"; ?>

    <div class="d-flex align-items-center justify-content-center" style="height: 90vh; ">
        <div class="card p-2 px-5 mx-5 my-auto">
            <div class="row no-margin">
                <div class="col p-2 align-self-center  d-none d-lg-block">
                    <img class="img-fluid " src="../assets/img/users.png" alt="users" style="max-height: 50vh;">
                </div>
                <div class="col align-self-center flex-column p-2">
                    <?php if (!isset($_GET['register'])): ?>

                        <form id="login">
                            <h3 class="text-center mb-3">Sign In</h3>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="user_addon"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username or Email"
                                           name="user" required aria-label="Username" aria-describedby="user_addon">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="password_addon"><i
                                                    class="fa fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password"
                                           aria-label="Password" name="password" required id="password"
                                           aria-describedby="password_addon">
                                </div>
                                <span data-toggle="#password"
                                      class="fa fa-fw fa-eye field-icon toggle-password text-muted"></span>
                            </div>
                            <small class="form-text text-info text-right">Forgot password?</small>
                            <button type="button" class=" mt-3 btn btn-primary btn-block text-uppercase" onclick="login();">LOGIN</button>
                        </form>
                        <a href="login?register" class="form-text text-primary mt-5 text-center">Create new account <i
                                    class="fa fa-arrow-right"></i></a>
                    <?php else: ?>
                        <form id="register">
                            <h3 class="text-center mb-3">Register</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name" id="f_name"
                                       aria-label="Full Name" name="f_name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email address" id="u_email"
                                       aria-label="Email address" name="u_email" required>
                                <div class="invalid-feedback">
                                    Please input valid email.
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" id="u_name"
                                       aria-label="Username" name="u_name" required>
                                <div class="invalid-feedback">
                                    Please input at least 5 characters. No spaces.
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" id="u_pass"
                                       aria-label="Password" name="u_pass" required>
                                <span data-toggle="#u_pass"
                                      class="fa fa-fw fa-eye field-icon toggle-password text-muted"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Repeat Password" id="re_pass"
                                       aria-label="Repeat Password" name="re_pass" required>
                                <div class="invalid-feedback">
                                    Both passwords needs to match.
                                </div>
                            </div>
                            <button type="button" class=" mt-3 btn btn-primary btn-block text-uppercase"
                                    onclick="register_new_user()">
                                Sign Up
                            </button>
                            <a href="login" class="form-text text-primary mt-5 text-center">Sign in <i
                                        class="fa fa-arrow-right"></i></a>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php require_once "../includes/footer.php"; ?>