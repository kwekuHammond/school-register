<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div class="container-fluid">
  <a class="navbar-brand" href="/">
      <img src="{{asset('images/cl_logo.png')}}" alt="" width="35" height="20" class="d-inline-block align-text-top">
      <b> SCHOOL REGISTER</b>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Features
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Register Pupil</a></li>
            <li><a class="dropdown-item" href="#">Register Staff</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
      @auth
        <div class="d-flex" role="search">
            <span> Welcome  <b> {{ auth()->user()->fullname}}</b></span>
        </div>

        <div class="d-flex pr-5">
            <form method="POST" action="/logout">
            @csrf <!--  prevents cross site scripting attacks -->
                @method('post')
                <button type="submit" class="btn btn-sm btn-danger"> Logout </button>
            </form>
            <!-- <a href="/logout" class="btn btn-sm btn-danger"> Logout</a> -->
        </div>
      @endauth

    </div>
  </div>
</nav>
