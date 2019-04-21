<!DOCTYPE html>
<html lang="en">
<?php
if (isset($this->session->userdata['logged_in'])) {

header("location: http://localhost/itmaipu/v2/index.php/user_authentication/user_login_process");
}
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login Form</title>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
<div class="col col-lg-4">
<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">ITMaipu V2.0</div>
  <div class="card-body">
<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>

<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>
<?php echo form_open('user_authentication/user_login_process'); ?>
<?php
echo "<div>";
if (isset($error_message)) {
echo "<div class=\"alert alert-dismissible alert-danger\">";
echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
echo $error_message;
echo "</div>";
}
echo validation_errors();
echo "</div>";
?>
<div class="form-group">
<label>Usuario :</label>
<input type="text" class="form-control" name="username" id="name" placeholder="usuario"/>
</div>
<div class="form-group">
<label>Clave :</label>
<input type="password" class="form-control" name="password" id="password" placeholder="**********"/>
</div>
<input type="submit" class="button button-success form-control" value="Ingresar" name="submit"/>
<?php echo form_close(); ?>
</div>
</div><!--end col-->
</div><!--end row-->
</div><!--end container-->
<script src="<?php echo base_url();?>bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/popper.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

