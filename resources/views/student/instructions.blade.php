<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMISSION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>



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
          <a class="nav-link active" href="/student/course">COURSES</a>
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
<br>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-12 col-xxl-12">



<h5 style="color:#e6b800"><b>GUIDELINES FOR FILLING UP ONLINE APPLICATION</b></h5>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">

<table class="table table-borderless">
<tr>
    <td><b>The following procedure is necessary for the successful completion of the ONLINE application.</b></td>
    
</td>
</tr>
<tr>
    <td>Provide the correct details ??? First Name, Last Name, Email- ID, Password and Phone</td>
</tr>
<tr>
    <td>Provide the correct Educational details</td>
</td>
</tr>
<tr>
    <td>Upload the documents in mentioned format</td>
</td>
</tr>
<tr>
    <td>After the Submission of Application,Download the preview of application from the site </td>
</td>
</tr>
<tr>
    <td>After submitting, You can view your Application status is Profile</td>
</td>
</tr>
</table>
</form>


</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>>
