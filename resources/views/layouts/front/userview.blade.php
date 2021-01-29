<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="{{ asset('/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('/dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('dashbaord/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dashboard/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
  body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
}
  .palel-primary
	{
		border-color: #bce8f1;
	}
	.panel-primary>.panel-heading
	{
		background:#bce8f1;
		
	}
	.panel-primary>.panel-body
	{
		background-color: #EDEDED;
	}

  
  .box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}


 .box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
   }


   .box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
    } 

    .box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}

.box-body > .table {
    margin-bottom:10px;
    margin-left:20px;

    margin-top:10px;
}
.table-bordered {
    border: 1px solid #f4f4f4;
}


.table {
    width: 97%;
    max-width: 100%;
    margin-bottom: 20px;
}
table {
    background-color: transparent;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}

.pagination > li {
    display: inline;
}

.pagination-sm > li:first-child > a, .pagination-sm > li:first-child > span {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}
.pagination > li:first-child > a, .pagination > li:first-child > span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
.pagination > li > a {
    background: #fafafa;
    color: #666;
}
.pagination-sm > li > a, .pagination-sm > li > span {
    padding: 5px 10px;
    font-size: 14px;
    line-height: 1.5;
}
.pagination > li > a, .pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
}

.pull-right {
    float: right !important;
}

  </style>
  
</head>
<script>
$(document).ready(function(){
		$flag=1;
    	$("#myName").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_name").text("* You have to enter your first name!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_name").text("");

        	}
       });
        $("#lastname").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_lastname").text("* You have to enter your Last name!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_lastname").text("");
        	}
       });
        $("#dob").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_dob").text("* You have to enter your Date of Birth!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_dob").text("");
        	}
       });
        $("#gender").focusout(function(){
        	$(this).css("border-color", "#2eb82e");
       
       });
        $("#age").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_age").text("* You have to enter your Age!");
        	}
        	else
        	{
        		$(this).css({"border-color":"#2eb82e"});
        		$('#submit').attr('disabled',false);
        		$("#error_age").text("");

        	}
        	});
        $("#phone").focusout(function(){
            $pho =$("#phone").val();
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* You have to enter your Phone Number!");
        	}
        	else if ($pho.length!=10)
        	{   
                    $(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* Lenght of Phone Number Should Be Ten");
        	}
        	else if(!$.isNumeric($pho))
        	{
        	        $(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* Phone Number Should Be Numeric");  
        	}
        	else{
        		$(this).css({"border-color":"#2eb82e"});
        		$('#submit').attr('disabled',false);
        		$("#error_phone").text("");
        	}

    	});

   		$( "#submit" ).click(function() {
   			if($("#myName" ).val()=='')
   			{
        		$("#myName").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_name").text("* You have to enter your first name!");
        	}
        	if($("#lastname" ).val()=='')
   			{
        		$("#lastname").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_lastname").text("* You have to enter your Last name!");
        	}
   			if($("#dob" ).val()=='')
   			{
        		$("#dob").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_dob").text("* You have to enter your Date of Birth!");
        	}
   			if($("#age" ).val()=='')
   			{
        		$("#age").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_age").text("* You have to enter your Age!");
        	}
        	if($("#phone" ).val()=='')
   			{
        		$("#phone").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_phone").text("* You have to enter your Phone Number!");
        	}
			});


    	
	});
</script>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">


        <a href="{{ URL::to('home') }}" class="nav-link">Home</a>

      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <a href="" class="brand-link">

    

      <img src="{{url('/dashboard/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('/dashboard/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ URL::to('home') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              
            </ul>
       
 
            <li class="nav-item has-treeview">
            <a href="{{ route('myaccount.index') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              MyAccount
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            </li>

           <li class="nav-item has-treeview">
         
             <a  class="nav-link"
             onclick="submitForm()" style="cursor:pointer">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               {{ __('Logout') }}
              
              </p>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
             </form>
             </a>
           </li>
      
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-12">

          
          @yield('content')      
  

          </div><!-- /.col -->
     
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   
  <script>
   function submitForm(){
     if(confirm("Are you sure you want to logout?")){
        document.getElementById('logout-form').submit();
     }
    
   }
  </script>
    
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('/dashboard/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/dashboard/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('dashboard/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('dashboard/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('dashboard/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('dashboard/plugins/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('dashboard/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dashboard/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dashboard/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dashboard/dist/js/demo.js')}}"></script>



</body>
</html>
