<!DOCTYPE html>
<html>
<head>
    <title>Sign Page</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <form action="/register" method="post">
        <h2>signup</h2>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" pattern="[a-z,A-Z]*" autocomplete="on" placeholder="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="password" required> <i
            class="fa-sharp fa-regular fa-eye-slash"></i>

        <!-- <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" placeholder="re-enter"name="confirm_password"> -->

        <input type="submit" name="register"  value="Sign Up">
        <p><a style="text-decoration: none; color: rgb(88, 107, 181);" href="/login">Already have an account?</a>
        </p>
    </form>
</body>
</html>