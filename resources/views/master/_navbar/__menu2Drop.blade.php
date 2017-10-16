@foreach ($menu2_links as $link_text => $link_url)
<a class="dropdown-item" href="{{ $link_url }}">{{ $link_text }}</a>
@endforeach