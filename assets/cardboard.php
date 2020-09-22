<!-- relative root -->
<?php
session_start();
$path = $_SERVER['DOCUMENT_ROOT'].'/cc6-project-1-webservices/';
include $path.'includes/dbh.inc.php';
include $path.'includes/bypass_security.php';
include $path.'assets/header.php';

if (isset($_POST['form-card-submit'])) {
  // code...
}

$cnumber = $_POST['cnumber'];

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

            <a class="nav-link active" href="dashboard.php" role="tab" aria-controls="v-pills-home" aria-selected="true">
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
              current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              taxable income
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
        <h1 class="h2">Cardboard</h1>



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
            <div class="alert alert-warning alert-dismissible show fade my-4" id="signupAlert" role="alert">
              <h4 class="alert-heading">Warning</h4>
              <hr>
              📌 <strong>Holy guacamole!</strong> a costumer with the same email already exist, check costumer records.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          } elseif ($status == 'ID_EXIST') {
            // code...
            echo '
            <div class="alert alert-warning alert-dismissible show fade my-4" id="signupAlert" role="alert">
              <h4 class="alert-heading">Warning</h4>
              <hr>
              📌 <strong>Holy guacamole!</strong> a costumer with the same id already exist, check costumer records.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            ';
          }elseif ($status == 'SUCCESS') {
            // code...
            echo '
            <div class="alert alert-success alert-dismissible show fade my-4" id="signupAlert" role="alert">
              <h4 class="alert-heading">Well done!</h4>
              <hr>
              ✔️ credentials stored.
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
            <div class="row">
              <div class="col-lg-6">

                <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="2330" height="983" style="display: block; height: 787px; width: 1864px;"></canvas>

              		<!-- <canvas id="myChart" style="display: block; width: 452px; height: 226px;" width="452" height="226" class="chartjs-render-monitor"></canvas> -->


              </div><!-- /.col-lg-4 -->

              <div class="col-lg-6">
                <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart2" width="2330" height="983" style="display: block; height: 787px; width: 1864px;"></canvas>

              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <div class="container">

              <?php
              $sql = 'SELECT * FROM card WHERE cnumber = :cnumber';
              $stmt = $conn->prepare($sql);
              $stmt->execute(['cnumber' => $cnumber]);
              $result = $stmt->fetchObject();
              $cBalance = $result->cbalance;
              $cAvail = $result->climit - $cBalance;
              $orgDate = $result->cissue_date;
              $newDate = date("d", strtotime($orgDate));
              $newDate = date('M ',strtotime('first day of +1 month')).$newDate;
              $minPay = $cBalance*0.02;
               ?>


              <div class="mb-5"></div> <!-- spacer -->
              <h3><strong>Information</strong></h3>
              <div class="mb-4"></div> <!-- spacer -->

              <div class="row">
                <div class="col-lg-6">
                  <h1 class="h4">Number <b><?php echo FormatCreditCard($cnumber) ?></b></h1>
                  <h1 class="h5">CVV <b><?php echo $result->cvv ?></b></h1>
                  <h1 class="h5">EXP <b><?php echo date("m/y", strtotime($result->cexp_date)) ?></b></h1>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-6">
                  <h4 class="h4">payment due <strong><?php echo $newDate ?></strong></h4>
                  <h4 class="h4">minimum payment <strong>Q <?php echo sprintf("%1\$.2f",strval($minPay)); ?></strong></h4>
                  <h4 class="h4">current balance <strong>Q <?php echo $cBalance ?></strong></h4>
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->


              <div class="mb-5"></div> <!-- spacer -->
              <h4><strong>Transactions</strong></h4>
              <div class="mb-4"></div> <!-- spacer -->
              <div class="table-responsive">
                <table class="table table-hover">

                  <tbody>
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Posting Date</th>
                        <th scope="col">Description</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">Ref Number</th>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">Category</th>
                        <th scope="col"></th>
                        <th scope="col">Amount</th>
                        <th scope="col">Balance</th>
                      </tr>
                    </thead>
                    <?php
                    $sql = 'SELECT * FROM transactions WHERE cnumber = :cnumber ORDER BY tdate DESC';
                    $stmt = $conn->prepare($sql);
                    $stmt->execute(['cnumber' => $cnumber]);
                    $row = $stmt->fetchAll();
                    // SELECT COSTUMER
                    foreach ($row as $row) {
                      $orgDate = $row->tdate;
                      $newDate = date("m/d/Y H:i", strtotime($orgDate));
                      echo '
                        <tr>
                          <td><b>'.$newDate.'</b></td>
                          <td colspan="2">'.$row->description.'</td>
                          <td class="text-center" colspan="3">'.sprintf("%010s", $row->tid).'</td>
                          <td class="text-center">';
                          if ($row->tcat ==0) { echo "food"; }
                          elseif ($row->tcat ==1) { echo "cloth"; }
                          elseif ($row->tcat ==2) { echo "tools"; }
                          elseif ($row->tcat ==3) { echo "home"; }

                          echo '
                          </td>
                          <td>
                          ';
                          if ($row->ttype == 'deposit') {
                            // code...
                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" tile="Description">
                              <path fill="none" d="M13.388,9.624h-3.011v-3.01c0-0.208-0.168-0.377-0.376-0.377S9.624,6.405,9.624,6.613v3.01H6.613c-0.208,0-0.376,0.168-0.376,0.376s0.168,0.376,0.376,0.376h3.011v3.01c0,0.208,0.168,0.378,0.376,0.378s0.376-0.17,0.376-0.378v-3.01h3.011c0.207,0,0.377-0.168,0.377-0.376S13.595,9.624,13.388,9.624z M10,1.344c-4.781,0-8.656,3.875-8.656,8.656c0,4.781,3.875,8.656,8.656,8.656c4.781,0,8.656-3.875,8.656-8.656C18.656,5.219,14.781,1.344,10,1.344z M10,17.903c-4.365,0-7.904-3.538-7.904-7.903S5.635,2.096,10,2.096S17.903,5.635,17.903,10S14.365,17.903,10,17.903z"></path>
                              <title>deposit</title>
                            </svg>';
                          } elseif ($row->ttype == 'debit') {
                            // code...
                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.7" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar" tile="Description">
                              <path fill="none" d="M10,1.344c-4.781,0-8.656,3.875-8.656,8.656c0,4.781,3.875,8.656,8.656,8.656c4.781,0,8.656-3.875,8.656-8.656C18.656,5.219,14.781,1.344,10,1.344z M10,17.903c-4.365,0-7.904-3.538-7.904-7.903S5.635,2.096,10,2.096S17.903,5.635,17.903,10S14.365,17.903,10,17.903z M13.388,9.624H6.613c-0.208,0-0.376,0.168-0.376,0.376s0.168,0.376,0.376,0.376h6.775c0.207,0,0.377-0.168,0.377-0.376S13.595,9.624,13.388,9.624z"></path>
                              <title>debit</title>
                            </svg>';
                          }
                          echo '
                          </td>
                          <td><b>'.sprintf("Q %1\$.2f",strval($row->tamount)).'</b></td>
                          <td><b>'.sprintf("Q %1\$.2f",strval($row->cbalance)).'</b></td>

                        </tr>



                      ';
                    }
                     ?>

                  </tbody>
                </table>
                <div class="mb-5"></div> <!-- spacer -->
              </div>
            </div>

          </div>

        </div>
        <!-- footer -->
        <?php require __DIR__."/footer.php"; ?>
      </main>
    </div>
  </div>

<script>
Chart.defaults.global.legend.display = true;

var ctxi = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctxi, {
  // The type of chart we want to create
  type: 'doughnut',
  data: {
    datasets: [{
      data: [
        <?php echo $cBalance ?>,
        <?php echo $cAvail ?>,
      ],
      backgroundColor: [
        window.chartColors.red,
        window.chartColors.green,
      ],
      label: 'Dataset 1'
    }],
    labels: [
      '<?php echo 'balance '.$cBalance ?>',
      '<?php echo 'available '.$cAvail ?>'
    ]
  },
  options: {
    responsive: true,
    legend: {
      position: 'left',
    },
    title: {
      display: true,
      text: 'Current Statement'
    },
    animation: {
      duration: 3000,
      animateScale: false,
      animateRotate: true
    }
  }
});


<?php
$sql = 'SELECT * FROM transactions WHERE cnumber = :cnumber';
$stmt = $conn->prepare($sql);
$stmt->execute(['cnumber' => $cnumber]);
$result = $stmt->fetchAll();
// Cats
$food=0;$cloth=0;$tools=0;$home=0;
foreach ($result as $result) {
  // code...
  if ($result->tcat ==0) {$food ++;}
  elseif ($result->tcat ==1) {$cloth ++;}
  elseif ($result->tcat ==2) {$tools ++;}
  elseif ($result->tcat ==3) {$home ++;}
}

 ?>
var ctxi = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctxi, {
  // The type of chart we want to create
  type: 'bar',
  data: {
    datasets: [{
      data: [
        <?php echo $food ?>,
        <?php echo $cloth ?>,
        <?php echo $tools ?>,
        <?php echo $home ?>,
      ],
      backgroundColor: [
        window.chartColors.orange,
        window.chartColors.yellow,
        window.chartColors.purple,
        window.chartColors.blue,
      ],
      borderWidth: 1,
      label: ' '
    }],
    labels: [
      'Food',
      'Clothes',
      'Tools',
      'Home'
    ]
  },
  options: {
    legend: {
      display: false
    },
    tooltips: {
      callbacks: {
        label: function(tooltipItem) {
          return tooltipItem.yLabel;
        }
      }
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    responsive: true,
    legend: {
      position: 'right',
    },
    title: {
      display: true,
      text: 'Category'
    },
    animation: {
      duration: 3000,
      animateScale: true,
      animateRotate: true
    }
  }
});

      	</script>
