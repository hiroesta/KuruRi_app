@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
        @foreach($infos as $info)
          @if($info->group_id == $group->id)
            <div class="card">
              <div class="card-header  text-white bg-dark">
                お知らせ{{$info->id}}
              </div>
              <div class="card-body">
                <div>
                  {{ $info->content }}
                </div>
                @if(Auth::id() == $group->master_id)
                  <button class="d-inline-block btn btn-primary btn-sm">
                    <a href="{{ route('group_info_edit',$info->id,false) }}"  style="color: white; text-decoration: none;">編集</a>
                  </button>
                  <form class="d-inline-block" method="POST" action="{{ route('group_info_delete',$info->id,false) }}">
                  @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary btn-sm">
                    削除
                    </button>
                  </form>
                @endif
              </div>
            </div>
          @endif
        @endforeach
    </div>
  </div>
</div>
@endsection