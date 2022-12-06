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
        
            <section class="company2">
            
                <div class="companycompany1">
                <img class="usi" src="{{ asset('img/22863505.png') }}" alt="">
                <div class="companyh2">
                
                    <h1>company</h1> 
                    
                </div>

                <table class="campany-table">
                    
                    <tr>
                        <th>会社名</th>
                        <td class="shop-td">株式会社ミルクスプーン</td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td class="shop-td">2021年4月</td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td class="shop-td">2022年8月</td>
                    </tr>
                    <tr>
                        <th>代表</th>
                        <td class="shop-td">牛沢冷</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td class="shop-td">300万円</td>
                    </tr>
                    <tr>
                        <th>従業員数</th>
                        <td class="shop-td">5名</td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td class="shop-td">◯◯◯-△△△-□□□</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td class="shop-td">北海道旭川市◯◯◯</td>
                    </tr>
                </table> 
                
                </div> 
              
            </section>
            
        </div>   
        <a href="/" class="page-top">TOP</a>
    </body>

</html>