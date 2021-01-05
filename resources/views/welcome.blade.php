<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
 
  <div class="panel-group" style="padding-top:10px;">
    <div class="panel panel-primary">
      <div class="panel-heading"><center><h2>Form</h2></center></div>
        <div class="panel-body">
            <form action="number" method="post">
                @csrf
                  <div class="form-group">
                      <label for="phonenumber">Dial Phone Number:</label>
                      <p>(Note: Enter number with country code)</p>
                      <input type="text" class="form-control" id="phonenumber" placeholder="Enter Phone Number" name="phonenumber" oninput="myFunction()" required>
                      <p id="demo" style="color: red;"></p>
                      @foreach($errors->all() as $error)
                        <li style="color: red;">{{$error}}</li>
                      @endforeach
                  </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>

   
</div>
<script>
function myFunction() {
  var number = document.getElementById("phonenumber").value;
  var  text;
  
  if (isNaN(number)) {
    text = "Input not valid";
  }
   else {
    retun;
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
</body>
</html>
