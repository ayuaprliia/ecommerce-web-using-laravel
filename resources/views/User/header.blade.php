   <!-- ***** Header Area Start ***** -->
   <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('redirect')}}" class="logo">
                            <img src="assets/images/havanalogo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('redirect')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('shoulder')}}">Shoulder Bag</a></li>
                            <li class="scroll-to-section"><a href="{{url('tote')}}">Tote Bag</a></li>
                            <li class="scroll-to-section"><a href="{{url('sling')}}">Sling Bag</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="{{url('products')}}">Products</a></li>
                                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="/#explore">Explore</a></li>

                            <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i></a></li>

                            <li class="scroll-to-section">
                            @if (Route::has('login'))
                            
                                @auth

                                    <x-app-layout>

                                    </x-app-layout>


                                @else
                                
                                <!-- <div class="login-b"> -->
                                    <li><a href="{{ route('login') }}" ><i class="login-button"></i>Log in</a></li>
                                <!-- </div> -->

                                    @if (Route::has('register'))
                                    <div class="register-b">
                                        <li><a href="{{ route('register') }}" > <i class="register-button"> Register</a></li>
                                    </div>
                                    @endif
                                @endauth

                        @endif
                    </li>

                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->