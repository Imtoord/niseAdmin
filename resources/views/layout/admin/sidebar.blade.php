<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Admins</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a href="{{ route('organization.index') }}" class="nav-link {{ $route == 'organization' ? 'active' : 'collapsed' }}" data-bs-target="#components-nav">
          <i class="bi bi-menu-button-wide"></i><span>Organization</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a href="{{ route('category.index') }}" class="nav-link {{ $route == 'category' ? 'active' : 'collapsed' }}" data-bs-target="#forms-nav">
          <i class="bi bi-journal-text"></i><span>Category</span>
        </a>
      </li><!-- End Forms Nav -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->



    </ul>

</aside>

<!-- End Sidebar-->
