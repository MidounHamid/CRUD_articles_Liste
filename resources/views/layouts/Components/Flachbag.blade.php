@if (session()->has("success"))
<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
        <use xlink:href="#check-circle-fill"/>
    </svg>
    <div>
        {{session("success")}}
    </div>
  </div>

@endif
@if (session()->has("update"))
<div class="alert alert-primary d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
        <use xlink:href="#check-circle-fill"/>
    </svg>
    <div>
        {{session("update")}}
    </div>
  </div>

@endif
@if (session()->has("destroy"))
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="danger:">
        <use xlink:href="#check-circle-fill"/>
    </svg>
    <div>
        {{session("destroy")}}
    </div>
  </div>

@endif
