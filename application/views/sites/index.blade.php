@layout("layouts/app")
@section('title')
  Strona główna
@endsection
@section('content')
<h2 class="h2-responsive text-center text-uppercase white-text"><strong id="videoTitle"></strong></h2><hr />
<div class="d-flex justify-content-center elegant-color-dark white-text">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" id="newestVideo" src="" allowfullscreen></iframe>
    </div>
</div>
<div class="col-md-12 mt-2 p-0 white-text cursor-default">
    <div class="row">
    <div class="col-md-4 mr-0"><i class="text-success fa fa-fw fa-thumbs-up mr-1"></i><span class="odometer thumbsUp mr-3"></span>
    <i class="text-danger fa fa-fw fa-thumbs-down mr-1"></i><span class="odometer thumbsDown mr-3"></span>
    <i class="text-info fa fa-fw fa-comments mr-1"></i>&nbsp;<span class="odometer comments"></span></div>
    <div class="col-md-4 push-7 ml-0 p-0"><i class="text-info fa fa-fw fa-eye mr-2"></i><span class="odometer views"></span></div>
    </div>
</div>
@endsection
