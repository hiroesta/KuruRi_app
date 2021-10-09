@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header  text-white bg-dark">サークル名：{{$group->name}}</div>

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
            <li>
              サークル会員:<a href="{{ route('memberList',$group->id,false) }}">表示する</a>
          </ul>
          @if(Auth::id() == $group->master_id)
          <button class="btn btn-primary btn-sm">
            <a  style="color: white;text-decoration: none;"  href="{{route('group_edit',Auth::id(),false)}}">編集</a>
          </button>
          <button class="btn btn-primary btn-sm">
            <a style="color: white;text-decoration: none;" href="{{route('group_info_create',$group->id,false)}}">お知らせを作成</a>
          </button>
          @endif
          @if($user->group_id == $group->id)
          <button class="btn btn-primary btn-sm">
            <a style="color: white;text-decoration: none;" href="{{route('group_info',$group->id,false)}}">お知らせを見る</a>
          </button>
          @else
          <button class="btn btn-primary btn-sm">
            <a style="color: white;text-decoration: none;" href="{{route('group_entry',$group->id,false)}}">加入する</a>
          </button>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection