<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tugas</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/tes.js"></script>
</head>

<style>
    body{
        background-image: url(assets/images/posu.png);
        background-size: cover;
    }
    img{
        max-width: 80%;
        max-height: 80%;
  display: block;
  margin-left: auto;
  margin-right: auto;
    }
  .login-form {
    width: 340px;
    margin: 200px auto;
  	font-size: 15px;
      background-color: rgba(0,0,0,0.5) !important;

}
.login-form form {
    margin-bottom: 15px;
    background: #C21895;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
    background-color: rgba(0,0,0,0.5) !important;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
.text-center{
    color: White;
    padding-bottom:10px;
}
label.float-left.form-check-label {
    color: #007bff;
}
</style>
<body>
<div class="container">
<div class="login-form">
    
    <form action="" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>
</body>
</html>