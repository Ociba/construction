<!doctype html>
<html lang="en-US">
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
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
                    <div id="top-footer" class="footer-widgets-wrapper footer_column_four edm-clearfix">
                        <div class="edm-container">
                            <div class="footer-widgets-area edm-clearfix">
                                <h3 style="text-align:center">COGE CONSTRUCTION COMPANY (U) LIMITED BRANCHES</h3>
                                <h6 style="text-align:center">cogeconstructioncompanyul@yahoo.com</h6>
                                <h6 style="text-align:center">+25 773 207459 | +256 754 155264</h6>
                                <div class="edm-footer-widget-wrapper edm-column-wrapper edm-clearfix" style="text-align: center;">
                                    <div class="edm-footer-widget wow fadeInLeft" data-wow-duration="0.5s">
                                    </div>
                                    @foreach($get_branches as $branches)
                                    <div class="edm-footer-widget wow fadeInLef">
                                        <article id="post-68" class="post-68 post type-post status-publish format-standard has-post-thumbnail hentry category-notices col-lg-3">
                                            <div class="edm-article-thumb">
                                                <img style="width:960px; height:150px;" src="{{asset('branch_photos/'.$branches->photo)}}" class="attachment-full size-full wp-post-image" alt=""  sizes="(max-width: 960px) 100vw, 960px" />	
                                                <h2 class="entry-title"><a href="#" rel="bookmark">{{ $branches->location}}</a></h2>
                                                <div class="post-cats-list">
                                                    <span class="category-button edm-cat-6"><a href="#">{{ $branches->address}}</a></span>
                                                </div>
                                                <div class="entry-meta">
                                                    <p class="posted-o"> <a href="#" rel="bookmark"><time class="entry-date published updated" datetime="2018-02-09T11:21:44+00:00">{{ $branches->email}}</time></a></p>
                                                    <p class="author vcard"><a class="url fn n" href="#">{{ $branches->contact1}}</a></p>
                                                    <p class="comments-lin"><a href="##respond">{{ $branches->contact2}}</a></p>				
                                                </div>
                                            </div>
                                            <!-- .entry-footer -->
                                        </article>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- .edm-footer-widget-wrapper -->
                            </div>
                            <!-- .footer-widgets-area -->
                        </div>
                        <!-- .edm-container -->
                    </div>
                </div>
            </div>
            <!-- #content -->
            @include('frontlayouts.footer')
            <!-- #colophon -->
            <div id="edm-scrollup" class="animated arrow-hide"><i class="fa fa-chevron-up"></i></div>
        </div>
        @include('frontlayouts.javascript')
    </body>
</html>