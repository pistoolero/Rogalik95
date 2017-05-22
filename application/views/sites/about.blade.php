@layout("layouts/app")
@section('title')
    O mnie
@endsection
@section('content')
    <h1 class="h1-responsive text-center text-uppercase white-text mb-3 text-shadow"><strong>O mnie</strong></h1>
    @if($this->ion_auth->logged_in() && $this->ion_auth->is_admin())
        <button type="button" id="edit_about" class="btn btn-sm btn-info"><i class="fa fa-fw fa-pencil"></i> Edytuj</button>
    @endif
    <hr />
    <div class="container white-text text-left" id="textarea">
        {{$about}}
    </div>
    @if($this->ion_auth->logged_in() && $this->ion_auth->is_admin())
        <button type="button" id="save_about" class="btn btn-sm btn-success"><i class="fa fa-fw fa-check"></i> Zapisz</button>
        <button type="button" id="cancel_about" class="btn btn-sm btn-danger text-right"><i class="fa fa-fw fa-times"></i> Anuluj</button>
    @endif
    <div style="height: 27vh" class="clearfix hidden-lg-down"></div>
    <div style="height: 37vh" class="clearfix hidden-lg-up"></div>

@endsection