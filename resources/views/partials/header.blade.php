<header class="header-desktop">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap" >
                                    <div class="account-item clearfix js-item-menu" >
                                        <div class="image">
                                            <img src="{{asset('images/stormy.jfif')}}" alt="{{ Auth::user()->name }}" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown" style="background-color: red">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('images/stormy.jfif')}}" alt="{{ Auth::user()->name }}" />
                                                    </a>
                                                </div>
                                                <div class="content" style="background-color: red">
                                                    <h5 class="name">
                                                        <a href="#" style="color: #ffffff">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email" style="color: #ffffff">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer" style="background-color: red">
                                            <a class="dropdown-item" href="{{ route('logout') }}" style="color: #ffffff"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>