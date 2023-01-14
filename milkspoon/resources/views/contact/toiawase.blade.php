@extends('parts.common')
@section('contents')

<section class="toiawase1">

    <div class="container1">
        <img class="toiawase-usi" src="{{ asset('img/22863505.png') }}" alt="">

    <div class="container2">
        <h1 class="toiawaseh1"><span class="under">contact</span></h1>
        
        <div class="container">
        
            {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
                {{ csrf_field() }}
            
            <div class="koumoku">
                <p class="koumokunaiyou">お名前（10文字以内）<span class="tyuui">&emsp;必須</span></p>
                
                <div class="naiyou">
                    {{ Form::text('name', null, ['class' => 'waku']) }}
                </div>
            </div>
                @if ($errors->has('name'))
                <p class="keikoku">{{ $errors->first('name') }}</p>
                @endif

            <div class="koumoku">
                    <p class="koumokunaiyou">メールアドレス<span class="tyuui">&emsp;必須</span></p>
                <div class="naiyou">
                    {{ Form::text('email', null, ['class' => 'waku']) }}
                </div>
            </div>
                @if ($errors->has('email'))
                <p class="keikoku">{{ $errors->first('email') }}</p>
                @endif

            <div class="koumoku">
                <p class="koumokunaiyou">電話番号</p>
                    
                <div class="naioyu">
                    {{ Form::text('tel', null, ['class' => 'waku']) }}
                </div>
            </div>
                @if ($errors->has('tel'))
                <p class="keikoku">{{ $errors->first('tel') }}</p>
                @endif
            <div class="koumoku">
                <p class="koumokunaiyou">お問い合わせ内容<span class="tyuui">&emsp;必須</span></p>
                <div class="naiyou">
                    {{ Form::textarea('contents', null, ['class' => 'waku']) }}
                </div>
            </div>
                @if ($errors->has('contents'))
                <p class="keikoku">{{ $errors->first('contents') }}</p>
                @endif    
            <div class="sousinbtn">
                {{ Form::submit('確認画面へ', ['class' => 'kakuninbtn']) }}
            </div>
                {!! Form::close() !!}
        </div>
    </div>
    </div>
</section>
 @endsection