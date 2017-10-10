<?php require 'app/views/partials/head.php'; ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3 text-center">
                <form class="form-signin" action="/postlogin" method="POST">
                <a href="#" class="btn" role="button" ><img class="logo" src="public/images/logo-apple.png" alt="LOGO"></a>
                <label for="inputEmail" class="sr-only">Username</label>
                <input name="username" type="user" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                    <label>
                    <input type="checkbox" value="remember-me">Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-dark btn-block" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div> <!-- /container -->
