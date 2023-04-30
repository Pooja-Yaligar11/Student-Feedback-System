<?php
  session_start();
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
              <h5 class="card-title">Give Feedback</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3">
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">USN</label>
                  <input type="text" class="form-control" id="txtUsn" value="<?php echo $_SESSION['usn'] ?>" disabled>
                </div>

                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="txtName" value="<?php echo $_SESSION['name'] ?>" disabled>
                </div>
            
                
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Semister</label>
                  <select id="selSemister" class="form-select">
                    <option value="" hidden="true">Choose Semister</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label for="inputZip" class="form-label">Date</label>
                  <input type="text" class="form-control" id="selDate" value="<?php echo date("Y-m-d"); ?>" disabled>
                </div>

                <div class="col-md-4">
                  <label for="inputState" class="form-label">Category</label>
                  <select id="selCategory" class="form-select">
                    <option value="" hidden="true">Choose Category</option>
                    <option value="Infrastructure">Infrastructure</option>
                    <option value="Facilities">Facilities</option>
                    <option value="Mentor">Mentor</option>
                    <option value="Academics">Academics</option>
                    <option value="Ragging/Sexual Harassment">Ragging/Sexual Harassment</option>
                    <option value="Faculty">Faculty</option>

                  </select>
                </div>

                 <div class="col-md-12">
                  <label for="inputZip" class="form-label">Enter your complaint/suggestion</label>
                  <textarea class="form-control" id="txtComplaint" rows="4" cols="50"></textarea>
                </div>
               
                <div class="text-center">
                  <button type="button" class="btn btn-primary" id="btnSubmit">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

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

<script type="text/javascript">

    let dtToday = new Date();
 
    let month = dtToday.getMonth() + 1;
    let day = dtToday.getDate();
    let year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#selDate').attr('min', maxDate);

  $("#btnSubmit").click(function(){
      if($("#txtUsn").val() == ""){
        alert("Please Enter Usn");
        return false;
      }

      if($("#txtName").val() == ""){
        alert("Please Enter Name");
        return false;
      }

      if($("#selSemister").val() == ""){
        alert("Please Select Semester");
        return false;
      }

      if($("#selDate").val() == ""){
        alert("Please Select Date");
        return false;
      }

      if($("#selCategory").val() == ""){
        alert("Please Select Category");
        return false;
      }

      if($("#txtComplaint").val() == ""){
        alert("Please Enter Complaint");
        return false;
      }

      let formData = new FormData();
      formData.append("txtUsn", $("#txtUsn").val());
      formData.append("txtName", $("#txtName").val());
      formData.append("selSemister", $("#selSemister").val());
      formData.append("selComplaintDate", $("#selDate").val());
      formData.append("selCategory", $("#selCategory").val());
      formData.append("txtComplaint", $("#txtComplaint").val());
      formData.append("action", 'insert_feedback');
      $.ajax({ 
        url: "backend/process_student.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          if(response == 1){
            alert("Feedback submitted successfuly");
            $("#btn_register").prop("disabled", false);
            $("#btn_register").text('Send Message');
            // $("#txtUsn").val("");
            // $("#txtName").val("");
            $("#selSemister").val("");
            // $("#selDate").val("");
            $("#selCategory").val("");
            $("#txtComplaint").val("");
            $("#selSemister").focus();
          }else{
            alert("Something went wrong");
          }
        }

    });
 });


</script>