<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<script>
function validateForm() 
{
  var x = document.forms["myForm"]["sname"].value;
  var y = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;}
  if(y == ""){
    alert("Email must be filled out"); 
    return false;}
  
  }
</script>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="" tabindex="-1" aria-disabled="true"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>SAINT ANNS</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/icourses">Accademics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/contact" tabindex="-1" aria-disabled="true">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



</head>
<body>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-6 col-xl-12 col-xxl-12">
<br>
<br>
<center><h4>SIGN UP |  ADMIN PORTAL</h4></center>

<form action="{{ route('auth.adminsave') }}" name="myForm" method="post" onsubmit="return validateForm()">
@if(Session::get('successs'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::get('fail'))
    <div class="alert alert-danger">
        {{ Session::get('fail') }}
    </div>
@endif

{{csrf_field()}}


<table class="table table-borderless">
<tr>
    <td>NAME</td>
    <td><input type="text" class="form-control" title="ENTER THE NAME!" name="sname" placeholder="NAME" value="{{ old('sname') }}">
    <span class="text-danger">@error('sname'){{ $message }} @enderror</span>
</td>
</tr>

<tr>
    <td>EMAIL</td>
    <td><input type="text" class="form-control" title="ENTER THE EMAIL!" name="email" placeholder="EMAIL" value="{{ old('email') }}">
    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
</td>
</tr>
<tr>
    <td>PASSWORD</td>
    <td><input type="password" class="form-control" title="Minimum 5 Characters" name="password" placeholder="PASSWORD">
    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
</td>
</tr>
<tr>
    <td>CONFIRM PASSWORD</td>
    <td><input type="password" class="form-control" title="Minimum 5 Characters" name="cpassword" placeholder="CONFIRM PASSWORD">
    <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
</td>
</tr>
<tr>
    <td><a href="{{ route('auth.login') }}">I already have an account,Sign in</a></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-warning">SIGN UP</button></td>
</tr>
</table>
</form>
</div>
</div>
</div>
</body>
</html>


