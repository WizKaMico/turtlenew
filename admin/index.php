
<?php

include('../connection/connection.php');
include('../connection/session.php'); 
 
$result=mysqli_query($conn, "select * from admin_credentials where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);



?>


<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" /><link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&amp;family=Poppins:wght@400;500;600&amp;display=swap'><link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" type="text/css" href="pages/home/bootstrap/css/bootstrap.min.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- wrapper -->
<div class="wrapper">
<!-- search starts -->

<!-- search starts -->
<div class="search">
    <form class="search-form d-flex">
      <label>
        <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
        <input type="search" id="site-search" class="search-input" placeholder="Global Search" autocomplete="on" />
      </label>

      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19.5 18.2071V18.5H4.5V18.2071L6.35355 16.3536L6.5 16.2071V16V11C6.5 8.09437 8.02219 5.78092 10.6153 5.16653L11 5.07538V4.68V4C11 3.44614 11.4461 3 12 3C12.5539 3 13 3.44614 13 4V4.68V5.07506L13.3843 5.16644C15.9681 5.78076 17.5 8.10482 17.5 11V16V16.2071L17.6464 16.3536L19.5 18.2071ZM13.4135 20.5C13.2061 21.0806 12.6488 21.5 12 21.5C11.3443 21.5 10.7907 21.0813 10.5854 20.5H13.4135Z" fill="white" stroke="#C2CFE0" />
        <circle cx="17" cy="6" r="4.5" fill="#F7685B" stroke="white" />
      </svg>
    </form>
  </div>
  <!-- search ends -->

<!-- search ends -->



<!-- sidebar starts -->
<aside class="sidebar">
<!-- saas header -->
<div class="header">

<!-- <h1 style="color:#1ddd9f; font-size:30px;">HUMATHINIK</h1> -->
<img src="logo/logo.png">
</div>
<!-- sidebar inner -->
<div class="sidebar_inner">
<!-- person block-->
<!-- navbar-->
<nav class="navbar">
<ul>
  <li class="nav-item" style="margin-top:15px;">
    <a href="index.php?view=HOME">
      <div class="menu-icon">
       
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 20 20">
          <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
        </svg>
        <span class="nav-label">HOME</span>
      </div>
    </a>
  </li>
    <li class="nav-item">
    <a href="index.php?view=EVENT">
      <div class="menu-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people" viewBox="0 0 20 20">
          <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
        </svg>
        <span class="nav-label">EVENT</span>
      </div>
    </a>
  </li>
  <li class="nav-item">
    <a href="index.php?view=LAP">
      <div class="menu-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
  <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
     </svg>
        <span class="nav-label">LAP</span>
      </div>
    </a>
  </li>

   
  
  <li class="nav-item">
    <a href="../connection/logout.php">
      <div class="menu-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
          <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
        </svg>
        <span class="nav-label">SIGN-OUT</span>
      </div>
    </a>
  </li>
</ul>
</nav>
<!-- navbar ends -->
<div class="toggle">
<a href="">
  <div class="menu-icon">
    <img src="./img/toggle_sidebar.svg" alt="" />
  </div>
</a>
</div>
<!-- toggle ends-->
</div>
<!-- inner ends -->
</aside>
<!-- sidebar ends -->

<!-- mainBlock starts -->

<div class="main">


<?php 

if(!empty($_GET['view'])){ 

if($_GET['view'] == 'HOME')
{
include ('pages/home.php');
}
else if($_GET['view'] == 'EVENT')
{
include ('pages/account.php');
}
else if($_GET['view'] == 'LAP')
{
include ('pages/lap.php');
}
else
{

}

} else {

include ('pages/home.php');

}

?>

</div>
<!--      main ends -->
</div>
<!-- wrapper -->
<!-- partial -->
<script src='https://kit.fontawesome.com/d8ab0e903f.js'></script><script  src="style/script.js"></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
<script src='https://demo.htmx.org'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/htmx/1.8.4/htmx.min.js'></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>


$(document).ready(function(){
    $('#purpose').on('change', function() {
      if ( this.value == 'Sponsored')
      //.....................^.......
      {
        $("#Sponsored").show();
        $("#Race").hide();
      }
      else if(this.value == 'Race'){
        $("#Sponsored").hide();
        $("#Race").show();
      }
      else
      {
        $("#Race").hide();
        $("#Sponsored").hide();
      }
    });
});

</script>


<script>


$(document).ready(function(){
    $('#category').on('change', function() {
      if ( this.value == 'Kiddie')
      //.....................^.......
      {
        $("#Kiddie").show();
        $("#Short").hide();
        $("#Intermediate").hide();
        $("#Open").hide();
      }
      else if(this.value == 'Short'){
        $("#Kiddie").hide();
        $("#Short").show();
        $("#Intermediate").hide();
        $("#Open").hide();
      }
      else if(this.value == 'Intermediate'){
        $("#Kiddie").hide();
        $("#Short").hide();
        $("#Intermediate").show();
        $("#Open").hide();
      }
      
      else
      {
        $("#Kiddie").hide();
        $("#Short").hide();
        $("#Intermediate").hide();
        $("#Open").show();
      }
    });
});

</script>


<script>

htmx.on("htmx:beforeRequest", function(evt) {
if(evt.detail.target.hasChildNodes()){
// prevent another request
evt.preventDefault()
}
});


</script>
</body>
</html>

