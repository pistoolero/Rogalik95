@layout("layouts/app")
@section('title')
  Strona główna
@endsection
@section('content')
<h2 class="h2-responsive text-center text-uppercase white-text"><strong>Najnowszy film</strong></h2><hr />
<div class="d-flex justify-content-center elegant-color-dark white-text">

<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IyX_HNcOanI" allowfullscreen></iframe>
</div>
</div>

@endsection
