
<div id="app">
<nav class="navbar navbar-expand-md navbar-green bg-success">

  <a class="navbar-brand" href="/"><i class="far fa-sticky-note mr-1"></i>Cosmopoly</a>

  <ul class="navbar-nav ml-auto">

    

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
                onclick="location.href=''">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="">
    </form>
    <!-- Dropdown -->

  </ul>

</nav>
</div>
