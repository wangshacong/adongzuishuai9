<!DOCTYPE html>
<!-- saved from url=(0035)http://demo440.adminbuy.cn/a/meinv/ -->
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="applicable-device" content="pc,mobile">
    <title>{{$dangqian_fenlei['fenlei_name']}}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="/css/main.css" media="screen">
    <link rel="stylesheet" href="/css/fontello.css">
    <!--[if IE 7]><link rel="stylesheet" href="/css/css/fontello-ie7.css"><![endif]-->
    <link rel="stylesheet" href="/css/animate.css">
    <!--[if lt IE 9]>
<script type="text/javascript" src="/skin/js/html5-css3.js"></script>
<![endif]-->
    <script type="text/javascript" src="/js/jquery-1.11.0.min.js.下载"></script>
    <link href="/css/prettify.css" rel="stylesheet" type="text/css">
    <script src="/js/prettify.js.下载" type="text/javascript"></script>
    <script src="/js/common_tpl.js.下载" type="text/javascript"></script>
    <script type="text/javascript" src="/js/wow.js.下载"></script>
    <script>
        new WOW().init();
    </script>
    <script type="text/javascript" src="/js/leonhere.js.下载"></script>
    <script src="/js/share.js.下载"></script>
    <link rel="stylesheet" href="/css/share_style0_16.css">
</head>

<body>
    @include('gong.head')
    <div class="search-bg">
        <div class="inner">
            <div class="search-form">
                <form name="formsearch" method="get" action="http://demo440.adminbuy.cn/plus/search.php">
                    <input type="hidden" name="kwtype" value="0">
                    <input type="text" class="s" name="q" id="q" value="" placeholder="输入关键词搜索...">
                    <button type="submit" name="s"><i class="icon-search"></i></button>
                </form>
            </div>
            <div class="tagscloud"> <span>快捷搜索：</span> 　<a href="http://demo440.adminbuy.cn/plus/search.php?keyword=%E7%BE%8E%E5%A5%B3">美女</a>
                　<a href="http://demo440.adminbuy.cn/plus/search.php?keyword=%E8%BD%A6">车</a> 　<a href="http://demo440.adminbuy.cn/plus/search.php?keyword=%E5%90%8D%E7%A7%B0">名称</a>
                　<a href="http://demo440.adminbuy.cn/plus/search.php?keyword=%E4%BA%A4%E8%AD%A6">交警</a> 　<a href="http://demo440.adminbuy.cn/plus/search.php?keyword=%E7%BE%8E%E9%A3%9F">美食</a>
                　<a href="http://demo440.adminbuy.cn/plus/search.php?keyword=%E5%8C%97%E4%BA%AC">北京</a> </div>
        </div>
    </div>
    <div class="blank"></div>

    <div class="inner container">
        <main class="main">
            <div class="content">
                <div class="breadcrumb"> <span><a href="//">主页</a> &gt; <a
                            href="/fenlei/{{$dangqian_fenlei['id']}}">{{$dangqian_fenlei['fenlei_name']}}</a> &gt; </span> </div>
                <?php 
                    $article = \DB::Table('article9s')->orderBy('id','desc')->where('news_pic','<>','')->where('fenlei_id',$dangqian_fenlei['id'])->paginate(10);
                ?>
                @foreach($article as $v)
                <section class="section wow fadeIn" style="margin-bottom:0px;visibility: visible; animation-name: fadeIn;">
                    <div class="thumbnail"> <a href="/article/{{$v->id}}" title="{{$v->title}}"
                            target="_blank"><img src="{{$v->news_pic}}" alt="{{$v->title}}"></a>
                    </div>
                    <h2><a href="/article/{{$v->id}}" title="{{$v->title}}"
                            target="_blank"><b>{{$v->title}}</b></a></h2>
                    <div class="postmeta"> <span>来源: <a>{{$v->zuozhe}}</a></span> <span>发布时间:
                            <time>{{$v->create_time}}</time>
                    <div class="excerpt">
                        <p> {{preg_replace('/<.*?>/','',$v->content)}}</p>
                    </div>
                </section>
                @endforeach
                <div class="pagess">
                    <ul>
                            {{$article->appends(request()->all())->links()}}

                    </ul>
                </div>
            </div>
        </main>
        <aside class="sidebar bar1">
            <section class="widget theme-widget wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="section-title">
                    <h3>最新文章</h3>
                    <?php 
                        $new_article = \DB::Table('article9s')->orderBy('dianji','desc')->where('fenlei_id',$dangqian_fenlei['id'])->where('news_pic','<>','')->limit(5)->get();
                    ?>
                </div>
                <ul>
                    @foreach($new_article as $v)
                    <li>
                        <div class="thumbnail"> <a href="/article/{{$v->id}}" title="{{$v->title}}"
                                target="_blank"><img src="{{$v->news_pic}}"></a> </div>
                        <p><a href="/article/{{$v->id}}" title="{{$v->title}}"
                                target="_blank">{{$v->title}}</a></p>
                    </li>
                    @endforeach
                </ul>
            </section>
        </aside>
    </div>
    @include('gong.footer')

    <div class="fixed-widget">
        <ul>
            <li><i class="icon-up-open"></i></li>
        </ul>
    </div>

    <script>
        window._bd_share_config = {
            "common": {
                "bdSnsKey": {},
                "bdText": "",
                "bdMini": "2",
                "bdPic": "",
                "bdStyle": "0",
                "bdSize": "16"
            },
            "share": {}
        };
        with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src =
            'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)
        ];
    </script>
    <script>
        prettyPrint();
    </script>

</body>

</html>