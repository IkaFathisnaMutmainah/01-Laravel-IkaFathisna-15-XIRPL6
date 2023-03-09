<aside class="menu-sidebar d-none d-lg-block" style="background-color: red">

            <div class="logo">
                <a href="#">
                    <img src="{{asset('images/logo flytion.png')}}" alt="Logo Library" style='width:180px;'/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1" >
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list" >
                        <li class="active has-sub">
                            
                        
                        <!-- <li>
                            <a href="{{ route ('contacts.index')}}">
                                <i class="fas fa-chart-bar"></i>Data Contact Us</a>
                        </li> -->
                        <li >
                            <a href="{{ route ('bukus.index')}}" style=" background-color: red; color:#ffffff">
                                <i class="fas fa-chart-bar" ></i>Dashboard Buku</a>
                        </li>
                        <li >
                            <a href="{{ route ('bukus.create')}}" style=" background-color: red; color:#ffffff">
                                <i class="far fa-check-square" ></i>Tambah Buku</a>
                        </li>
                        <!-- <li>
                            <a href="{{ route ('gallery.create')}}">
                                <i class="fa fa-picture-o"></i>Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route ('gallery.tambah')}}">
                                <i class="far fa-check-square"></i>View Gallery</a>
                        </li> -->
                        </li>
                        
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>