@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Register') }}</div>

        <div class="card-body">
          <form method="POST" action="{{route('group_create')}}">
            @csrf

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Group Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="information" class="col-md-4 col-form-label text-md-right">{{ __('Group Information') }}</label>

              <div class="col-md-6">
                <input id="information" type="textarea" class="form-control @error('information') is-invalid @enderror" name="information" value="{{ old('information') }}">

                @error('information')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Select the Group Category') }}</label>

              <div class="col-md-6">
                <select name="categories" id="categories" value="">
                  <?php
                  foreach($categories as $category){
                    print('<option id="category" type value="'.$category->id.'">'.$category->name.'</option>'); 
                  }
                  ?>
                </select>
            </div>

            <div class="form-group row">
            <div class="form-group row mb-6">
              <div class="col-md-4 offset-md-4">
                <button type="submit">
                  <a href="{{route('group_create')}}">{{ __('Register') }}</a>
                </button>
              </div>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection