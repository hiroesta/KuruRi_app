@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header  text-white bg-dark">{{$user->name}}のプロフィール</div>

        @if(Session::has('message'))
        <div>変更しました</div>
        <button type="button" class="btn btn-primary"><a href="{{route('home')}}">ホームに戻る</a></button>
        @else
        <div class="card-body">
        <form method="POST" action="{{ route('user_update',Auth::id(),false) }}">
          @csrf
          <div>
            名前：<input type="text" name='name' value="{{ $user->name }}" />
          </div>
          <div>
            年齢：<select name="age" id="age" value="{{$user->age}}">
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
            </select>
          </div>

          <div>
            自己紹介文：<input type="textarea" name='introduction' value="{{$user->introduction}}">
          </div>

          <button type="submit"class="btn btn-primary btn-sm">変更</button>
        </form>
      </div>
        @endif
        
        
      </div>
    </div>
  </div>
</div>
</div>
@endsection