<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICATION</title>
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

<h4 style="color:#e6b800"><b>APPLICATION SUBMITTED SUCCESSFULLY</b></h4>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">

@foreach($data as $d)
<table class="table table-borderless">
<tr>
    <td><img src="{{ asset('uploads/photos/'. $d->photo) }}" height="100" width="100" alt=""></td>
    <td></td>
</tr>
<tr>
    <td>Name</td>
    <td>{{ $d->fname }}   {{ $d->lname }}</td>
</tr>
<tr>
    <td>Father Name</td>
    <td>{{ $d->fathername }}</td>
</tr>


<tr>
    <td>Gender</td>
    <td>{{ $d->gender }}</td>
</tr>
<tr>
    <td>Dob</td>
    <td>{{ $d->dob }}</td>
</tr>
<tr>
    <td>Housename</td>
    <td>{{ $d->hname }}</td>
</tr>
<tr>
    <td>Course Opted</td>
    <td>{{ $d->course }}</td>
</tr>
<tr>
    <td>Mobile Number</td>
    <td>{{ $d->mobileno }}</td>
</tr>
<tr>
    <td>Email</td>
    <td>{{ $d->email }}</td>
</tr>

<tr>
    <td><br><h6 style="color:#e6b800"><b>ACCADEMIC QUALIFICATION</b></h6></td>
</tr>
<tr>
    <th></th>
    <th>BOARD</th>
    <th>MARKS(In %)</th>
    <th>YEAR OF PASSING</th>
</tr>
<tr>
    <td><b>10<sup>th</sup>  GRADE</b></td>
    <td>{{ $d->sslcboard }}</td>
    <td>{{ $d->sslcmarks }}</td>
    <td>{{ $d->sslcyear }}</td>
</tr>
<tr>
    <td><b>HIGHER SECONDARY</b></td>
    <td>{{ $d->hsboard }}</td>
    <td>{{ $d->hsmarks }}</td>
    <td>{{ $d->hsyear }}</td>
</tr>
<tr>
    <td><b>DEGREE PROGRAM</b></td>
    <td>{{ $d->ugboard }}</td>
    <td>{{ $d->ugmarks }}</td>
    <td>{{ $d->ugyear }}</td>
</tr>
<tr>
    <td><br><h6 style="color:#e6b800"><b>APPLICATION AND PAYMENT STATUS</b></h6></td>
</tr>

<tr>
    <td>Application status</td>
    <td>{{ $d->status }}</td>
</tr>
<tr>
    <td>Payment Status</td>
    <td>{{ $d->paystatus }}</td>
</tr>
<tr>
<td><button class="btn btn-warning" onclick="myFunction()">PRINT APPLICATION</button></td>
</tr>
</table>
@endforeach

</div>
</div>
</div>

<script>
						function myFunction()
						{
							window.print();
						}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>>