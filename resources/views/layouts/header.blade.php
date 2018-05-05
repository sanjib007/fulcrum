<header class="header mb-15">
        <div class="logo">
            <a href="/"><img src="{{asset('assets/images/logo.png')}}" alt="FulCrum"></a>
        </div> <!-- logo -->
        <div class="search-box">
            <form action="#" class="form-search">
                <div class="form-group">
                    <i class="fas fa-search"></i>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </div> <!-- search-box -->
        <div class="main-nav">
            <ul class="nav-list">
     <li class="{{ Request::is('/') ? 'active' : ''  }}"><a href="/">Home</a></li>
       <li class="{{ Request::is('projects') ? 'active' : ''  }}"><a href="/projects">About</a></li>
      <li class="{{ Request::is('contact') ? 'active' : ''  }}"><a href="/contact">Contact</a></li>
             
            </ul>
        </div> <!-- main-nav -->
    </header> <!-- header -->