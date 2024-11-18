
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href={{ route('app_home')}}> {{config('app.name')}} </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link" @if ( Request::route()->getName() == 'app_about')active  @endif
                   aria-current="page" href={{ route('app_about')}}>about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" @if ( Request::route()->getName() == 'app_dashbroad')active  @endif
                   aria-current="page" href={{ route('app_dashbroad')}}>dasbroad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  @if ( Request::route()->getName() == 'app_info')active @endif
             href={{ route('app_info')}}>info
            </a>
          </li>
        </ul>
        <div class="dropdown">
            <button>My Acoumt</button>
            <div class="dropdown-content">
            <a href={{ route('app_login')}}>login</a>
            <a href={{ route('app_register')}}>register</a>
            </div>
            <script>
            .dropdown {
                display: inline-block;
                position: relative;
              }
              .dropdown-content {
                display: none;
                position: absolute;
                width: 100%;
                overflow: auto;
                box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
              }
              .dropdown:hover .dropdown-content {
                display: block;
              }
              .dropdown-content a {
                display: block;
                color: #000000;
                padding: 5px;
                text-decoration: none;
              }
              .dropdown-content a:hover {
                color: #FFFFFF;
                background-color: #00A4BD;
              }
          </div>
      </div>
    </div>
  </nav>
