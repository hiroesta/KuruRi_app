@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        @if(Session::has('message'))
        <div>変更しました</div>
        <button><a href="{{route('home')}}">ホームに戻る</a></button>
        @else
        <form method="POST" action="http://localhost:8000/group/{id}/edit">
          @csrf
          <div>
            名前：<input type="text" name='name' value="{{ $group->name }}" />
          </div>
          <div>
            サークルの種類：<select name="category_id" id="categories" value="">
              @foreach($categories as $category)
              <option id="category" value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>

            <div>
              サークル紹介文：<input type="textarea" name='information' value="{{$group->information}}">
            </div>

            <button type="submit">変更</button>
        </form>
        @endif

      </div>
    </div>
  </div>
</div>
</div>
@endsection