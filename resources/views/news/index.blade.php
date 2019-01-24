<!DOCTYPE html>
<!-- saved from url=(0027)http://demo440.adminbuy.cn/ -->
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="applicable-device" content="pc,mobile">
    <title>深圳实创新闻</title>
    <meta name="description" content="网站描述">
    <meta name="keywords" content="关键词">
    <link rel="stylesheet" type="text/css" href="/css/main.css" media="screen">
    <link rel="stylesheet" href="/css/fontello.css">
    <!--[if IE 7]><link rel="stylesheet" href="/css/fontello-ie7.css"><![endif]-->
    <link rel="stylesheet" href="/css/animate.css">
    <!--[if lt IE 9]>
<script type="text/javascript" src="/skin/js/html5-css3.js"></script>
<![endif]-->
    <script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
    <link href="/css/prettify.css" rel="stylesheet" type="text/css">
    <script src="/js/prettify.js" type="text/javascript"></script>
    <script src="/js/common_tpl.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script type="text/javascript" src="/js/leonhere.js"></script>
    <script src="/js/share.js"></script>
    <link rel="stylesheet" href="/css/share_style0_16.css">
</head>

<body style="">
    @include('gong.head')
    <div class="blank"></div>

    <div class="inner container">
        <main class="main">
            <div class="focus wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="flexslider">
                    <?php 
                        $lunbo = \DB::Table('article9s')->orderBy('id','desc')->where('news_pic','<>','')->limit(5)->get();
                    ?>
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-410px, 0px, 0px);">
                            @foreach($lunbo as $v)
                            <li class="clone" aria-hidden="true" style="margin-right: 0px; float: left; display: block; width: 410px;">
                                <a href="/article/{{$v->id}}" title="{{$v->title}}">
                                    <img src="{{$v->news_pic}}" alt="{{$v->title}}"
                                        draggable="false">
                                    <p class="flex-caption">{{$v->title}}</p>
                                </a> </li>
                            @endforeach
                        </ul>
                    </div>
                    <ol class="flex-control-nav flex-control-paging">
                        {{--  <li><a href="/" class="flex-active"></a></li>  --}}
                    </ol>
                </div>
            </div>
            <section class="top wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <h3>头条推荐</h3>
                <?php 
                    $toutiao_article = \DB::Table('article9s')->orderBy('id','desc')->skip(5)->limit(3)->get();
                ?>
                <ul>
                    @foreach($toutiao_article as $v)
                    <li>
                        <h4><a href="/article/{{$v->id}}" title="{{$v->title}}">{{$v->title}}</a></h4>
                        <p>{{preg_replace('/<.*?>/','',$v->content)}}</p>
                    </li>
                    @endforeach
                </ul>
            </section>
            <div class="clear"></div>
            <div class="mainad wow fadeIn" style="visibility: hidden; animation-name: none;"> </div>
            <div class="content">
                <?php 
                    $new_article = \DB::Table('article9s')->orderBy('id','desc')->where('news_pic','<>','')->skip(8)->limit(10)->get()
                ?>
                <div class="section-title">
                    <h3>最新资讯</h3>
                </div>
                @foreach($new_article as $v)
                <section class="section wow fadeIn" style="visibility: hidden; animation-name: none;margin-bottom:0px;">
                    <div class="thumbnail"> <a href="/article/{{$v->id}}" title="{{$v->title}}"
                            target="_blank"><img src="{{$v->news_pic}}" alt="{{$v->title}}"></a>
                    </div>
                    <h2><a href="/article/{{$v->id}}" title="{{$v->title}}"
                            target="_blank">{{$v->title}}</a></h2>
                    <div class="postmeta"> <span>来源: <a>{{$v->zuozhe}}</a></span> <span>发布时间:
                            <time>{{$v->create_time}}</time>
                    <div class="excerpt">
                        <p> {{preg_replace('/<.*?>/','',$v->content)}}</p>
                    </div>
                </section>
                @endforeach
            </div>
        </main>
        <aside class="sidebar">
            <section class="widget wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="section-title">
                    <h3>热门文章</h3>
                </div>
                <?php 
                    $hot_article = \DB::Table('article9s')->orderBy('dianji','desc')->limit(8)->get();
                ?>
                <ul>
                    @foreach($hot_article as $v)
                    <li><a href="/article/{{$v->id}}" title="{{$v->title}}"
                            target="_blank">{{$v->title}}</a> </li>
                    @endforeach
                </ul>
            </section>
            <section class="widget theme-widget wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="section-title">
                    <h3>随机文章</h3>
                </div>
                <?php 
                    $article = \DB::Table('article9s')->orderBy('id','desc')->skip(18)->limit(10)->where('news_pic','<>','')->get();
                ?>
                <ul>
                    @foreach($article as $v)
                    <li class="list cur">
                        <div class="thumbnail"> <a href="/article/{{$v->id}}" title="{{$v->title}}"
                                target="_blank"><img src="{{$v->news_pic}}"></a> </div>
                        <p><i class="icon-right-open-mini"></i> <a href="{{$v->id}}"
                                title="{{$v->title}}" target="_blank">{{$v->title}}</a></p>
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