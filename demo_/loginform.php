<?php
    if(isset($_GET['errors'])){
//        var_dump($_GET["errors"]); # string
        $errors = json_decode($_GET["errors"], true);
//        var_dump($errors);

    }

    if(isset($_GET['old_data'])){
        $old_data = json_decode($_GET["old_data"], true);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1> Login to account </h1>
    <form action="validateform.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email"
                   value="<?php echo $old_data['email']? $old_data['email']: ''; ?>"
                   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label style="color: red; font-weight: bold">
                <?php echo $errors['email']? $errors["email"]: ""; ?>

            </label>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            <label style="color: red; font-weight: bold">
                <?php echo $errors['password']? $errors["password"]: ""; ?>

            </label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>