<?php
session_start();
include 'conn.php';
?>

<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin: 50px auto;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
    </style>
    </head>
    <body>
    <div class="container">
        <div class="card p-4">
            <h2 class="text-center">Login</h2>
            <form method="POST" action="login_auth.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="mb-3">
                    <label for="email" class="form-label">Email:-</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password:-</label>
                    <input type="password" name="password" id="password" class="form-control" value="<?php if (isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>">
                </div>
                <input type="checkbox" name="remember" <?php if (isset($_COOKIE["user"]) && isset($_COOKIE["password"])){ echo "checked";}?>> Remember me <br><br>
                <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
            </form>
            <span>
                <?php
                if (isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                }
                unset($_SESSION['message']);
                ?>
                </span>
            <p class="text-center mt-3">Don't have an account? <a href="register.php">Register here</a></p>
            
            
         </div>
       </div>
    </body>
</html>