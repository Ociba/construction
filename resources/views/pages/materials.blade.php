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
                        <div id="top-footer" class="footer-widgets-wrapper footer_column_four edm-clearfix">
                        <h4 style="text-align:center; margin-top:10px;">Blog</h4>
                        <h3 style="text-align:center;">Please if you have these material (s) available within the Disricts within our branches.<br> Fill Form Below</h3>
                            <div class="edm-container">
                                <div class="footer-widgets-area edm-clearfix">
                                    <div class="edm-footer-widget-wrapper edm-column-wrapper edm-clearfix">
                                        <div class="edm-footer-widget wow fadeInLeft" data-wow-duration="0.5s">
                                        </div>
                                        <div id="comments" class="comments-area">
                                <ol class="comment-list">
                                    <li id="comment-1" class="comment even thread-even depth-1">
                                    </li>
                                    <!-- #comment-## -->
                                </ol>
                                <!-- .comment-list -->
                                <div id="respond" class="comment-respond">
                                    <h3 id="reply-title" class="comment-reply-title" style="text-align:center;">Send Us Your Details <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></h3>
                                    <form action="/create-material" method="get" id="commentform" class="comment-form">
                                      @csrf
                                        <p class="comment-notes"><span id="email-notes">Your details will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                        <p class="comment-form-author"><label for="author">District <span class="required">*</span></label> <input id="district" name="district" type="text" value="" size="30" maxlength="245" required='required' /></p>
                                        <p class="comment-form-author"><label for="author">County <span class="required">*</span></label> <input id="county" name="county" type="text" value="" size="30" maxlength="245" required='required' /></p>
                                        <p class="comment-form-author"><label for="author">Village <span class="required">*</span></label> <input id="village" name="village" type="text" value="" size="30" maxlength="245" required='required' /></p>
                                        <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="name" name="name" type="text" value="" size="30" maxlength="245" required='required' /></p>
                                        <p class="comment-form-email"><label for="email">Contact <span class="required">*</span></label> <input id="contact" name="contact" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" required='required' /></p>
                                        <p class="comment-form-url"><label for="url">Material (s)</label> <input id="material" name="material" type="text" value="" size="30" maxlength="200" required /></p>
                                        <p class="comment-form-author"><label for="author">Quantity <span class="required">*</span></label> <input id="quantity" name="quantity" type="text" value="" size="30" maxlength="245" required='required' /></p>
                                        <p class="form-submit"><button type="submit" id="submit" class="submit" value="Send" >Send</button>
                                        </p>
                                    </form>
                                </div>
                                <!-- #respond -->
                            </div>
                                    </div>
                                    <!-- .edm-footer-widget-wrapper -->
                                </div>
                                <!-- .footer-widgets-area -->
                            </div>
                            <!-- .edm-container -->
                        </div>
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