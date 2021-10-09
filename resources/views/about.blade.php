@extends('layouts.app')

@section('content')
<style>
  html,
  body,
  div,
  h1 {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
  }
</style>
<div class="container">
<div class="card text-center">
  <div class="card-header">
    KuruRiとは
  </div>
  <div class="card-body">
    <h5 class="card-title">はじめに</h5>
    <p class="card-text">このサービスは、学生や社会人のサークルへ向けて作られたサービスです。</p>
    <h5 class="card-title">サークル管理者の方へ</h5>
    <p class="card-text">このサービスでは、サークルを作成し、プロフィールを作り、充実させルコとでサークルの更なる発展へとつなげ、同時にお知らせ機能などでサークルの活動を管理することができます。</p>
    <h5 class="card-title">会員様へ</h5>
    <p class="card-text">このサービスでは、各サークルの特色などを見極めつつ、自分の色にあったサークルを探し出すことができます。</p>
    <a href="{{ route('/home') }}" class="btn btn-primary">ホームに戻る</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
  
</div>
@endsection