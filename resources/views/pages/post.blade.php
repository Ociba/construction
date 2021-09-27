<!doctype html>
<html lang="en-US">
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('frontlayouts.title')
        <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
        <link rel='dns-prefetch' href='http://s.w.org/' />
        <link rel="alternate" type="application/rss+xml" title="Education Master &raquo; Feed" href="../feed/index.html" />
        <link rel="alternate" type="application/rss+xml" title="Education Master &raquo; Comments Feed" href="../comments/feed/index.html" />
        <link rel="alternate" type="text/calendar" title="Education Master &raquo; iCal Feed" href="../events/indexedf3.html?ical=1" />
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/demo.themeegg.com\/themes\/education-master\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.0.2"}};
            !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
        </script>
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
            }
        </style>
        @include('frontlayouts.css')
        <meta name="tec-api-version" content="">
        <meta name="tec-api-origin" content="">
        <link rel="https://theeventscalendar.com/" href="../wp-json/tribe/events/v1/index.html" />
        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
    </head>
    <body class="post-template-default single single-post postid-73 single-format-standard wp-custom-logo tribe-no-js right-sidebar edm_fullwidth_layout">
        <div id="page" class="site">
            @include('frontlayouts.sliding-text')
            @include('frontlayouts.topbar')
            @include('frontlayouts.menu')
            <div id="content" class="site-content">
                <div class="edm-container">
                <h1 class="page-title screen-reader-tex" style="margin-top: 30px;">Posts</h1>
                <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

						<header>
					
				</header>
 
@foreach($get_post_information as $post)			
<article id="post-75" class="post-75 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-post tag-entrance tag-example tag-post">
	

	<div class="edm-article-thumb">
		<img style="width:960px; height:400px;" src="{{asset('blog_photos/'.$post->photo)}}" class="attachment-full size-full wp-post-image" alt="" {{--srcset="https://demo.themeegg.com/themes/education-master/wp-content/uploads/2018/02/friend-2727307_960_7201.jpg 960w, https://demo.themeegg.com/themes/education-master/wp-content/uploads/2018/02/friend-2727307_960_7201-300x198.jpg 300w, https://demo.themeegg.com/themes/education-master/wp-content/uploads/2018/02/friend-2727307_960_7201-768x508.jpg 768w"--}} sizes="(max-width: 960px) 100vw, 960px" />	</div><!-- .edm-article-thumb -->

	<header class="entry-header">
		<h2 class="entry-title"><a href="#" rel="bookmark">{{$post->title}}</a></h2>		<div class="post-cats-list">
							<span class="category-button edm-cat-8"><a href="/blog">blog</a></span>
							<span class="category-button edm-cat-5"><a href="/post">post</a></span>
					</div>
				<div class="entry-meta">
					<span class="posted-on"> <a href="../entrance-preparation-tips/index.html" rel="bookmark"><time class="entry-date published updated" datetime="2018-02-09T11:54:10+00:00">{{ date('d F Y', strtotime($post->created_at)) }}</time></a></span><span class="byline">  <span class="author vcard"><a class="url fn n" href="../author/education_master/index.html">coge company</a></span></span><span class="comments-link"><a href="../entrance-preparation-tips/index.html#respond"><span class="screen-reader-text"> on Entrance preparation tips</span></a></span>				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

	<div class="entry-content">
		<p>{{$post->description}} [&hellip;]</p>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
			</footer><!-- .entry-footer -->
</article><!-- #post-75 -->
@endforeach
		</main><!-- #main -->
	</div>
    <aside id="secondary" class="widget-area" role="complementary">
                        
                        @include('frontlayouts.posts')
                        @include('frontlayouts.archieve')
                        @include('frontlayouts.categories')
                        @include('frontlayouts.comment-form')
                    </aside>
                </div>
                <!-- .edm-container -->
            </div>
            <!-- #content -->
            @include('frontlayouts.footer')
            <!-- #colophon -->
            <div id="edm-scrollup" class="animated arrow-hide"><i class="fa fa-chevron-up"></i></div>
        </div>
        @include('frontlayouts.javascript')
    </body>
</html>