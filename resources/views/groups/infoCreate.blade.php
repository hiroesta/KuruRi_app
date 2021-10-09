@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header  text-white bg-dark">{{ __('お知らせを作成') }}</div>

        @if(Session::has('message'))
        <div>作成が完了しました</div>
        <button><a href="{{route('home')}}">ホームに戻る</a></button>
        @else

        <div class="card-body">
          <form method="POST" action="{{ route('group_info_send',$group->id,false) }}">
            @csrf

            <div>
              <label for="content" class="col-md-4 col-form-label text-md-right">お知らせ：</label>
                <textarea id="content" name="content" rows="4" cols="40" style="vertical-align:top;"></textarea>
            </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block mt-4">
                      送信
                    </button>
                </div>
              </div>
          </form>
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection