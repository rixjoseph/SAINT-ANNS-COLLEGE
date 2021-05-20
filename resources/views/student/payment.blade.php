
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">


<style>


* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container2 {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text],input[type=password],select {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>



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
      </ul>

      <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
      <li class="nav-item dropdown">
          <a class="nav-link active dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i>Hi, {{ session('mailid')->email }}</i> <i class="bi bi-file-person"></i>
          </a>
         
        </li>
        </ul>


    </div>
  </div>
</nav>

<body>

   
<!-- //header -->

    
    
    <div class="row" style="width:600px;left:450px;top:150px;">
  <div class="col-75">
    <div class="container2">
      <form action="/readpay" method="post">
      @csrf
        <div class="row">
          

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
              <label for="cname">Amount TO Pay</label>
            <input type="text" id="cname" name="amount" value="1000" readonly>
               <input type="text" id="cname" name="id" hidden value="">
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="JOSEPH GEORGE">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" maxlength="16" pattern="{0-9}{-}{16}" required>
            <label for="expmonth">Exp Month</label>
            <select id="expmonth" name="expmonth">
              
              <option value=''>--Select Month--</option>
    <option selected value='1'>Janaury</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
    <option value='7'>July</option>
    <option value='8'>August</option>
    <option value='9'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>
    </select> 
              
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <select id="expyear" name="expyear" >
                     <option value="16">2019</option>
                    <option value="17"> 2020</option>
                    <option value="18"> 2021</option>
                    <option value="19"> 2022</option>
                    <option value="20"> 2023</option>
                    <option value="21"> 2024</option>
                     <option value="22">2025</option>
                    <option value="23"> 2026</option>
                    <option value="24"> 2027</option>
                    <option value="25"> 2028</option>
                    <option value="26"> 2029</option>
                    <option value="27"> 2030</option>
                     <option value="28">2031</option>
                    <option value="29"> 2032</option>
                    <option value="30"> 2033</option>
                    <option value="31"> 2034</option>
                    <option value="32"> 2035</option>
                    <option value="33"> 2036</option>
                     <option value="34">2037</option>
                    <option value="35"> 2038</option>
                    <option value="36"> 2039</option>
                    <option value="37"> 2040</option>
                    <option value="38"> 2041</option>
                    <option value="39"> 2042</option>
                    <option value="40"> 2043</option>
                </select>
               
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" maxlength="3" placeholder="" pattern="{0-9}{3}" required>
              </div>
            </div>
          </div>
          
        </div>
       
        <input type="submit" value="submit" class="btn" name="submit">
      </form>
    </div>
  </div>
  
</div>
    
</body>
</html>