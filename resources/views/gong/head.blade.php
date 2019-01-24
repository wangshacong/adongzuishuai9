<header class="header">
    <div class="inner">
        <div class="logo animated fadeInLeft" style="margin-left:150px;"> <a href="/" title="深圳实创新闻"><img
                    src="/images/sz.png" alt="深圳实创新闻"></a>
        </div>
        <nav class="nav" style="margin-right:150px;">
            <div class="menu">
                <ul>
                    <li class="current"><a href="/">首页</a> </li>
                    @foreach($fenlei as $v)
                    <li class="common "><a href="/fenlei/{{$v['id']}}">{{$v['fenlei_name']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>
        <div class="clear"></div>
    </div>
</header>