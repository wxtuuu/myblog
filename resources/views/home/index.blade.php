<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/blog.css')}}">
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1"><!-- 新 Bootstrap 核心 CSS 文件 -->
    </head>
    <body>
    <div class="blog-nav">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Blog</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">首页</a></li>
                            <li><a href="#">文章页</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">搜索</button>
                        </form>
                        <!--<ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">未登录 <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>-->
                    </div><!-- /.navbar-collapse -->
                </div>
                </div>
            </nav>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <div class="blog-post">
                    <h2>夏活</h2>
                    <p class="blog-post-meta">2016年9月12日 <a href="#" class="blog-post-label">舰娘</a></p>
                    <p class="blog-post-content">小型活动</p>
                    <p><a href="#">阅读更多</a></p>
                </div>
                <div class="blog-post">
                    <h2>夏活</h2>
                    <p class="blog-post-meta">2016年9月12日 <a href="#" class="blog-post-label">舰娘</a></p>
                    <p class="blog-post-content">小型活动</p>
                    <p><a href="#">阅读更多</a></p>
                </div>
                <div class="blog-post">
                    <h2>夏活</h2>
                    <p class="blog-post-meta">2016年9月12日 <a href="#" class="blog-post-label">舰娘</a></p>
                    <p class="blog-post-content">小型活动</p>
                    <p><a href="#">阅读更多</a></p>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="panel panel-default sidebar">
                    <div class="panel-heading">云标签</div>
                    <div class="panel-body">
                        <a href="#">舰娘</a>
                        <a href="#">传颂之物</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
