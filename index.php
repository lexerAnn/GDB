<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
  		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  		<meta name="description" content=""/>
  		<meta name="author" content=""/>
	<title>GDBsds</title>
	 <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  	<!-- Vector CSS -->
  	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
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
	<style type="text/css">

	</style>
	<!-- Bootstrap core JavaScript-->
<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>

  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
  
  <!-- Chart js -->
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
</head>
<body class="bg-white">
	<!-- Start wrapper-->
	<div id="wrapper">


	 

      
<!--End topbar header-->
	 <div class="container">
	 	<div class="row justify-content-center">
	 		<div class="coverup">
	 			<h5 class="header" id="result" style="color: white">GDB LOGIN</h5>
	 		
	 			<div class="form-outer">
	 			<form  method="post" id="form-data" enctype="application/x-www-form-urlencoded">
	 				<div id="first" class="page">
	 					
	 					<div class="form-group">
	 						<div class="label" style="color: white">Email</div>
	 						<input type="text" name="=email" class="form-control" placeholder="Email" id="email"  required>
	 						<b class="danger" id="emailError" style="color: white"></b>
	 					</div>
	 					<div class="form-group">
	 						<div class="label" style="color: white">Password</div>
	 						<input type="password" id=password name="password" class="form-control" placeholder="Password" id="pass">
	 						<b class="danger" id="passwordError" style="color: white"></b>
	 					</div>
						 <div class="form-group">
	 						<div class="label" style="color: white">Confirm Password</div>
	 						<input type="cpassword" id=cpassword name="cpassword" class="form-control" placeholder="Password" id="pass">
	 						<b class="danger" id="cpasswordError" style="color: white"></b>
	 					</div>
						 <div class="form-group btns">
	 				
	 						<button type="submit" name="submit" value="Submit" id="submit" class="success" style="color: white">Submit</button>
	 					 
	 					</div>
	 					</div>
	 				    </div>
	 				</div>

	 			</form>
	 		</div>
	 	</div>
	 </div>
	 </div><!--End wrapper-->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript">
var para1 = new URLSearchParams();
	function populate(s1,s2){
   var s1=document.getElementById(s1);
   var s2=document.getElementById(s2);
   s2.innerHTML="";
   if (s1.value=="Ahafo Region"){
   	var optionArray=["asunafo North Municipal|Asunafo North Municipal", "asunafo South|Asunafo South", "aautifi North|Asutifi North", "asutifi South|Asutifi South", "tano North Municipal|Tano North Municipal", "tano South Municipal|Tano South Municipal"];
   }
   else if (s1.value=="Ashanti Region") {
   	var optionArray=["adansi Asokwa Adansi|Adansi Asokwa Adansi", "adansi North|Adansi North", "adansi South|Adansi South", "afigya Kwabre South|Afigya Kwabre South", "afiga Kwabre North|Afiga Kwabre North", "ahafo Ano North Municipal|Ahafo Ano North Municipal", "ahafo Ano South West|Ahafo Ano South West", "ahafo Ano South East|Ahafo Ano South East", "akrofuom District|Akrofuom District", "amansie Central|Amansie Central", "amansie South|Amansie South", "amansie West|Amansie West", "asante Akim Central Municipal|Asante Akim Central Municipal", "asante Akim North|Asante Akim North","asante Akim South|Asante Akim South", "asokore Mampong Municipal|Asokore Mampong Municipal", "asokwa Municipal|Asokwa Municipal", "atwima Kwanwoma|Atwima Kwanwoma", "atwima Mponua|Atwima Mponua", "atwima Nwabiagya North|Atwima Nwabiagya North", "atwima Nwabiagya South|Atwima Nwabiagya South", "bekwai Municipal|Bekwai Municipal", "bosome Freho|Bosome Freho", "bosomtwe|Bosomtwe", "ejisu Municipal|Ejisu Municipal", "ejura-Sekyedumase|Ejura-Sekyedumase", "juaben Municipal|Juaben Municipal", "kumasi Metropolitan|Kumasi Metropolitan","kwadaso Municipal|Kwadaso Municipal","kwabre East Municipal|Kwabre East Municipal","mampong Municipal|Mampong Municipal","obuasi East|Obuasi East","obuasi Municipal|Obuasi Municipal","offinso North|Offinso North","offinso South Municipal|Offinso South Municipal","oforikrom Municipal|Oforikrom Municipal","old Tafo Municipal|Old Tafo Municipal","sekyere Afram Plains|Sekyere Afram Plains","sekyere Central|Sekyere Central","sekyere East|Sekyere East","sekyere Kumawu|Sekyere Kumawu","sekyere South|Sekyere South","suame Municipal|Suame Municipal"];
   }
   else if (s1.value=="Bono Region") {
   	var optionArray=["banda|Banda", "berekum East Municipal|Berekum East Municipal", "berekum West|Berekum West", "dormaa Central Municipal|Dormaa Central Municipal", "dormaa East|Dormaa East", "dormaa West|Dormaa West", "jaman North|Jaman North", "jaman South Municipal|Jaman South Municipal", "sunyani Municipal|Sunyani Municipal", "sunyani West|Sunyani West", "tain|Tain", "wenchi Municipal|Wenchi Municipal"];
   }
   else if (s1.value=="Bono East Region") {
   	var optionArray=["atebubu-Amantin Municipal|Atebubu-Amantin Municipal", "kintampo North Municipal|Kintampo North Municipal", "kintampo South|Kintampo South", "nkoranza North|Nkoranza North", "nkoranza South|Nkoranza South", "pru West|Pru West", "pru East|Pru East", "sene East|Sene East", "sene West|Sene West", "techiman Municipal|Techiman Municipal", "techiman North|Techiman North"];
   }
   else if (s1.value=="Western North Region"){
   	var optionArray=["aowin Municipal|Aowin Municipal", "bia East|Bia East","bia West|Bia West", "bibiani-Anhwiaso-Bekwai|Bibiani-Anhwiaso-Bekwai", "bodi|Bodi", "juaboso|Juaboso", "sefwi Akontombra|Sefwi Akontombra", "sefwi Wiawso|Sefwi Wiawso", "suaman|Suaman"];
   }
   else if (s1.value=="Western Region"){
    var optionArray=["ahanta West Municipal|Ahanta West Municipal", "effia Kwesimintsim Municipal|Effia Kwesimintsim Municipal","ellembele|Ellembele", "jomoro Municipal|Jomoro Municipal", "mpohor|Mpohor", "nzema East Municipal|Nzema East Municipal", "prestea-Huni Valley Municipal|Prestea-Huni Valley Municipal", "sekondi Takoradi Metropolitan|Sekondi Takoradi Metropolitan", "shama|Shama","tarkwa Nsuaem Municipal|Tarkwa Nsuaem Municipal","wassa Amenfi Central|Wassa Amenfi Central","wassa Amenfi East Municipal|Wassa Amenfi East Municipal","wassa Amenfi West Municipal|Wassa Amenfi West Municipal","wassa East|Wassa East"];

   }
   else if (s1.value=="Volta Region"){
    var optionArray=["adaklu|Adaklu", "afadzato South|Afadzato South","agotime Ziope|Agotime Ziope", "akatsi South|Akatsi South", "akatsi North|Akatsi North", "anloga|Anloga", "central Tongu|Central Tongu", "ho Municipal|Ho Municipal", "ho West|Ho West","hohoe Municipal|Hohoe Municipal","keta Municipal|Keta Municipal","ketu North Municipal|Ketu North Municipal","ketu South Municipal|Ketu South Municipal","kpando Municipal|Kpando Municipal","north Dayi|North Dayi","north Tongu|North Tongu","south Dayi|South Dayi","south Tongu|South Tongu"];

   }
   else if (s1.value=="Upper West Region"){
   	var optionArray=["daffiama Bussie Issa|Daffiama Bussie Issa", "jirapa Municipal|Jirapa Municipal","lambussie Karni|Lambussie Karni", "lawra Municipal|Lawra Municipal", "nadowli-Kaleo|Nadowli-Kaleo", "nandom|Nandom", "sissala East Municipal|Sissala East Municipal", "sissala West|Sissala West", "wa East|Wa East","wa Municipal|Wa Municipal","wa West|Wa West"];
   }
   else if (s1.value=="Upper East Region"){
   	var optionArray=["bawku Municipal|Bawku Municipal", "bawku West|Bawku West","binduri|Binduri", "bolgatanga East|Bolgatanga East", "bolgatanga Municipal|Bolgatanga Municipal", "bongo|Bongo", "builsa North|Builsa North", "builsa South|Builsa South","garu|Garu","kassena Nankana East|Kassena Nankana East","kassena Nankana West|Kassena Nankana West","nabdam|Nabdam","pusiga|Pusiga","talensi|Talensi","tempane|Tempane"];
   }
   else if (s1.value=="Savannah Region"){
   	var optionArray=["bole|Bole", "central Gonja|Central Gonja","east Gonja Municipal|East Gonja Municipal", "north East Gonja|North East Gonja", "north Gonja|North Gonja", "sawla-Tuna-Kalba|Sawla-Tuna-Kalba", "west Gonja|West Gonja"];
   }
   else if (s1.value=="Oti Region"){
   	var optionArray=["biakoye|Biakoye", "jasikan|Jasikan","kadjebi|Kadjebi", "krachi East Municipal|Krachi East Municipal", "krachi Nchumuru|Krachi Nchumuru", "krachi West|Krachi West", "nkwanta North|Nkwanta North", "nkwanta South Municipal|Nkwanta South Municipal"];
   }
   else if (s1.value=="Northern Region"){
   	var optionArray=["gushegu Municipal|Gushegu Municipal", "karaga|Karaga","Kpandai|Kpandai", "kumbungu|Kumbungu", "mion|Mion", "nanton|Nanton", "nanumba North Municipal|Nanumba North Municipal", "nanumba South|Nanumba South","saboba|Saboba","sagnarigu Municipal|Sagnarigu Municipal","savelugu Municipal|Savelugu Municipal","tamale Metropolitan|Tamale Metropolitan","tatale-Sangule|Tatale-Sangule","tolon|Tolon","yendi Municipal|Yendi Municipal","zabzugu|Zabzugu"];
   }
   else if (s1.value=="North East Region"){
   	var optionArray=["bunkpurugu Nakpanduri|Bunkpurugu Nakpanduri", "chereponi|Chereponi","east Mamprusi Municipal|East Mamprusi Municipal", "mamprugo Moagduri|Mamprugo Moagduri", "west Mamprusi Municipal|West Mamprusi Municipal", "yendi Municipal|Yendi Municipal", "yunyoo-Nasuan|Yunyoo-Nasuan"];
   }
   else if (s1.value=="Central Region"){
   	var optionArray=["abura-Asebu-Kwamankese|Abura-Asebu-Kwamankese", "agona East|Agona East","agona West Municipal|Agona West Municipal", "ajumako-Enyan-Essiam|Ajumako-Enyan-Essiam", "asikuma-Odoben-Brakwa|Asikuma-Odoben-Brakwa", "assin Central Municipal|Assin Central Municipal", "assin North|Assin North", "assin South|Assin South","awutu Senya East|Awutu Senya East","awutu Senya West|Awutu Senya West","cape Coast Metropolitan|Cape Coast Metropolitan","effutu Municipal|Effutu Municipal","ekumfi|Ekumfi","gomoa East|Gomoa East","gomoa West|Gomoa West","komenda-Edina-Eguafo-Abirem Municipal|Komenda-Edina-Eguafo-Abirem Municipal","mfantseman Municipal|Mfantseman Municipal","twifo Atti Morkwa|Twifo Atti Morkwa","twifo Hemang Lower Denkyira|Twifo Hemang Lower Denkyira","upper Denkyira East Municipal|Upper Denkyira East Municipal","upper Denkyira West|Upper Denkyira West"];
   }
   else if(s1.value=="Eastern Region"){
   	var optionArray=["abuakwa North Municipal|Abuakwa North Municipal", "abuakwa South Municipal|Abuakwa South Municipal","achiase District|Achiase District", "akuapim North Municipal|Akuapim North Municipal", "akuapim South|Akuapim South", "akyemansa|Akyemansa", "asene Manso Akroso|Asene Manso Akroso", "asuogyaman|Asuogyaman","atiwa West|Atiwa West","atiwa East|Atiwa East","ayensuano|Ayensuano","birim Central Municipal|Birim Central Municipal","birim North|Birim North","birim South|Birim South","denkyembour|Denkyembour","fanteakwa North|Fanteakwa North","fanteakwa South|Fanteakwa South","kwaebibirem Municipal|Kwaebibirem Municipal","kwahu Afram Plains North|Kwahu Afram Plains North","kwahu Afram Plains South|Kwahu Afram Plains South","kwahu East|Kwahu East","kwahu South|Kwahu South","kwahu West Municipal|Kwahu West Municipal","lower Manya Krobo|Lower Manya Krobo","new Juaben South Municipal|New Juaben South Municipal","new Juaben North Municipal|New Juaben North Municipal","nsawam Adoagyiri Municipal|Nsawam Adoagyiri Municipal","okere|Okere","Suhum|Suhum","upper Manya Krobo|Upper Manya Krobo","upper West Akim|Upper West Akim","west Akim Municipal|West Akim Municipal","yilo Krobo Municipal|Yilo Krobo Municipal"];
   }
   else if (s1.value=="Greater Accra Region"){
   	var optionArray=["|","ablekuma Central Municipal|Ablekuma Central Municipal", "ablekuma North Municipal|Ablekuma North Municipal","ablekuma West Municipal|Ablekuma West Municipal", "accra Metropolitan|Accra Metropolitan", "ada East|Ada East", "ada West|Ada West", "adentan Municipal|Adentan Municipal", "ashaiman Municipal|Ashaiman Municipal","ayawaso Central Municipal|Ayawaso Central Municipal","ayawaso East Municipal|Ayawaso East Municipal","ayawaso North Municipal|Ayawaso North Municipal","ayawaso West Municipal|Ayawaso West Municipal","ga East Municipal|Ga East Municipal","ga Central|Ga Central","ga North Municipal|Ga North Municipal","ga South Municipal|Ga South Municipal","ga West Municipal|Ga West Municipal","korle Klottey Municipal District|Korle Klottey Municipal District","kpone Katamanso Municipal|Kpone Katamanso Municipal","krowor Municipal|Krowor Municipal","la-Dade-Kotopon Municipal|La-Dade-Kotopon Municipal","la-Nkwantanang-Madina|La-Nkwantanang-Madina","ledzokuku Municipal|Ledzokuku Municipal","ningo-Prampram|Ningo-Prampram","okaikwei North Municipal|Okaikwei North Municipal","shai-Osudoku District|Shai-Osudoku District","tema Metropolitan|Tema Metropolitan","tema West Municipal|Tema West Municipal","weija Gbawe Municipal|Weija Gbawe Municipal"];
   }
   for(var option in optionArray){
   	var pair=optionArray[option].split("|");
   	var newOption=document.createElement("option");
   	newOption.value=pair[0];
   	newOption.innerHTML=pair[1];
   	s2.options.add(newOption);
   }
	    }
	$(document).ready(function(){
$("#submit").click(function(e){
e.preventDefault();
if ($("#email").val()==''){
		$("#emailError").html('*');

	}	
else if($("#password").val()=='')	{
	$("#passwordError").html('*');
}
else if($("#cpassword").val()=='')	{
	$("#cpasswordError").html('*');
}
else if ($("#password").val()!=$("#cpassword").val()){
	$("#cpassError").html("*");
	alert("sDFSDF");
}

else
{

	var form = $('#form-data')[0];
	        // FormData object 
			var data = new FormData(form);
			data.append("password_confirmation",$("#cpassword").val());
			data.append("password",$("#password").val() );
			data.append("email",$("#email").val());
			console.log($("#cpassword").val());
			console.log($("#password").val());

		
	$.ajax({
		url:('http://127.0.0.2:80/api/login'),
		contentType: false,
		processData: false,
		enctype: 'application/x-www-form-urlencoded',
		method:'post',
		dataType:'json',
		data: data,
		    success:function(response){	
				console.log(response.token);
				localStorage.setItem('token', response.token);
				para1.append("data1", $("#email").val());
       			location.href = "index3.html"+"?" +  para1.toString(); 
        alert("Success");
	
            //  $("#form-data")[0].reset();
		       },error:function(jqXhr, textStatus, errorThrown){
             alert("Invalid Credentials")
						 console.log(jqXhr.responseText);
						 console.log("ERROR");
						 console.log(form);
					 }
	});
	
}
});

	});
</script>



</body>
</html>
