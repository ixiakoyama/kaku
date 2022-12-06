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
        <section class="company1">
        
        <div class="saiyousaiyou">
        <img class="usi" src="{{ asset('img/22863505.png') }}" alt="">
        <div class="saiyouh1">
            <h1>recruit</h1> 
        </div>
    
        <table class="saiyou-table">
            <tr>
                <th>求める人材</th>
                <td class="shop-td">癒しとこだわりを伝えられる方</td>
            </tr>
            <tr>
                <th>設立</th>
                <td class="shop-td">2021年4月</td>
            </tr>
            <tr>
                <th>月給</th>
                <td class="shop-td">18万〜</td>
            </tr>
            <tr>
                <th>勤務地</th>
                <td class="shop-td">各店舗</td>
            </tr>
            <tr>
                <th>福利厚生</th>
                <td class="shop-td">詳細はお問い合わせください</td>
            </tr>
        </table> 
        </div>  
    </section>
        <!--<section class="saiyou">
           
            
            <div class="saiyoujouhou">
              
                <div class="saiyouh1">
                     <h1>recruit</h1> 
                     </div>
    

                <table class="saiyou-table">
                    <tr>
                        <th>求める人物</th>
                        <td class="shop-td">癒しとこだわりを伝えられる方</td>
                    </tr>
                    <tr>
                        <th>月給</th>
                        <td class="shop-td">18万〜</td>
                    </tr>
                    <tr>
                        <th>勤務地</th>
                        <td class="shop-td">各店舗</td>
                    </tr>
                    <tr>
                        <th>福利厚生</th>
                        <td class="shop-td">詳細はお問い合わせください</td>
                    </tr>
                </table>
               
            </div>    
        </section>-->
        </div> 
       
        
          </body>
          <a href="/" class="page-top">TOP</a>
      
      </html>
   