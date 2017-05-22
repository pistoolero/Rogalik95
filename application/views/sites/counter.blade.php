@layout('layouts/app')
@section('title')
    Licznik subów
@endsection
@section("content")
    <h1 class="h1-responsive text-center text-uppercase white-text mb-3 text-shadow"><strong>Licznik subów</strong></h1><hr />
    <div class="d-flex justify-content-center white-text">
        <span class="odometer subCount mb-5"></span>
    </div>
@endsection
@section('video-bg')
    <div class="counter-bg"></div>
@endsection