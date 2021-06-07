
<?php 
header('Access-Control-Allow-Origin: *');
 
?>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/white-version/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 14:41:38 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>GDB</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->

  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">GDB</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.php" class="waves-effect">
          <i class="icon-home"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
    
      </li>

      

        </ul>
      </li>
      
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top bg-white">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text"name="search_text"  class="form-control" placeholder="Enterss keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
 
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
		  <div class="card-header border-0">
                NCA Approved TVWS Basestations 
				<div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				    <div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void();">Action</a>
						<a class="dropdown-item" href="javascript:void();">Another action</a>
						<a class="dropdown-item" href="javascript:void();">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript:void();">Separated link</a>
					 </div>
				  </div>
                 </div>
                </div>
              
               <div class="table-responsive">
                 <table class="table align-items-center table-flush">
                  <thead>
                   <tr>
                     <th>Serial Number</th>
                     <th>Device ID</th>
                     <th>Manufacturer ID </th>
                     <th>District</th>
                     <th>Operator</th>
                     <th>Antenna Type</th>
                     <th>Request</th>
                   
                     <!--th>Shipping</th-->
                   </tr>
                   </thead>
                   <tbody id="tdata">

                   </tbody>
                 </table>
               </div>
          </div>
        </div>
      </div><!--End Row-->

      

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	

  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>

  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
 
  <!-- Chart js -->
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" />
 
  <script>
    function productDelete(ctl) {
    _row = $(ctl).parents("tr");
    var cols = _row.children("td");
    var base1=$(cols[0]).text();
    var base2=$(cols[2]).text();
    var base3=$(cols[3]).text();
    var base4=$(cols[4]).text();
    var base5=$(cols[5]).text();
    var base6=$(cols[1]).text();
    var para1 = new URLSearchParams();
    var para2 = new URLSearchParams();
    var para3 = new URLSearchParams();
    var para4 = new URLSearchParams();
    var para5 = new URLSearchParams();
    var para6 = new URLSearchParams();
    para1.append("data1", base1); 
    para2.append("data2", base2);
    para3.append("data3", base3);  
    para4.append("data4", base4);  
    para5.append("data5", base5);  
    para6.append("data6", base6);     
    location.href = "index12.php"+"?" +  para1.toString() +"&"+ para2.toString()+"&"+ para3.toString()+"&"+ para4.toString()+"&"+ para5.toString()+"&"+ para6.toString();
}

$(document).ready(function(){
 


  
  
    $.get("https://nca-online-db.herokuapp.com/api/view-records",function(datas,status){
     console.log(datas)
   var data= JSON.parse(JSON.stringify(datas))
 
   num=0;   
   data.forEach(function(dt){
          $("#tdata").append("<tr>"+
            "<td class='row-data'>"+dt.serialNumber+"</td>"+
            "<td class='row-data'>"+dt.deviceId+"</td>"+
            "<td class='row-data' >"+dt.manufacturerId+"</td>"+
            "<td class='row-data'>"+dt.district+"</td>"+
            "<td class='row-data'>"+dt.operator+"</td>"+
            "<td class='row-data'>"+dt.antennaheighttype+"</td>"+
            "<td>" +
            "<button type='button' onclick='productDelete(this);' class='btn btn-default'>"+
              "<span class='glyphicon glyphicon-remove' />" +
              "</button>" +
              "</td>" +
            +"</tr>"
            );
            num++
            
          
   });


  


  
   console.log(num)
 
   
    })
 
});



  </script>
  
</body>

<!-- Mirrored from codervent.com/rocker/white-version/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Oct 2018 14:43:13 GMT -->
</html>
