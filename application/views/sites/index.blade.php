@layout("layouts/app")
@section('title')
  Strona główna
@endsection
@section('video-bg')
    <div class="video-bg"></div>
@endsection
@section('content')

<h2 class="h2-responsive text-center text-uppercase white-text text-shadow"><strong id="videoTitle"></strong></h2><hr class="z-depth-1 text-shadow" />
<div class="d-flex justify-content-center white-text">
    <div class="embed-responsive embed-responsive-16by9 z-depth-2">
        <iframe class="embed-responsive-item" id="newestVideo" src="" allowfullscreen></iframe>
    </div>
</div>
<div class="container-fluid mt-2 p-0 white-text cursor-default">
    <div class="row p-0">
            <div class="col-md-6"><i class="text-success fa fa-fw fa-thumbs-up mr-1"></i><span class="odometer thumbsUp mr-3 text-shadow"></span>
            <i class="text-danger fa fa-fw fa-thumbs-down mr-1"></i><span class="odometer thumbsDown mr-3  text-shadow"></span>
            <i class="text-info fa fa-fw fa-comments mr-1"></i>&nbsp;<span class="odometer comments text-shadow"></span></div>
            <div class="col-md-6 ml-auto text-right"><i class="text-info fa fa-fw fa-eye mr-2"></i><span class="odometer views text-shadow"></span></div>
    </div>
</div>

@endsection
