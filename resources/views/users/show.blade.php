@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header  text-white bg-dark">{{$user->name}}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <ul>
            <li>
              会員番号：{{$user->id}}
            </li>
            <li>
              年齢：{{$user->age}}
            </li>
            <li>
              自己紹介文：{{$user->introduction}}
            </li>
          </ul>

          @if($userId == $user->id)
          <button class="btn btn-primary btn-sm">
            <a style="color: white; text-decoration: none;" href="{{route('edit',Auth::id(),false)}}">編集</a>
          </button>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection