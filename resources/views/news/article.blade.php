<!DOCTYPE html>
<!-- saved from url=(0052)http://demo440.adminbuy.cn/a/meinv/20170622/186.html -->
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>{{$content['title']}}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="/css/main.css" media="screen">
    <link rel="stylesheet" href="/css/fontello.css">
    <!--[if IE 7]><link rel="stylesheet" href="/css/fontello-ie7.css"><![endif]-->
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
        </div>
    </div>
    <div class="blank"></div>

    <div class="inner container">
        <main class="main">
            <div class="content">
                <?php 
                    $fenlei = \DB::Table('fenlei9s')->where('id',$content['fenlei_id'])->first();
                ?>
                <div class="breadcrumb"> <span> <a href="/">主页</a> &gt; <a
                            href="/fenlei/{{$fenlei->id}}">{{$fenlei->fenlei_name}}</a> &gt;<a
                            href="">新闻</a> </span> </div>
                <article class="post">
                    <h1 class="post-title">{{$content['title']}}</h1>
                    <div class="postmeta">来源: <a>{{$content['zuozhe']}}</a></span> 发布时间:
                            <time>{{$content['create_time']}}</time>
                        </span> <span>
                        </span> </div>

                    <div class="entry">
                       <?php echo $content['content']; ?>
                        <br>

                    </div>
                    
                    <section class="related-post">
                        <h3> 您可能还会对下面的文章感兴趣：</h3>
                        <ul>
                        </ul>
                    </section>
                    <section class="related-pic">
                        <?php 
                            $tuijian_article = \DB::Table('article9s')->orderBy('dianji','desc')->where('fenlei_id',$content['fenlei_id'])->where('news_pic','<>','')->limit(3)->get();
                        ?>
                        <ul>
                            @foreach($tuijian_article as $v)
                            <li>
                                <div class="thumbnail"><a href="/article/{{$v->id}}"
                                        title="{{$v->title}}" target="_blank"><img src="{{$v->news_pic}}"></a></div>
                                <p style="height:80px;"><a href="/article/{{$v->id}}" title="{{$v->title}}"
                                        target="_blank">{{$v->title}}</a></p>
                            </li>
                            @endforeach
                        </ul>
                    </section>


                </article>
            </div>
        </main>
        <aside class="sidebar bar1">
            <section class="widget theme-widget wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="section-title">
                    <h3>最新文章</h3>
                </div>
                <?php 
                    $new_article = \DB::Table('article9s')->orderBy('id','desc')->where('news_pic','<>','')->limit(5)->get();
                ?>
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

</body>

</html>