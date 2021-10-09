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
            <div class="card w-25 h-100 mt-1 mr-1 d-inline-block">
                <div class="card-header  text-white bg-dark">{{$group->name}}</div>
                <div class="card-body">
                    <div>
                        {{$group->information}}
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