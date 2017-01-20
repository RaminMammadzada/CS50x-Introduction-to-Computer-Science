<form action="password.php" method="post">
    <fieldset>
        Enter your new password:
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Password repeat" type="password"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Change password
            </button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">Log in</a> to your account
</div>
