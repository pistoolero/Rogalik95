@layout('layouts/app')
@section('title')
    Licznik subów
@endsection
@section("content")
    <h2 class="h2-responsive text-center text-uppercase white-text"><strong>Licznik subów</strong></h2><hr />
    <div class="d-flex justify-content-center elegant-color-dark white-text">
        <span class="odometer subCount" style="font-size: 6em; font-family: 'Exo 2';"></span>
    </div>
@endsection