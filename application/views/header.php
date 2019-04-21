<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (isset($this->session->userdata['logged_in'])) 
    {//No hago nada aún
    }
  else
    {
      header("location: ".base_url()."index.php/user_authentication/user_login_process");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ItMaipu App</title>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
    <!-- Comunes CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/ico-comun.css">
	
</head>
<body>