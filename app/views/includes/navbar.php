<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" role="navigation">
  <div class="container">
    <a class="navbar-brand" href="<?=URL_ROOT?>/"><?=SITE_NAME?></a>
    <button type="button" class="navbar-toggler border-0" data-toggle="offcanvas" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse bg-light" id="navbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="<?=URL_ROOT?>/">Home</a> </li>
        <li class="nav-item"><a class="nav-link" href="<?=URL_ROOT?>/about">About</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Posts</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?=URL_ROOT?>/post/1">Post 1</a>
            <a class="dropdown-item" href="<?=URL_ROOT?>/post/2">Post 2</a>
            <a class="dropdown-item" href="<?=URL_ROOT?>/post/3">Post 3</a>
            <a class="dropdown-item" href="<?=URL_ROOT?>/post/4">Post 4</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
