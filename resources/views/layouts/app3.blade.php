<!DOCTYPE html>
<html lang="zxx">

<head>
      <title>{{ config('app.name','FYPcuba')}}</title>
    <!-- Meta tag Keywords -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{asset('//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Merged Forms Page Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    

    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('css/easy-responsive-tabs.css')}}" type="text/css" media="all" />

    <!-- Javascript function-CSS -->
    <script src="{{asset('js/jquery-2.2.3.min.js')}}">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('js/easy-responsive-tabs.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <script src="{{asset('js/creditly.js')}}"></script>
    <script>
        $(function () {
            var creditly = Creditly.initialize(
                '.creditly-wrapper .expiration-month-and-year',
                '.creditly-wrapper .credit-card-number',
                '.creditly-wrapper .security-code',
                '.creditly-wrapper .card-type');

            $(".creditly-card-form .submit").click(function (e) {
                e.preventDefault();
                var output = creditly.validate();
                if (output) {
                    // Your validated credit card output
                    console.log(output);
                }
            });
        });
    </script>

</head>

<body>
<section class="form-26">
    <nav class="navbar navbar-expand-md navbar-dark">
        <a class="navbar-brand" href="/">IIUM Vehicle Registration System</a>
        <div class="collapse navbar-collapse" id="menu" style="margin-left:900px;">
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
@include('sweetalert::alert')
</body>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>
