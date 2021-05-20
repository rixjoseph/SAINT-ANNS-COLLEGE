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

<h3 style="color:#e6b800"><b>ADMISSION FOR MSW</b></h3>

<h3 style="color:#e6b800"><b>PERSONAL DETAILS</b></h3>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">
<form action="/readmsw" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<table class="table table-borderless">
<tr>
    <td>FIRST NAME</td>
    <td><input type="text" class="form-control" name="fname"></td>
    <td>LAST NAME</td>
    <td><input type="text" class="form-control" name="lname"></td>
</tr>
<tr>
    <td>FATHER NAME</td>
    <td><input type="text" class="form-control" name="fathername"></td>
</tr>
<tr>
    <td>MOTHER NAME</td>
    <td><input type="text" class="form-control" name="mothername"></td>
</tr>
<tr>
    <td>GENDER</td>
    <td>MALE<input type="radio"  name="gender" value="M">&nbsp;&nbsp;&nbsp;
      FEMALE<input type="radio"  name="gender" value="F">&nbsp;&nbsp;&nbsp;
      OTHERS<input type="radio"  name="gender" value="O"></td>
</tr>
<tr>
    <td>DOB</td>
    <td><input type="date" class="form-control" name="dob"></td>
</tr>
<tr>
    <td>HOUSE NAME</td>
    <td><input type="text" class="form-control" name="hname"></td>
</tr>
<tr>
    <td>STREET/ROAD/LANE</td>
    <td><input type="text" class="form-control" name="street"></td>
</tr>
<tr>
    <td>DISTRICT</td>
    <td><input type="text" class="form-control" name="district"></td>
</tr>
<tr>
    <td>STATE</td>
    <td><input type="text" class="form-control" name="state"></td>
</tr>
<tr>
    <td>MOBILE NUMBER</td>
    <td><input type="text" class="form-control" name="mobileno"></td>
    <td><input type="hidden" class="form-control" name="email" value="{{ session('mailid')->email }}"></td>
</tr>




<tr>
    <td><br><h3 style="color:#e6b800"><b>ACCADEMIC QUALIFICATION</b></h3></td>
</tr>
<tr>
    <td><hr style="height:2px;border-width:0;color:gray;background-color:gray"></td>
</tr>



<tr>
    <th></th>
    <th>BOARD</th>
    <th>MARKS(In %)</th>
    <th>YEAR OF PASSING</th>
</tr>
<tr>
    <td><b>10<sup>th</sup>  GRADE</b></td>
    <td><input type="text" class="form-control" name="sslcboard"></td>
    <td><input type="text" class="form-control" name="sslcmarks"></td>
    <td><input type="text" class="form-control" name="sslcyear"></td>
</tr>
<tr>
    <td><b>HIGHER SECONDARY</b></td>
    <td><input type="text" class="form-control" name="hsboard"></td>
    <td><input type="text" class="form-control" name="hsmarks"></td>
    <td><input type="text" class="form-control" name="hsyear"></td>
</tr>
<tr>
    <td><b>DEGREE PROGRAM</b></td>
    <td><input type="text" class="form-control" name="ugboard"></td>
    <td><input type="text" class="form-control" name="ugmarks"></td>
    <td><input type="text" class="form-control" name="ugyear"></td>
</tr>


<tr>
    <td><br><h3 style="color:#e6b800"><b>DOCUMENTS UPLOAD</b></h3></td>
</tr>
<tr>
    <td><hr style="height:2px;border-width:0;color:gray;background-color:gray"></td>
</tr>



<tr>
    <td>PHOTO (jpg/jpeg/png)</td>
    <td><input type="file" name="photo" class="custom-file-input"></td>
</tr>
<tr>
    <td>10<sup>th</sup>  MARKLIST</td>
    <td><input type="file" name="sslc" class="custom-file-input"></td>
</tr>
<tr>
    <td>HIGHER SECONDARY MARKLIST</td>
    <td><input type="file" name="hs" class="custom-file-input"></td>
</tr>
<tr>
    <td>DEGREE CERTIFICATE/CONSOLIDATED MARKLIST</td>
    <td><input type="file" name="ug" class="custom-file-input"></td>
</tr>
<tr>
    <td></td>
    <td><br><button class="btn btn-warning">SUBMIT AND PAY</button></td>
</tr>

</table>
</form>

</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>>