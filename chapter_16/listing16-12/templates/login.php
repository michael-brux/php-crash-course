<?php
$pageTitle = 'Login';
$loginLink = 'active';
require_once '_header.php';
?>

<div class="formLogin">

    <form action="/?action=login" method="post">
        <div class="form-group row m-3">
            <label for="username" class="col-form-label col-sm-3">
                Username:
            </label>
            <div class="col">
                <input name="username" id="username"
                       placeholder="Your username" class="form-control"
                >
            </div>
        </div>

        <div class="form-group row m-3">
            <label for="password" class="col-form-label col-sm-3">
                Password:
            </label>
            <div class="col">
                <input name="password" id="password" type="password"
                       placeholder="Your password" class="form-control"
                >
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary w-100"
                   value="Log in" class="form-control"
            >
        </div>
    </form>

</div>
</body>
</html>
