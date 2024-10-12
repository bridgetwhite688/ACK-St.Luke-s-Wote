<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACK St.Luke's Wote Township</title>
    <link rel="icon" href="../public/ack/images1/school logo.jpg" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	 <!-- Swal -->
	 <link rel="stylesheet" href="../public/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../public/ack/styles.css">
    <style>
      /* Custom styles for this carousel */
      #textCarousel .carousel-inner {
          background-image: url('../public/ack/images1/ict5.jpg'); /* Replace with your background image path */
          background-size: cover;
          color: #36c35e;
          text-align: center;
          padding: 250px 0;
      }
      #textCarousel .carousel-item {
          font-size: 2rem;
          font-weight: bold;
      }
  </style>
  <?php
    /* Alert Sesion Via Alerts */
    if (isset($_SESSION['success'])) {
        $success = $_SESSION['success'];
        unset($_SESSION['success']);
    }
    /* Alert Sesion Via Alerts */
    if (isset($_SESSION['err'])) {
        $err = $_SESSION['err'];
        unset($_SESSION['err']);
    }
    ?>
</head>