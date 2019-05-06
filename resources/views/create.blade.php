@extends('parent')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<div align="right">
 <a href="{{ route('crud.index') }}" class="btn btn-default">ga naar medewerkers pagina</a>
  
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

 @csrf
 <div class="form-group">
  <label class="col-md-4 text-right">vul hier je voornaam in</label>
  <div class="col-md-8">
   <input type="text" name="first_name" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">vul hier je achterrnaam in </label>
  <div class="col-md-8">
   <input type="text" name="last_name" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Selecteer je Profiel foto</label>
  <div class="col-md-8">
   <input type="file" name="image" />
    </div>
    </div>
      <br />
      <br />
      <br />
 <div class="form-group">
       <label class="col-md-4 text-right">voeg een nieuwe functie in</label>
       <div class="col-md-8">
       <select name="function" form="function">        
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
        <select name="contract" form="contract">        
        <option value="0 uren">o uren</option>
        <option value="1 jaar">1 jaar</option>
        <option value="2 tot 3 jaar">2 tot 3 jaar</option>
        <option value="vast">Vast</option>
    </select>
       </div>
      </div>
 <br /><br /><br />
 <div class="form-group text-center">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="toevoegen" />
 </div>

</form>

@endsection