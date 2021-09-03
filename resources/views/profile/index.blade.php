@extends('layouts.index')

@section('content')
        <span class="head">PROFILE</span><img src=storage/image/sinchan.png width="100",height="30">
        <hr color="orange">
        <span class="kadai">課題１　デプロイの追加開発</span><br><br>
        
             @foreach($posts as $post)
             
                            <div class="zone">
                            <div class="container">
                                UPDATE：{{ $post->updated_at->format('Y/m/d') }}<br>
                                    <div class="area">
                                    <span class="list">NAME</span>
                                    {{ str_limit($post->name,20) }}<br>
                                     <span class="list">GENDER</span>
                                    {{ str_limit($post->gender, 20) }}<br>
                                     <span class="list">HOBBY</span>
                                    {{ str_limit($post->hobby, 20) }}<br>
                                     <span class="list">INTRODUCTION</span>
                                    {{ str_limit($post->introduction, 20) }}<br>
                            
                            </div>
                        </div>
                    </div>
                    </span>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
