<div class="footer-container">
    <footer class="footer-masthead">

        <nav class="fg-nav">
            <div class="logo">
                <p>Milk Spoon</p>
            </div>

            <ul class="fg-ul">
                <li class="fmenu"><a class="fmenu1"href="{{ url('/') }}">トップページ</a></li>
                <li class="fmenu"><a class="fmenu1" href="{{ url('#projectnaiyou') }}" >商品紹介</a></li>
                <li class="fmenu"><a class="fmenu1" href="{{ url('#companyh1') }}">会社情報</a>

                    <ul class="fchild_menu">
                        <li><a href="{{ url('/companychild') }}"class="fchild1">企業情報</a></li>
                        <li><a href="{{ url('/jigyounaiyou') }}" class="fchild2">事業内容</a></li>
                        <li ><a href="{{ url('/ibento') }}"class="fchild3">イベント</a></li>
                        <li ><a href="{{ url('/saiyou') }}"class="fchild4">採用情報</a></li>
                    </ul>
                </li>
                <li class="fmenu"><a class="fmenu1"href="{{ url('/tempo') }}">店舗情報</a></li>
                <li class="fmenu"><a class="fmenu1"href="{{ url('/') }}">お問い合わせ</a></li>
            </ul>
        </nav>
        <div class="copo">
            <p>©︎ milkspoon</p>
        </div>
</footer>
</div>