<h3>Office</h3>
<div class="hue-example">
  <address>
    <strong>{{ $contact_company }}</strong><br>
    {{ $contact_address1 }}<br>
    {{ $contact_address2 }}<br>
    <abbr title="Phone"><i class="fa fa-phone fa-fw" aria-hidden="true"></i></abbr> {{ $contact_phone }}
  </address>
  <address>
    <strong>{{ $contact_person }}</strong><br>
    <a href="mailto:{{ $contact_mail }}"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> {{ $contact_mail }}</a>
  </address>
</div>