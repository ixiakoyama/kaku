@extends('parts.common')
@section('contents')
<section class="toiawase1">
    <div class="container1">
            <img class="toiawase-usi" src="{{ asset('img/22863505.png') }}" alt="">

            <div class="container2">
                <h1 class="toiawaseh1"><span class="under">thank you</span></h1>
        
                <div class="container">
                    <a href="{{ route('contact') }}" class="kakuninbtn">お問い合わせ入力画面に戻る</a>
                </div>
            </div>
    </div>
</section>
@endsection