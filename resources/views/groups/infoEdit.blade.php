@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header  text-white bg-dark">お知らせ編集画面</div>

        <div class="card-body">
        @if(Session::has('message'))
        <div>変更しました</div>
        <button><a href="{{route('home')}}">ホームに戻る</a></button>
        @else
        <form method="POST" action="{{ route('group_info_update',$info->id,false) }}">
          @csrf
            <div>
             お知らせ：<input id="content" name='content' value="{{$info->content}}">
            </div>

            <button type="submit" class="btn btn-primary btn-sm">変更</button>
        </form>
        @endif
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection