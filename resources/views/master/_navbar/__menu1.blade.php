<ul class="navbar-nav mr-auto">
  @foreach ($menu1_links as $link_text => $link_url)
  <li class="nav-item">
    <a class="nav-link" href="{{ $link_url }}">{{ $link_text }}</a>
  </li>
  @endforeach
</ul>