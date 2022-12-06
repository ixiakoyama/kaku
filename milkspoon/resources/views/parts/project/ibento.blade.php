!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--レスポンシブ-->
        <meta name="description" content="">
        <meta name="author" content="">

        @isset($title)
            <title>{{ $title }} Milk Sppon</title>
        @else
            <title>Milk Spoon　ウェブサイト</title>
        @endisset

        @stack('css')

            <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
  
    </head>

    <body>
        <div class="header">
            @include("parts.header.header")
        </div>
        
        <div classs="contents">
            <section class="project2">
                <div class="ibento">
                    <img class="usi" src="{{ asset('img/22863505.png') }}" alt="">
                <div class="ibento1">
                <h1>ibentor</h1> 
                <p class="ibento-p">キッチンカーでショッピングモールなどのイベント店も<br>
                    今後各地開催予定です。<br>
                    現在は旭川市のみで行っており<br>
                    多くのお客様にご提供させていただいております。</p>
                </div>
                </div>

            </section>
            <a href="/" class="page-top">TOP</a>
        </div>