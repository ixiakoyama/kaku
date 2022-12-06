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
            @yield('contents')
            
        </div> 
        <div classs=" footer">
        @include("parts.footer.foot")

        </div> 

          
        <a href="#" class="page-top">TOP</a>

    </body>

</html>