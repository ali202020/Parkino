<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PARKINO ADMIN SYSTEM</title>
  <!-- Bootstrap core CSS-->
  <link href="css/style.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- start navbar-->

  <!-- start footer-->
     @include('header')
    <!--end footer-->  

  <!--start content-->
  <section>
   <div class="container text-center"style="">
    <div class="row">
      <a href="{{route('Card.index')}}" class="col-lg-3" style="background-color:#ffc107;border:2px solid #343a40;border-radius:5px;margin-bottom:15px;color:#fff;top:300px;padding-top:30px;padding-bottom:30px;">Cards Page</a>
      <a href="{{route('Owner.index')}}" class="col-lg-3" style="background-color:#28a745;border:2px solid #343a40;border-radius:5px;margin-bottom:15px;color:#fff;top:300px;padding-top:30px;padding-bottom:30px;">Owner Page</a>
      <a href="{{route('ParkingArea.index')}}" class="col-lg-3" style="background-color:#dc3545;border:2px solid #343a40;border-radius:5px;margin-bottom:15px;color:#fff;top:300px;padding-top:30px;padding-bottom:30px;">Garage Area Page</a>
      <a href="users.php" class="col-lg-3" style="background-color:#007bff;border:2px solid #343a40;border-radius:5px;margin-bottom:15px;color:#fff;top:300px;padding-top:30px;padding-bottom:30px;">Users Page</a>
    </div>  
   </div>   
  </section>  
  <!--end content-->

   <!-- start footer-->
     @include('footer')
    <!--end footer--> 

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  
</body>

</html>
