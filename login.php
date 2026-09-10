<?php
session_start();
if(isset($_SESSION['email'])){
    header('location: dashboard.php');
}

if(isset($_POST["login"]) && ($_SERVER["REQUEST_METHOD"] == "POST")){

    $email=$_POST['email'];
    $password=$_POST['password'];
    // Email Validation
    if(empty($_POST['email'])){
        $email_error="* Email is required";
    }
    else{
        $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        if (!preg_match($pattern, $_POST['email'])) {
            $email_error="* Invalid Email";
        } 
        else {
            $email=$_POST['email'];
        }
    }
    
    // Password Validation
    if(empty($_POST['password'])){
        $password_error="* Password is required";
    }
    else{
        $password=$_POST['password'];
        // echo $password;
    }

    require_once 'includes/connection.php';
    $sql = "SELECT * FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
        if($email==$row['email'] && $password==$row['password']){
            $_SESSION['email']=$row['email'];
            $_SESSION['name']=$row['name'];
            header('location: dashboard.php');
        }
    }
    else{
        $login_error="* Enter all fields";
    }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container outer">
    <form action="login.php" method="POST" class="inner">
        <h1 class="heading">Login</h1>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <input type="email" name="email" value="<?php echo isset($email) ? $email : "";?>" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            <span class="text-danger"><?php echo(isset($email_error)) ? $email_error : "";?></span>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password:</label>
            <input type="password" name="password" value="<?php echo isset($password) ? $password : "";?>" class="form-control" id="exampleInputPassword1">
            <span class="text-danger"><?php echo(isset($password_error)) ? $password_error : "";?></span>
        </div>

        <button type="submit" name="login" class="btn btn-primary login">Login</button>
        <span class="text-danger"><?php echo(isset($login_error)) ? $login_error : "";?></span>
    </form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>