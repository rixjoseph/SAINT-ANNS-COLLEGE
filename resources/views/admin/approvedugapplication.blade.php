<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>ADMIN DASHBOARD</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="/csss/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="/csss/style.css" rel="stylesheet">
  <link href="/csss/style-responsive.css" rel="stylesheet">
  <script src="/lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>ADMIN<span>PANEL</span></b></a>
      <!--logo end-->

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{ route('auth.logout') }}">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
         <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a class="active" href={{ "/admin/admindashboard" }}>
              <i class="fa fa-dashboard"></i>
              <span>HOME</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>FACULTY</span>
              </a>
            <ul class="sub">
              <li><a href={{ "/admin/addfaculty" }}>ADD</a></li>
              <li><a href="">EDIT</a></li>
              <li><a href="">VIEW</a></li>
              <li><a href="">DELETE</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>COUSRSE</span>
              </a>
            <ul class="sub">
              <li><a href={{ "/admin/addcourse" }}>ADD COURSE</a></li>
              <li><a href="">VIEW COURSE</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>ADMISSION</span>
              </a>
              <ul class="sub">
              <li><a href={{ "/admin/ugapplicationreport" }}>VIEW UG APPLICATIONS</a></li>
              <li><a href={{ "/admin/reportapproveapplication" }}>VIEW PG APPLICATIONS</a></li>
              <li><a href={{ "/admin/approvedugapplication" }}>APPROVED UG APPLICATIONS</a></li>
              <li><a href={{ "/admin/approvedapplication" }}>APPROVED PG APPLICATIONS</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>REPORTS</span>
              </a>
            <ul class="sub">
              <li><a href={{ "/admin/reportcourse" }}>Course Wise</a></li>
              <li><a href={{ "/admin/reportfaculty" }}>Faculty Department Wise</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>NOTFICATION</span>
              </a>
            <ul class="sub">
              <li><a href={{ "/admin/addnotification" }}>ADD NOTIFICATION</a></li>
              <li><a href={{ "/admin/viewnotification" }}>VIEW NOTIFICATION</a></li>
            </ul>
          </li>
          <li>
            <a href={{ "/admin/showcontact" }}>
              <i class="fa fa-envelope"></i>
              <span>MESSAGES</span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>ADMIN ADVANCED SETTINGS</span>
              </a>
            <ul class="sub">
              <li><a href={{ "/admin/addadmin" }}>Create New Admin</a></li>
              <li><a href="/admin/changepassword">Change Password</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
        
          <form action="{{ route('readugapp') }}" method="post">
                  @csrf
                <table class="table table-borderless">
                <tr>
                    <td><br><h3 style="color:#e6b800"><b>VIEW APPROVED UG APPLICATIONS - COURSE WISE</b></h3></td>
                </tr>
                <tr>
                    <td>COURSE NAME</td>
                    <td><select name="course" class="form-control">
                        <option value=""></option>
                        <option value="BCA">BCA</option>
                        <option value="BBA">BBA</option>
                        <option value="BSW">BSW</option>
                        
                         </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-success">GET REPORT</button></td>
                </tr>
                </table>
            </form>


            
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>RIX_JOSEPH</strong>. All Rights Reserved
        </p>
        <div class="credits">
          
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          
          Created with Bootsrap  template by <a href="https://templatemag.com/">RIXON JOSEPH</a>
        </div>

      </div>
    </footer>
    footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="/lib/jquery/jquery.min.js"></script>

  <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="/lib/jquery.scrollTo.min.js"></script>
  <script src="/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="/lib/common-scripts.js"></script>
  <script type="text/javascript" src="/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="/lib/sparkline-chart.js"></script>
  <script src="/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
   // $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>