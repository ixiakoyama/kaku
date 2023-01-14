@extends('parts.common')
@section('contents')
<section class="toiawase1">

    <div class="container1">
        <img class="toiawase-usi" src="{{ asset('img/22863505.png') }}" alt="">
    
    <div class="container2">
        <h1 class="toiawaseh1"><span class="under">contact</span></h1>
        
        <div class="container">
            
            {!! Form::open(['route' => 'process', 'method' => 'POST']) !!}
                {{ csrf_field() }}
    
            <div class="koumoku">
                <p class="koumokunaiyou">お名前（10文字以内）<span class="tyuui">&emsp;必須</span></p>
        
                <div class="naiyou">
                    {{ $inputs['name'] }}
                </div>
            </div>
            
            <input type="hidden" name="name" value="{{ $inputs['name'] }}">

            <div class="koumoku">
                <p class="koumokunaiyou">メールアドレス<span class="tyuui">&emsp;必須</span></p>

                <div class="naiyou">
                    {{ $inputs['email'] }}
                </div>
            </div>
            
            <input type="hidden" name="email" value="{{ $inputs['email'] }}">

            <div class="koumoku">
                <p class="koumokunaiyou">電話番号</p>

                <div class="naiyou">
                    {{ $inputs['tel'] }}
                </div>
            </div>
            
            <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">

            <div class="koumoku">
                <p class="koumokunaiyou">お問い合わせ内容<span class="tyuui">&emsp;必須</span></p>
                    
                <div class="naiyou">
                    {{ $inputs['contents'] }}
                </div>
            </div>
            
            <input type="hidden" name="contents" value="{{ $inputs['contents'] }}">
                
            <div class="sousinbtn">
                <button name="action" type="submit" value="return" class="kakuninbtn">入力画面に戻る</button>
                <button name="action" type="submit" value="submit" class="kakuninbtn">送信</button>
            </div>
                {!! Form::close() !!}
        </div>
    </div>
    </div>
</section>
@endsection