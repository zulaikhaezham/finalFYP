<!DOCTYPE html>
<html lang="zxx">

<head>
      <title>{{ config('app.name','FYPcuba')}}</title>
    <!-- Meta tag Keywords -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Merged Forms Page Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
    <link rel="stylesheet" href="{{URL::asset('css/admin.css')}}" type="text/css" media="all" /><!-- Style-CSS -->

    
   <!-- Web-Fonts -->
  <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">
  <!-- //Web-Fonts -->

</head>
<body>
<section class="form-26">
    <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="/">IIUM Vehicle Registration System</a>
          <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav" >
                <li class="nav-item" style="">
                    <a class="dropdown-item" href="{{ route('logout') }}" style=""
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" >
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                        @csrf
                    </form>
                </li>
            </ul>  
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('adminsstudent.showstudent') }}">Student <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('admins.show') }}">Staff</a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('adminscontractor.showcontractor') }}">Contractor</a>
                  </li>
                </ul>
          
                <div></div>
                <div></div>
              </div>
        </a>
          </div>  
        </div>  
    </nav>

    <div class="form-26-mian">
        <div class="layer">   
            
            @yield('content')
        
        </div>  
    </div>


    <nav class="navbar navbar-expand-sm navbar-dark bottom justify-content-center" 
        style="background-color:rgb(91, 90, 156);">
        <div class="copyright text-center">
            <p>© <?php echo date("Y");?> All rights reserved | Designed by Zu and Ina</p>
        </div>
    </nav>
</section>


</body>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>