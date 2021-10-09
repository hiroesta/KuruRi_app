@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">名前</th>
            <th scope="col">年齢</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <th scope="row">{{$user->id}}
              @if(Auth::id() == $group->master_id)
              <form method="POST" action="{{ route('group_member_delete',$user->id,false) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">
                  削除
                </button>
              </form>
              @endif
            </th>
            <td><a href="{{ route('profile',$user->id,false) }}" >{{$user->name}}</a></td>
            <td>{{$user->age}}</td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</div>
<!--
<div>
  <ul>
    @foreach($users as $user)
    <li><a href="{{ route('profile',$user->id,false) }}">{{$user->name}}</a>
      @if(Auth::id() == $group->master_id)
      <form method="POST" action="{{ route('group_member_delete',$user->id,false) }}">
        @csrf
        @method('DELETE')
        <button type="submit">
          削除
        </button>
      </form>
      @endif
    </li>
    @endforeach
  </ul>
</div>
-->
@endsection