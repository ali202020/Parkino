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
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">


   <!--start header -->
   @include('header')
  <!--end header --> 

  <!--start header -->
   @include('navbar')
  <!--end header -->  

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      
    <!-- Example DataTables Card-->
      <form method="POST" action="{{route('ParkingArea.store')}}" role="form" class="form-control">
        {{csrf_field()}}
        <div class="form-group">
          <label name="longitude">Enter longitude : </label>
          <input type="text" name="longitude" id="longitude" class="form-control">
        </div>
        <div class="form_group">
          <label name="latitude">Enter latitude : </label>
          <input type="text" name="latitude" id="latitude" class="form-control">
        </div>
        <div class="form_group">
          <label name="name">Insert PA name : </label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form_group">
          <label name="slots_number">Insert slots Number : </label>
          <input type="number" name="slots_number" id="slots_number" class="form-control">
        </div>
        <br>
        <input type="submit" value="Submit" class="btn btn-primary">

        
      </form>
      
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <!--start footer -->
     @include('footer')
    <!--end footer -->  

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/functions.cards.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
  
</body>

</html>
