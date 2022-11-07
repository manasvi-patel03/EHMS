<?php 
$mysqli = new mysqli("localhost", "root", "", "se_project");
session_start();
$id=$_SESSION['id'];
$result=mysqli_query($mysqli,"SELECT * FROM login WHERE id='$id'");
$row=mysqli_fetch_array($result);
$name=$row['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css"
rel="stylesheet"
/>

    <title>Home</title>
    <style>
        body {
        background-color: #FEDCC5 !important;
}
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
.btn1{
    background: hsla(0, 83%, 64%, 1);

background: linear-gradient(180deg, hsla(0, 83%, 64%, 1) 0%, hsla(221, 19%, 20%, 1) 72%);

background: -moz-linear-gradient(180deg, hsla(0, 83%, 64%, 1) 0%, hsla(221, 19%, 20%, 1) 72%);

background: -webkit-linear-gradient(180deg, hsla(0, 83%, 64%, 1) 0%, hsla(221, 19%, 20%, 1) 72%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#EF5858", endColorstr="#292F3C", GradientType=1 );
color: white;
margin-top: 2vw;
width: 10vw;
height: 50px;
border-radius: 10px;
border-color: #FEDCC5;
box-shadow: none !important;
}
.btn2{
    background-color: #F28F8F !important;
color: black;
margin-left: 50vw;
border-radius: 10px;
height: 50px;
width: 22vw;
}

    </style>
</head>
<body>
    <!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white" style="background-color: #FEDCC5 !important;border:none !important;
    box-shadow:none !important;">
      <div class="position-sticky" style="background-color: #FEDCC5 !important;">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="#" class="list-group-item list-group-item-action py-2 " aria-current="true" style="background-color: #FEDCC5 !important;margin-top: 1vw;border-color:#FEDCC5 !important" onMouseOver="this.style.color='#909597'" onMouseOut="this.style.color='#616161'" >
            <i class="fas fa-tachometer-alt fa-fw me-3" style="margin-top: 30px;margin-left: 1px !important;"></i><span>Dashboard</span>
          </a>
          <a href="appraisal.html" class="list-group-item list-group-item-action py-2 "style="background-color: #FEDCC5 !important;border-color:#FEDCC5 !important" onMouseOver="this.style.color='#909597'" onMouseOut="this.style.color='#616161'" >
            <i class="fas fa-rupee fa-fw me-3"  style="margin-top: 30px;margin-left: 1px !important;"></i><span>Appraisals</span>
          </a>
          <a href="events.html" class="list-group-item list-group-item-action py-2 ripple"style="background-color: #FEDCC5 !important;border-color:#FEDCC5 !important" onMouseOver="this.style.color='#909597'" onMouseOut="this.style.color='#616161'" >
            <i class="fas fa-inbox fa-fw me-3" style="margin-top: 30px;margin-left: 1px !important;"></i><span>Events</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple" style="background-color: #FEDCC5 !important;border-color:#FEDCC5 !important" onMouseOver="this.style.color='#909597'" onMouseOut="this.style.color='#616161'" 
            ><i class="fas fa-comment fa-fw me-3" style="margin-top: 30px;margin-left: 1px !important;"></i><span>Inbox</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple" style="background-color: #FEDCC5 !important;border-color:#FEDCC5 !important" onMouseOver="this.style.color='#909597'" onMouseOut="this.style.color='#616161'" >
            <i class="fas fa-chart-pie fa-fw me-3" style="margin-top: 30px;margin-left: 1px !important;"></i><span>Settings</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple" style="background-color: #FEDCC5 !important;">
            <button type="button" class="btn1"><i class="fas fa-user-alt fa-fw me-3" style="margin-left:-1vw !important" aria-hidden="true"></i><?php echo $name; ?></button>
          </a>
          
        </div>
      </div>
    </nav>
    <!-- Sidebar -->
  
    <!-- Navbar -->
    <nav id="main-navbar" class="navbar fixed-top" >
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
       
        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img
            src="images/logo.png"
            height="60" style="margin-left: 10px;"/>
            <p style="margin-top: 20px; margin-left: 20px;
            font-style: normal;
            font-weight: 500;
            font-size: 29.1349px;
            line-height: 34px;">Dashboard</p>
            <input type="text" style="background-color: white;" placeholder="can’t find something? search it here!" class="btn btn2"></input>
            <p style="margin-top: 20px; font-weight: 600;
            font-size: 30px !important;margin-left: 20px;font-size: 20px;line-height: 34px;letter-spacing: 8px;">EHMS</p>  
        </a>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->
  
  <!--Main layout-->
  <main style="margin-top: 58px;">
    <div class="container-fluid" style="background-color:#EF5858 !important;width: 700px;height: 320px;margin-left:12vw;margin-top: 10vw;border-radius:29.1349px ;">
    <h4 style="padding-top: 50px;padding-left: 30px; color: white;font-weight: 700;
    font-size: 30px;">Your happiness matters to us!</h4>
    <p style="color: white;font-size:12px !important;padding-left: 30px;padding-right: 250px;">
        With a special premium account, you can do very interesting things! By purchasing this account, special features will be activated for you that you will be amazed to see!  
    </p>
    <div style="margin-top:-110px;margin-left: 25px;">
    <p style="padding-bottom: 100px;"><img src="images/man.png" alt="" height="200px" style="padding-left: 500px;;margin-bottom: 100px"></p>
    </div>
    
    <div class="container-fluid" style="border-radius:14px ;margin-top:-250px;margin-left:30px;height:50px;width:150px;background: linear-gradient(119.15deg, #EF5858 -13.54%, #292F3C 118.09%);">
        <p style="color: white;text-align: center;padding-top: 10px;">Happy You &nbsp;&nbsp;&nbsp;&#128522;</p>
        <div class="container-fluid" style="border-radius:14px ;margin-top:-53px;margin-left:200px;height:50px;width:150px;background: linear-gradient(119.15deg, #EF5858 -13.54%, #292F3C 118.09%);">
            <p style="color: white;text-align: center;padding-top: 10px;">Happy We &nbsp;&nbsp;&nbsp;&#128522;</p>
        </div>
    </div>
    
</div>
<div class="container-fluid" style="background: linear-gradient(119.15deg, #EF5858 -13.54%, #292F3C 118.09%);width: 200px;height: 120px;margin-left:12vw;margin-top: 20px;border-radius:29.1349px ;">
    
    <i class="fas fa-user-circle" style="margin-left: 1vw; color: #21A092;font-size:20px;padding-top:1vw;"></i>
    <i class="fas fa-chart-line" style="color: #10AE9D;margin-left:45px;margin-top: 20px;"></i> <p style="color: white; margin-top:-25px;margin-left: 110px;"> 2.12%</p>
    <p style="color: #B6B7BC; font-size:x-small;padding-left: 100px;margin-top:-5px;">this month</p>
    <p style="color: white;text-align: center;padding-top: 1px;">Happiness Index</p>
    <div class="container-fluid" style="background: linear-gradient(119.15deg, #EF5858 -13.54%, #292F3C 118.09%);width: 200px;height: 120px;margin-left:17vw;margin-top:-125px;border-radius:29.1349px ;">
        <i class="fas fa-user-circle" style="margin-left: 1vw; color: #21A092;font-size:20px;padding-top:1vw;"></i>
        <i class="fas fa-chart-line" style="color: #10AE9D;margin-left:45px;margin-top: 20px;"></i> <p style="color: white; margin-top:-25px;margin-left: 110px;"> 5%</p>
        <p style="color: #B6B7BC; font-size:x-small;padding-left: 100px;margin-top:-5px;">this year</p>
        <p style="color: white;text-align: center;padding-top: 1px;">Happiness Index</p>
        <div class="container-fluid" style="background: linear-gradient(119.15deg, #EF5858 -13.54%, #292F3C 118.09%);width: 200px;height: 120px;margin-left:17vw;margin-top: -125px;border-radius:29.1349px ;">
            <i class="fas fa-user-circle" style="margin-left: 1vw; color: #21A092;font-size:20px;padding-top:1vw;"></i>
            <i class="fas fa-chart-line" style="color: #10AE9D;margin-left:45px;margin-top: 20px;"></i> <p style="color: white; margin-top:-25px;margin-left: 110px;"> 7.21%</p>
            <p style="color: #B6B7BC; font-size:x-small;padding-left: 100px;margin-top:-5px;">this weak</p>
            <p style="color: white;text-align: center;padding-top: 1px;">Happiness Index</p>
        </div>
    </div>
    
</div>
    </main>
 
  <!--Main layout-->
</body>
<!-- MDB -->
</html>