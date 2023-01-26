<header style="">
     <div class="header-top-wrapper">
         <div class="wrapper-container">
             <div class="header-top-bar d-flex justify-content-between align-items-center">
                 <a href="{{ url('/') }}">
                     <img src="/{{ $site_info->logo }}" alt="" style="">
                 </a>
                 <div id="search" class="search-bar">
                     <input type="text" name="search" value="" placeholder="Search for products">
                     <button class="fa fa-search-plus search_plus" aria-hidden="true"></button>
                 </div>
                  <div class="top-nav-right d-flex">
                      @if(Route::has('login'))

                          @auth
                              <div class="btn-group">
                                  <button type="button" class="btn login-reg dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #006cb4">
                                      <i class="fa-solid fa-lock"></i> Log out / Profile
                                  </button>
                                  <ul class="dropdown-menu text-center dropdown-menu-end">
                                      <a href="#" class="btn login-reg btn-default btn-flat float-right btn btn-info text-white"
                                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                          <i class="fa-solid fa-right-from-bracket"></i> Log out
                                      </a>
                                      <li><hr class="dropdown-divider"></li>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>

                                      <a href="{{ route('login') }}" class="btn login-reg btn-primary" style="margin-right: 10px;"><i class="fa fa-sign-in"></i><span> Profile</span></a>

                                  </ul>
                              </div>

                          @else
                              <div class="d-flex">
                                  <a href="{{ route('login') }}" class="btn login-reg text-white" style="margin-right: 10px; background-color: #ff4444"><i class="fa fa-sign-in"></i><span> Login</span></a>
                                  {{--<a href="{{ route('register') }}" class="btn btn-sm login-reg text-white text-white" style="background-color: #ff4444"><i class="fa fa-tag" aria-hidden="true"></i><span> Register</span></a>--}}
                              </div>
                          @endauth

                      @endif

                    </div>
                 <div class="overlay-bg login-popup"></div>
             </div>
         </div>
     </div>
 </header>


