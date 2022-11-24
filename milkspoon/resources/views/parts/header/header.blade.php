<div class="headder-container">
    <header class="header-masthead">
    <!--<img class="headerusi" src="{{ asset('img/22863505.png') }}" alt="">-->
    <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
    <input id="hamburger" type="checkbox" class="drawer-hidden" >

    <!-- ハンバーガーアイコン -->
    <label for="hamburger" class="menu_button" >
        <span></span>
    </label> 


    <!-- 追加：メニューを閉じるための要素 -->
    <label for="drawer-check" class="drawer-close">
    </label>

        <nav class="g-nav">
            <div class="logo">
                <p>Milk Spoon</p>
            </div>

            <ul class="g-ul">
                <li class="menu"><a class="menu1"href="{{ url('/') }}">トップページ</a></li>
                <li class="menu"><a class="menu1" href="{{ url('#company1') }}" >商品紹介</a></li>
                <li class="menu"><a class="menu1" href="{{ url('#business') }}">会社情報</a>

                    <ul class="child_menu">
                        <li><a href="{{ url('/companychild') }}"class="child1">企業情報</a></li>
                        <li><a href="{{ url('/') }}" class="child2">事業内容</a></li>
                        <li ><a href="{{ url('/') }}"class="child3">イベント</a></li>
                        <li ><a href="{{ url('/saiyou') }}"class="child4">採用情報</a></li>
                    </ul>
                </li>
                <li class="menu"><a class="menu1"href="{{ url('/tempo') }}">店舗情報</a></li>
                <li class="menu"><a class="menu1"href="{{ url('/') }}">お問い合わせ</a></li>
            </ul>
        </nav>

    </header>
</div>