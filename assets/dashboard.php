<!-- relative root -->
<?php
session_start();
$path = $_SERVER['DOCUMENT_ROOT'].'/cc6-project-1-webservices/';
include $path.'includes/dbh.inc.php';
include $path.'includes/bypass_security.php';
include $path.'assets/header.php';
?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $path ?>assets/css/style.css">
  <script async="" src="//www.google-analytics.com/analytics.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
	<script src="js/utils.js"></script>
</head>
<!-- header -->

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse show navbar-fixed-left" style="">
      <div class="sidebar-sticky pt-3"  id="v-pills-tab" role="tablist" aria-orientation="vertical">

        <ul class="nav flex-column">
          <li class="nav-item">

              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                <svg class="svg-icon" viewBox="0 0 20 20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                  <path d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z"></path>
                </svg>
                Summary
              </a>

            <!-- <a class="nav-link active" href="cpanel.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
              </svg>
              Dashbodard <span class="sr-only">(current)</span>
            </a> -->
          </li>
          <li class="nav-item">

            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
              <svg class="svg-icon" viewBox="0 0 20 20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                <path d="M17.728,4.419H2.273c-0.236,0-0.429,0.193-0.429,0.429v10.304c0,0.234,0.193,0.428,0.429,0.428h15.455c0.235,0,0.429-0.193,0.429-0.428V4.849C18.156,4.613,17.963,4.419,17.728,4.419 M17.298,14.721H2.702V9.57h14.596V14.721zM17.298,8.712H2.702V7.424h14.596V8.712z M17.298,6.566H2.702V5.278h14.596V6.566z M9.142,13.005c0,0.235-0.193,0.43-0.43,0.43H4.419c-0.236,0-0.429-0.194-0.429-0.43c0-0.236,0.193-0.429,0.429-0.429h4.292C8.948,12.576,9.142,12.769,9.142,13.005"></path>
              </svg>
              Pay
            </a>

            <!-- <a class="nav-link" href="cpanel/costumer.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              Customer
            </a> -->


          </li>



          <li class="nav-item">

            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                <polyline points="2 17 12 22 22 17"></polyline>
                <polyline points="2 12 12 17 22 12"></polyline>
              </svg>
              Integrations
            </a>

          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
              <circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line>
              <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
              </svg>
              card settlement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              loans
            </a>
          </li>

        </ul>
      </div>
    </nav>





    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
        </div>
        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
        </div>
      </div>




      <div class="d-flex justify-content-between dash-chart-main flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Account Summary</h1>



        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-dark mx-1">Share</button>
            <button type="button" class="btn btn-sm btn-outline-dark mx-1">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-dark dropdown-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            This week
          </button>
        </div>

      </div>

      <div class="col-md-4 mx-auto">
        <?php
        if(isset($_GET['status'])) {
          $status = $_GET['status'];
          if ($status == 'ID_NOT_FOUND') {
            // code...
            echo '
            <div class="alert alert-danger alert-dismissible show fade my-4" id="signupAlert" role="alert">
              📌 id was not found in our records, check id or contact support.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          } elseif ($status == 'ID_ASSIGNED') {
            // code...
            echo '
            <div class="alert alert-danger alert-dismissible show fade my-4" id="signupAlert" role="alert">
              📌 this id already has an username assigned.
              <hr>
              You can close this alert now.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          } elseif ($status == 'USER_EXIST') {
            // code...
            echo '
            <div class="alert alert-danger alert-dismissible show fade my-4" id="signupAlert" role="alert">
              📌 username already exist, please type a different one.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          } elseif ($status == 'EMAIL_EXIST') {
            // code...
            echo '
            <div class="alert alert-danger alert-dismissible show fade my-4" id="signupAlert" role="alert">
              📌 email already exist in our records, please type a different one.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          } elseif ($status == 'SUCCESS') {
            // code...
            echo '
            <div class="alert alert-success alert-dismissible show fade my-4" id="signupAlert" role="alert">
              ✔️ credentials saved, you can login.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          } elseif ($status == 'PAY_SUCCESS') {
            // code...
            echo '
            <div class="alert alert-success alert-dismissible show fade my-4" id="signupAlert" role="alert">
              <h4 class="alert-heading">Thank you for your payment!</h4>
              <hr>
              ✔️ payment stored.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          }
        }
        ?>
      </div>

      <!-- FUNCTIONALITY -->
      <?php
      function FormatCreditCard($cc)
      {
        // Clean out extra data that might be in the cc
        $cc = str_replace(array('-',' '),'',$cc);
        // Get the CC Length
        $cc_length = strlen($cc);
        // Initialize the new credit card to contian the last four digits
        $newCreditCard = substr($cc,-4);
        // Walk backwards through the credit card number and add a dash after every fourth digit
        for($i=$cc_length-5;$i>=0;$i--){
          // If on the fourth character add a dash
          if((($i+1)-$cc_length)%4 == 0){
            $newCreditCard = '-'.$newCreditCard;
          }
          // Add the current character to the new credit card
          $newCreditCard = $cc[$i].$newCreditCard;
        }
        // Return the formatted credit card number
        return $newCreditCard;
      }
      ?>


        <div class="tab-content" id="v-pills-tabContent">

          <!-- HOME TAB -->
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <div class="mb-5"></div> <!-- spacer -->
            <div class="container">



              <div Id="wrapper">
                  <section>
                      <ul id="a">
                        <li>
                          <a href="">
                            <img src="https://thephilfactor.files.wordpress.com/2017/04/donald-trump-strong-200x200.png" class="bd-placeholder-img rounded-circle" width="160" height="160">
                            <!-- Wrapped into div -->
                            <div class="details">
                              <h3><strong><?php echo $_SESSION['cname']; ?></strong></h3>
                              <h6><span style="font-size: .75rem;text-transform: uppercase;">ID </span><b><?php echo $_SESSION['cid']; ?></b></h6>
                              <h6><span style="font-size: .75rem;text-transform: uppercase;">TIN </span><b><?php echo $_SESSION['ctin']; ?></b></h6>
                              <h6><span style="font-size: .75rem;text-transform: uppercase;">USERNAME </span><b><?php echo $_SESSION['cuser']; ?></b></h6>
                              <h6><span style="font-size: .75rem;text-transform: uppercase;">EMAIL </span><b><?php echo $_SESSION['cemail']; ?></b></h6>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </section>
                </div>


              <div class="mb-5"></div> <!-- spacer -->
              <h4><strong>Personal Accounts</strong></h4>
              <div class="mb-4"></div> <!-- spacer -->
              <div class="table-responsive">
                <table class="table table-hover">

                  <tbody>
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Credit Card</th>
                        <th scope="col"></th>
                        <th scope="col">Balance</th>
                        <th scope="col">Available</th>
                      </tr>
                    </thead>
                    <?php
                    $cid = $_SESSION['cid'];
                    $sql = 'SELECT cnumber, cexp_date, cissue_date, climit, cbalance, cid FROM card WHERE cid = :cid';
                    $stmt = $conn->prepare($sql);
                    $stmt->execute(['cid' => $cid]);
                    $row = $stmt->fetchAll();
                    // SELECT COSTUMER
                    foreach ($row as $row) {
                      $orgDate = $row->cissue_date;
                      $newDate = date("M d", strtotime($orgDate));
                      $cavailable = $row->climit - $row->cbalance;
                      echo '
                        <tr>
                          <td scope="row">
                            <form class="form-card-submit"  action="cardboard.php" method="post">
                              <input type="hidden" name="cnumber" value="'.$row->cnumber.'" id="cnumber" class="form-control">
                              <button class="btn" type="submit" name="delete-costumer-submit" title="Credit Card">
                                <svg class="svg-icon" viewBox="0 0 20 20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                  <path d="M17.728,4.419H2.273c-0.236,0-0.429,0.193-0.429,0.429v10.304c0,0.234,0.193,0.428,0.429,0.428h15.455c0.235,0,0.429-0.193,0.429-0.428V4.849C18.156,4.613,17.963,4.419,17.728,4.419 M17.298,14.721H2.702V9.57h14.596V14.721zM17.298,8.712H2.702V7.424h14.596V8.712z M17.298,6.566H2.702V5.278h14.596V6.566z M9.142,13.005c0,0.235-0.193,0.43-0.43,0.43H4.419c-0.236,0-0.429-0.194-0.429-0.43c0-0.236,0.193-0.429,0.429-0.429h4.292C8.948,12.576,9.142,12.769,9.142,13.005"></path>
                                </svg>
                                '.FormatCreditCard($row->cnumber).'
                              </button>
                            </form>
                          </td>

                          <td><b>due '.$newDate.'</b></td>
                          <td><b>'.sprintf("Q %1\$.2f",strval($row->cbalance)).'</b></td>
                          <td><b>Q '.$cavailable.'</b></td>

                        </tr>



                      ';
                    }
                     ?>

                  </tbody>
                </table>
                <div class="mb-5"></div> <!-- spacer -->
                <table class="table table-hover">
                  <tbody>
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Account Number</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Balance</th>
                      </tr>
                    </thead>
                    <?php
                    $cid = $_SESSION['cid'];
                    $sql = 'SELECT * FROM checking WHERE cid = :cid';
                    $stmt = $conn->prepare($sql);
                    $stmt->execute(['cid' => $cid]);
                    $row = $stmt->fetchAll();
                    // SELECT COSTUMER
                    foreach ($row as $row) {
                      echo '
                        <tr>
                          <td scope="row">
                            <form >
                              <button class="btn" type="submit" name="delete-costumer-submit" title="Credit Card">
                                <svg class="svg-icon" viewBox="0 0 20 20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                  <path d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z"></path>
                                </svg>
                                '.sprintf("%010s", $row->caccount).'
                              </button>
                            </form>
                          </td>
                          <td></td>
                          <td></td>
                          <td><b>Q '.$row->cfund.'</b></td>
                        </tr>

                        </tr>



                      ';
                    }
                     ?>

                  </tbody>
                </table>
              </div>
            </div>





          </div>



          <!-- PAY TAB -->
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">


            <div class="col-lg-12 col-md-8">
              <form class="form-signin"  action="<?php echo $path ?>includes/card_payment.inc.php" method="post">
                <div class="text-center mb-4">
                  <svg class="svg-icon" viewBox="0 0 20 20" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                    <path fill="none" d="M11.174,14.993h1.647c0.228,0,0.412-0.184,0.412-0.411v-1.648c0-0.228-0.185-0.411-0.412-0.411h-1.647c-0.227,0-0.412,0.184-0.412,0.411v1.648C10.762,14.81,10.947,14.993,11.174,14.993 M3.759,13.346h4.943c0.227,0,0.412-0.184,0.412-0.412c0-0.228-0.185-0.411-0.412-0.411H3.759c-0.227,0-0.412,0.184-0.412,0.411C3.347,13.162,3.532,13.346,3.759,13.346 M3.759,14.993h3.295c0.228,0,0.412-0.184,0.412-0.411S7.282,14.17,7.055,14.17H3.759c-0.227,0-0.412,0.185-0.412,0.412S3.532,14.993,3.759,14.993 M14.881,5.932H1.7c-0.455,0-0.824,0.369-0.824,0.824v9.886c0,0.454,0.369,0.823,0.824,0.823h13.181c0.455,0,0.823-0.369,0.823-0.823V6.755C15.704,6.301,15.336,5.932,14.881,5.932M14.881,16.642H1.7v-5.767h13.181V16.642z M14.881,8.403H1.7V6.755h13.181V8.403z M18.176,2.636H4.995c-0.455,0-0.824,0.37-0.824,0.824v1.236c0,0.228,0.185,0.412,0.412,0.412c0.228,0,0.412-0.184,0.412-0.412V3.46h13.181v9.886H16.94c-0.228,0-0.412,0.185-0.412,0.412s0.185,0.412,0.412,0.412h1.235c0.455,0,0.824-0.369,0.824-0.824V3.46C19,3.006,18.631,2.636,18.176,2.636"></path>
                  </svg>
                  <h1 class="h3 mb-3 font-weight-normal">Pay</h1>
                  <h6>Easily pay your credit card <b>online</b>.</h6>
                </div>

                <div class="mb-5"></div>
                <!-- CARD SELECTION -->
                <div class="form-label-group mb-3">
                  <!-- <input type="text" name="cuser" id="inputUsername" class="form-control" placeholder="Username" required="">  -->
                  <label for="input_cnumber">Card Number</label>
                  <select id="input_cnumber" name="cnumber" class="form-control selectpicker" title="" required>
                       <option disabled selected></option>
                       <?php
                       $sql = 'SELECT * FROM card WHERE cid = :cid';
                       $stmt = $conn->prepare($sql);
                       $stmt->execute(['cid' => $cid]);
                       $row = $stmt->fetchAll();
                       // SELECT COSTUMER
                       foreach ($row as $row) {
                         echo '<option value="'.$row->cnumber.'">'.FormatCreditCard($row->cnumber).' [ '.$row->cbalance.' ]</option>';
                       }
                        ?>
                    </select>
                </div>
                <!-- CARD SELECTION -->
                <div class="form-label-group mb-3">
                  <!-- <input type="text" name="cuser" id="inputUsername" class="form-control" placeholder="Username" required="">  -->
                  <label for="input_caccount">Account Number</label>
                  <select id="input_caccount" name="caccount" class="form-control selectpicker" title="" required>
                       <option disabled selected></option>
                       <?php
                       $sql = 'SELECT * FROM checking WHERE cid = :cid';
                       $stmt = $conn->prepare($sql);
                       $stmt->execute(['cid' => $cid]);
                       $row = $stmt->fetchAll();
                       // SELECT COSTUMER
                       foreach ($row as $row) {
                         echo '<option value="'.$row->caccount.'"  pattern="[0-9.]+">'.sprintf("%010s", $row->caccount).' [ '.$row->cfund.' ]</option>';
                       }
                        ?>
                    </select>
                </div>
                <!-- LIMIT -->
                <div class="form-label-group mb-3">
                  <label for="input_pamount">Amount</label>
                  <input type="text" name="pamount" id="input_pamount" class="form-control amount">
                </div>

                <div class="mb-5"></div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="card-pay-submit">Pay a Mastercash©</button>

              </form>
            </div>


          </div>


          <!-- CREATE CARD TAB -->
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">


          </div>

          <!-- COSTUMERS TAB -->


          <!-- CARDS TAB -->



        </div>
        <!--<canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="2330" height="983" style="display: block; height: 787px; width: 1864px;"></canvas>-->
        <?php require __DIR__."/footer.php"; ?>
      </main>
    </div>
  </div>
