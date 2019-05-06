@extends('parent')

@section('content')
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div align="right">
                <a href="{{ route('crud.index') }}" class="btn btn-default">terug naar medewerkers</a>
            </div>
            <br />
     <form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group">
       <label class="col-md-4 text-right">vul hier je voornaam in</label>
       <div class="col-md-8">
        <input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">vul hier je achternaam in</label>
       <div class="col-md-8">
        <input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Selecteer je Profiel foto</label>
       <div class="col-md-8">
        <input type="file" name="image" />
        <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
        <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
        <br />
        <br />
        <br />
      <div class="form-group">
       <label class="col-md-4 text-right">voeg een nieuwe functie in</label>
       <div class="col-md-8">
       <select name="function" form="function" value="{{ $data->function }}">        
        <option value="Programmeur">Programmeur</option>
        <option value="Sales">Sales</option>
        <option value="Ceo">Ceo</option>
        <option value="Manager">Manager</option>
       </select>
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">voeg een nieuw contract in</label>
       <div class="col-md-8">
        <select name="contract" form="contract" value="{{ $data->contract }}">        
        <option value="0 uren">o uren</option>
        <option value="1 jaar">1 jaar</option>
        <option value="2 tot 3 jaar">2 tot 3 jaar</option>
        <option value="vast">Vast</option>
    </select>
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="updaten" />
      </div>
     </form>

@endsection