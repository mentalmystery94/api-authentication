@extends('parent')

@section('content')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('crud.index') }}" class="btn btn-default">terug naar medewerkers pagina</a>
 </div>
 <br />
 <h3>ID - {{ $data->first_name }} </h3>
 <img src="{{ URL::to('/crud.show') }}/image/{{ $data->images }}" class="img-thumbnail" />
 <h3>Voornaam - {{ $data->first_name }} </h3>
 <h3>Achternaam - {{ $data->last_name }}</h3>
 <h3>Functie - {{ $data->function }}</h3>
 <h3>Contract - {{ $data->contract }}</h3>
</div>
@endsection
