<header class="banner">
  <div class="container-fluid">
    <nav class="nav-primary">
      @if (has_nav_menu('main_nav'))
        <nav class="navbar navbar-expand-md navbar-light bg-faded">
          <a class="navbar-brand" href="#">
            <img src="@asset('images/White.png')" alt="Simple Practice Logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><div></div></span>
          </button>
          <?php
          wp_nav_menu([
            'menu'            => 'main_nav',
            'theme_location'  => 'main_nav',
            'container'       => 'div',
            'container_id'    => 'bs4navbar',
            'container_class' => 'collapse navbar-collapse',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
          ]);
          ?>
        </nav>
      @endif
    </nav>
  </div>
</header>
