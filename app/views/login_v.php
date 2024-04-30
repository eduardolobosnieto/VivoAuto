<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login VivoAuto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../public/lobibox/LobiBox.min.css">
    <link rel="stylesheet" href="../public/assets/css/pages/Login-Form-Dark.css">
</head>

<body style="background: #214a80;">
    <div class="login-dark" style="height: 695px;">
        <form autocomplete="off" id="frmLogin">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" placeholder="Usuario" id="txtUser"></div>
            <div class="form-group"><input class="form-control" type="password" placeholder="Password" id="txtPass"></div>
            <div class="form-group">
                <button class="btn btn-primary btn-block">Log In</button>
            </div>
                <!--<a class="forgot" href="#">Forgot your email or password?</a>-->
        </form>
    </div>
<script>
    var base_url = "<?php echo URL; ?>";
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


<script src="../public/lobibox/lobibox.min.js"></script>
<script src="../public/js/login.js"></script>
</body>

</html>