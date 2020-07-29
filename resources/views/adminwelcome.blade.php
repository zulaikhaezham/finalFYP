@extends('layouts.app1')

@section('content')

  <!-- /form-26-section -->
  <section class="form-26">
    <div class="form-26-mian">
      <div class="layer">
          <div class="wrapper">
              <div class="form-inner-cont">
                  <div class="forms-26-info">
                      <h2>IIUM Vehicle Registration System 2</h2>
                      <p>Apply Your Sticker Now!</p>
                  </div>

                  <div class="form-right-inf">
                      
                      <!--   Admin-->
                      @guest('admin') 
                        <form action="{{route('admins.login_form')}}">      <!-- to get to admin login -->
                            
                              <div class="form-input editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">
                                <button class="btn" data-selector="a.btn, button.btn" style="outline: none; cursor: inherit;">
                                {{ __('Login As Admin') }}</button>
                              </div>
                        </form>
                      @endguest
                      @auth('admin')
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                  {{ __('Logout as Admin') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                      @endauth

                  </div>
              </div>
              
              <div class="copyright text-center" style="margin-top: 240px;">
                <p>© <?php echo date("Y");?> All rights reserved | Designed by Zu and Ina</p>
              </div>

          </div>
      </div>
    </div>
  </section>

@endsection
