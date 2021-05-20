<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>SAINT ANNS COLLEGE</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/student/studentdashboard">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/student/instructions">ADMISSION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">COURSES</a>
        </li>
      </ul>

      <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
      <li class="nav-item dropdown">
          <a class="nav-link active dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i>Hi, {{ session('mailid')->email }}</i> <i class="bi bi-file-person"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/student/profile">PROFILE</a></li>
            <li><a class="dropdown-item" href="/student/changepassword">CHANGE PASSWORD</a></li>
            <li><a class="dropdown-item" href="{{ route('auth.logout') }}">LOGOUT</a></li>
          </ul>
        </li>
        </ul>


    </div>
  </div>
</nav>

<!-- navbar end -->

<body>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-6 col-lg-6 col-xl-12 col-xxl-12">
<br>
<br>


<table class="table table-borderless">
<tr>
    <td><br><h5 style="color:#e6b800"><b>PG PROGRAMS</b></h5></td>
</tr>
<tr>
    <td><hr style="height:2px;border-width:0;color:gray;background-color:gray"></td>
</tr>
<tr>
    <td>
    <div class="card" style="width: 18rem;">
  <img src="../images/courses/MCA.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">MCA</h5>
    <p class="card-text">The Department commenced its three year (six semesters) Master of Computer Applications (MCA) Programme in 2001. Affiliated to Mahatma Gandhi University, Kottayam, Kerala, India.</p>
  </div>
  
  <div class="card-body">
  <a href="/student/mcaadmission"><button class="btn btn-warning">APPLY</button><a>
  </div>
</div>
    </td>

    <td>
    <div class="card" style="width: 18rem;">
  <img src="../images/courses/MSW.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">MSW</h5>
    <p class="card-text">The Department of Social Work had its humble beginning in 1955 with a Diploma Programme in social services (DSS).Later in 1961 the school started a Master of Social Work (MSW) </p>
  </div>

  <div class="card-body">
    <a href="/student/mswadmission"><button class="btn btn-warning">APPLY</button><a>
  </div>
</div>
    </td>

    <td>
    <div class="card" style="width: 18rem;">
  <img src="../images/courses/MBA.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">MBA</h5>
    <p class="card-text">Department of Business Administration of ANNS started its two year full time MBA programme at Hill Campus, Kalamassery in the year 1995, affiliated to Mahatma Gandhi University, Kottayam, Kerala.</p>
  </div>

  <div class="card-body">
  <a href="/student/mbaadmission"><button class="btn btn-warning">APPLY</button><a>
  </div>
</div>
    </td>
</tr>

<tr>
    <td><br><h5 style="color:#e6b800"><b>UG PROGRAMS</b></h5></td>
</tr>
<tr>
    <td><hr style="height:2px;border-width:0;color:gray;background-color:gray"></td>
</tr>

<tr>
    <td>
    <div class="card" style="width: 18rem;">
  <img src="../images/courses/BCA.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BCA</h5>
    <p class="card-text">The Department commenced its three year (six semesters) Master of Computer Applications (MCA) Programme in 2001. Affiliated to Mahatma Gandhi University, Kottayam, Kerala, India.</p>
  </div>
  
  <div class="card-body">
  <a href="/student/bcaadmission"><button class="btn btn-warning">APPLY</button><a>
  </div>
</div>
    </td>

    <td>
    <div class="card" style="width: 18rem;">
  <img src="../images/courses/MSW.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BSW</h5>
    <p class="card-text">The Department of Social Work had its humble beginning in 1955 with a Diploma Programme in social services (DSS).Later in 1961 the school started a Master of Social Work (MSW) </p>
  </div>

  <div class="card-body">
    <a href="/student/bswadmission"><button class="btn btn-warning">APPLY</button><a>
  </div>
</div>
    </td>

    <td>
    <div class="card" style="width: 18rem;">
  <img src="../images/courses/BBA.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BBA</h5>
    <p class="card-text">Department of Business Administration of ANNS started its two year full time MBA programme at Hill Campus, Kalamassery in the year 1995, affiliated to Mahatma Gandhi University, Kottayam, Kerala.</p>
  </div>

  <div class="card-body">
  <a href="/student/bbaadmission"><button class="btn btn-warning">APPLY</button><a>
  </div>
</div>
    </td>
</tr>


</table>

</div>
</div>
</div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>