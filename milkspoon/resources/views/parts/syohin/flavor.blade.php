<!DOCTYPE HTML>
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
<section class="aji1">
    <div class="flavorflavor">
            <img class="usi" src="{{ asset('img/22863505.png') }}" alt="">
        <div class="flavor1">
            <h1>flavor</h1> 
        <div class="ajituke">


                <p class="flavor-p">「心も体も健康に」を目的として<br>
                    原材料にこだわり手作りで作成しております。<br>
                    レギュラーメニューはミルク、チョコ、抹茶、ストロベリーの4種に加え<br>
                    季節毎に旬の果物を使用したフレーバーを提供いたします。
                </p>
        </div>
        
        </div>
    </div>
</section>
</div>
<a href="/" class="page-top">TOP</a>
</body>
</html>