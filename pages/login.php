<?php include_once('./includes/navigation.php') ?>
<?php
    $FIRST_NAME = 'First Name';
    $LAST_NAME = 'Last Name';
    $PASSWORD = 'Password';
    $EMAIL = 'Email';
    echo ("
        <div class='conteiner'>
            <div class='sing-up-form'>
                <form action='login.php' method='post'>
                    <span class='label'>$FIRST_NAME</span><input class='new-input' type='text' name='fname'><br>
                    <span class='label'>$LAST_NAME</span><input class='new-input' type='text' name='lname'><br>
                    <span class='label'>$EMAIL</span><input class='new-input' type='email' name='email'><br>
                    <span class='label'>$PASSWORD</span><input class='new-input' type='password' name='password'><br>
                    <input type='submit' name='register'><br>
                </form>
            </div>
            <div class='login-up-form'>
                <form action='login.php' method='post'>
                    <span class='label'>$EMAIL</span><input class='new-input' type='email' name='email'><br>
                    <span class='label'>$PASSWORD</span><input class='new-input' type='password' name='password'><br>
                    <input type='submit' name='login'><br>
                </form>
            </div>
            <div class='clear'></div>
        </div>
    ");
?>