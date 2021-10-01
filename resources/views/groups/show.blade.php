@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">サークル名：‥{{$group->name}}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <ul>
            <li>
              サークル番号：{{$group->id}}
            </li>
            <li>
              サークルの種類：{{$category->name}}
            </li>
            <li>
              サークル紹介文：{{$group->information}}
            </li>
          </ul>
          <button>
            <a href="{{route('group_edit',Auth::id(),false)}}">編集</a>
          </button>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection