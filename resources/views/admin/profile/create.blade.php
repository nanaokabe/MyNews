<!DOCYPE html>

<html>
  <head>
  <meta chaset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="view-port" content="width=device-width, iniical-scale=1">
  
  <title>My プロフィール</title>
  </head>
    <body>
    
    </body>
    
</html>

{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'プロフィール')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My プロフィール</h2>
            </div>
        </div>
    </div>
@endsection

