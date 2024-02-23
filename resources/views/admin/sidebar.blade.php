<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/adminhome') }}">
      <div class="sidebar-brand-icon">
        <img src="admin/img/logo/logo2.png">
      </div>
      <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="far fa-fw fa-window-maximize"></i>
        <span>Home info</span>
      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Home info</h6>
          <a class="collapse-item" href="{{ url('addhomeinfo') }}">Add Home info</a>
          <a class="collapse-item" href="{{ url('viewhomeinfo') }}">View Home info</a>

        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
        aria-controls="collapseForm">
        <i class="fab fa-fw fa-wpforms"></i>
        <span>About info</span>
      </a>
      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">About info</h6>
          <a class="collapse-item" href="{{ url('addaboutinfo') }}">Add About info</a>
          <a class="collapse-item" href="{{ url('viewaboutinfo') }}">View About info</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
        aria-controls="collapseTable">
        <i class="fas fa-fw fa-table"></i>
        <span>Experience info</span>
      </a>
      <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Experience info</h6>
          <a class="collapse-item" href="{{ url('addexperienceinfo') }}">Add Experience info</a>
          <a class="collapse-item" href="{{ url('showexperienceinfo') }}">View Experience info</a>
        </div>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEducation" aria-expanded="true"
        aria-controls="collapseEducation">
        <i class="fas fa-fw fa-table"></i>
        <span>Education info</span>
      </a>
      <div id="collapseEducation" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Education info</h6>
          <a class="collapse-item" href="{{ url('addeducationinfo') }}">Add Education info</a>
          <a class="collapse-item" href="{{ url('showeducationinfo') }}">View Education info</a>
        </div>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSkills" aria-expanded="true"
        aria-controls="collapseSkills">
        <i class="fas fa-fw fa-table"></i>
        <span>Skills info</span>
      </a>
      <div id="collapseSkills" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Experience info</h6>
          <a class="collapse-item" href="{{ url('addskillinfo') }}">Add Skills info</a>
          <a class="collapse-item" href="{{ url('showskillinfo') }}">View Skills info</a>
        </div>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseService" aria-expanded="true"
        aria-controls="collapseService">
        <i class="fas fa-fw fa-table"></i>
        <span>Service info</span>
      </a>
      <div id="collapseService" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Service info</h6>
          <a class="collapse-item" href="{{ url('addserviceinfo') }}">Add Service info</a>
          <a class="collapse-item" href="{{ url('showserviceinfo') }}">View Service info</a>
        </div>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProject" aria-expanded="true"
        aria-controls="collapseProject">
        <i class="fas fa-fw fa-table"></i>
        <span>Project info</span>
      </a>
      <div id="collapseProject" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Project info</h6>
          <a class="collapse-item" href="{{ url('addprojectinfo') }}">Add Project info</a>
          <a class="collapse-item" href="{{ url('showprojectinfo') }}">View Project info</a>
        </div>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClint" aria-expanded="true"
        aria-controls="collapseClint">
        <i class="fas fa-fw fa-table"></i>
        <span>Clints info</span>
      </a>
      <div id="collapseClint" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Clint info</h6>
          <a class="collapse-item" href="{{ url('addclientinfo') }}">Add Clint info</a>
          <a class="collapse-item" href="{{ url('showclientinfo') }}">View Clint info</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true"
        aria-controls="collapseBlog">
        <i class="fas fa-fw fa-table"></i>
        <span>Blog info</span>
      </a>
      <div id="collapseBlog" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Experience info</h6>
          <a class="collapse-item" href="{{ url('addbloginfo') }}">Add Blog info</a>
          <a class="collapse-item" href="{{ url('showbloginfo') }}">View Blog info</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true"
        aria-controls="collapseBlog">
        <i class="fas fa-fw fa-table"></i>
        <span>Contact info</span>
      </a>
      <div id="collapseBlog" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Contact info</h6>

          <a class="collapse-item" href="{{ url('showcontactinfo') }}">View Blog info</a>
        </div>
      </div>
    </li>





    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Examples
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
        aria-controls="collapsePage">
        <i class="fas fa-fw fa-columns"></i>
        <span>User</span>
      </a>
      <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">User Pages</h6>
          <a class="collapse-item" href="login.html">Login</a>
          <a class="collapse-item" href="register.html">Register</a>
          <a class="collapse-item" href="404.html">404 Page</a>
          <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
      </div>
    </li>

    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
  </ul>
