@if(isset($newContactAlertMessage) || false)
<div id="myAlerts">
  @if(isset($newContactAlertMessage))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <div class="container">
      <div class="d-flex">
        <div class="mr-auto"><i class="fa fa-info-circle" aria-hidden="true"></i> {{$newContactAlertMessage}}</div>
        <div class="pl-2 pr-2" style="position:relative">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding:0 !important">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  @endif
</div>
@endif

