<?php
  session_start();
  include_once('../backend/conn.php');
  $lclCon = new DatabaseClass();
  $con = $lclCon->getCon();

  $lclQuery = $con->prepare("SELECT DISTINCT id, category, complaint_date, complaint FROM student_feedback WHERE email = '".$_SESSION['email']."'");
  $lclQuery->execute();

  $result = $lclQuery->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feedback System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Feedback System</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="../login.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav --> 
      
       <li class="nav-item">
        <a class="nav-link"  href="feedback.php">
          <i class="bi bi-bar-chart"></i><span>Feedback</span>
        </a>
      </li> 

      <li class="nav-item">
        <a class="nav-link"  href="my_feedback.php">
          <i class="bi bi-bar-chart"></i><span>My Feedback</span>
        </a>
      </li> 
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

   
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

         
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">My Feedback</h5>
              <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">SI No</th>
              <th scope="col">Category</th>
              <th scope="col">Date</th>
              <th scope="col">Complaint</th>

            </tr>
          </thead>
          <tbody>
            <?php

            if($result){
                $count = 1;
                foreach($result as $data_item)
                {
                
                ?>
                <tr>
                  <td><?php echo $count++; ?></td>
                  <td><?php echo $data_item['category']??''; ?></td>
                  <td><?php echo $data_item['complaint_date']??''; ?></td>
                  <td><?php echo $data_item['complaint']??''; ?></td>
                </tr>

                  <?php 
                    }

                    }else{
                  ?>

                  <tr>
                      <td colspan="8" >
                        <center>No Data Found</center>
                       </td>
                  </tr>
            <?php
              }
              ?>
          </tbody>
            </table>
            </div>
          </div>
        </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Feedback System</span></strong>. All Rights Reserved
    </div>
   
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

</body>

</html>