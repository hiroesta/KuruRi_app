@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
            <div>
                新規会員登録またはログインしてください
            </div>
            @else
            @foreach($groups as $group)
            <div class="card w-25 h-100 mt-1 mr-1 d-inline-block" style="height:170px !important;">
                <div class="card-header  text-white bg-dark" style="max-height:50px; overflow: hidden;   text-overflow: ellipsis; white-space: nowrap;">{{$group->name}}</div>
                <div class="card-body" style="max-height:200px; max-width:200px;">
                    <div style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2; overflow: hidden;">
                    <div style="height: 45px;">{{$group->information}}</div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <a href="{{ route('group_profile',$group->id,'false') }}" style="color:white; ">詳細へ</a>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection