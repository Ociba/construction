<!doctype html>
<html lang="en-US">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    @include('frontlayouts.css')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        @include('frontlayouts.title')
        <meta name="tec-api-version" content="v1">
        <meta name="tec-api-origin" content="https://demo.themeegg.com/themes/education-master">
        <link rel="https://theeventscalendar.com/" href="wp-json/tribe/events/v1/index.html" />
        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
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
    </head>
    <body class="home page-template page-template-templates page-template-template-home page-template-templatestemplate-home-php page page-id-9 wp-custom-logo tribe-no-js right-sidebar edm_fullwidth_layout">
        <div id="page" class="site">
         @include('frontlayouts.sliding-text')
         @include('frontlayouts.topbar')
         @include('frontlayouts.menu')
            <div id="content" class="site-content">
                <div class="edm-container" style="margin-top:30px;">
                    <div class="edm-home-middle-section edm-clearfix">
                       <h1 style="text-align: center;">projects</h1>
                        <div class="middle-primary" style="width:100%;">
                            <section id="education_master_carousel-2" class="widget education_master_carousel">
                                <div data-layout="layout2"
                                    class="edm-block-wrapper carousel-posts edm-clearfix layout2">
                                    <div class="edm-block-title-nav-wrap">
                                    </div>
                                    <!-- edm-full-width-title-nav-wrap -->
                                    <div class="edm-block-posts-wrapper">
                                        <ul id="blockCarousel" class="cS-hidden">
                                            @foreach($get_projects as $project)
                                            <li class="edm-carousel-list layout2">
                                                <div class="edm-single-post edm-clearfix">
                                                    <div class="edm-post-thumb">
                                                        <a href="#">
                                                        <img style="width:555px; height:300px;" src="{{asset('project_photos/'.$project->photo)}}" class="attachment-education-master-carousel-blog size-education-master-carousel-blog wp-post-image" alt="" />								</a>
                                                    </div>
                                                    <!-- .edm-post-thumb -->
                                                    <div class="edm-post-content" style="text-align:center;">
                                                        <h3 class="edm-post-title small-size"><a
                                                            href="#">{{$project->title}}</a></h3>
                                                        <div class="edm-post-meta"><span class="posted-on"> <a href="#" rel="bookmark"><time class="entry-date published updated" datetime="2018-02-09T11:54:10+00:00">{{ date('d F Y', strtotime($project->created_at)) }}</time></a></span><span class="byline">  <span class="author vcard"><a class="url fn n" href="#">coge company</a></span></span></div>
                                                        <div class="edm-post-excerpt" style="text-align: justify;">{{$project->about_project}}</div>
                                                    </div>
                                                    <!-- .edm-post-content -->
                                                </div>
                                                <!-- .edm-single-post -->
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- .edm-block-posts-wrapper -->
                                    <div class="carousel-nav-action">
                                        <div class="edm-navPrev carousel-controls"><i class="fa fa-angle-left"></i></div>
                                        <div class="edm-navNext carousel-controls"><i class="fa fa-angle-right"></i></div>
                                    </div>
                                </div>
                                <!--- .edm-block-wrapper -->
                            </section>
                            <section id="education_master_featured_posts-3" class="widget education_master_featured_posts">
                                <div class="edm-block-wrapper featured-posts edm-clearfix">
                                    <h4 class="edm-block-title">On Going Projects</h4>
                                    <div class="edm-featured-posts-wrapper">
                                    @foreach($get_projects as $project)
                                        <div class="edm-single-post-wrap edm-clearfix">
                                            <div class="edm-single-post">
                                                <div class="edm-post-thumb">
                                                    <a href="#">
                                                       {{$project->organization}}
                                                    </a>
                                                </div>
                                                <!-- .edm-post-thumb -->
                                                <div class="edm-post-content">
                                                    <h3 class="edm-post-title small-size"><a href="#">{{$project->item}}</a></h3>
                                                </div>
                                                <!-- .edm-post-content -->
                                            </div>
                                            <!-- edm-single-post -->
                                        </div>
                                        @endforeach
                                        <!-- .edm-single-post-wrap -->
                                    </div>
                                    <!-- .edm-featured-posts-wrapper -->
                                </div>
                                <!--- .edm-block-wrapper -->
                            </section>
                            <script type="application/ld+json">
                                [{"@context":"http://schema.org","@type":"Event","name":"Inter college quiz competition","description":"&lt;p&gt;1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently [&hellip;]&lt;/p&gt;\\n","url":"https://demo.themeegg.com/themes/education-master/event/inter-college-quiz-competition/","startDate":"2021-06-13T08:00:00+00:00","endDate":"2021-06-14T17:00:00+00:00","location":{"@type":"Place","name":"Lorem Banquet","description":"","url":false,"address":{"@type":"PostalAddress","streetAddress":"Uphills, Lorem street","addressLocality":"Sydney","addressRegion":"Lorem State","postalCode":"0088877","addressCountry":"Australia"},"telephone":"9887766666","sameAs":"http://themeegg.com"},"organizer":{"@type":"Person","name":"Jon Doe","description":"","url":false,"telephone":"999999999","email":"the&#109;eeggof&#102;i&#99;&#105;&#97;&#108;&#64;&#103;&#109;a&#105;l.c&#111;&#109;","sameAs":"https://themeegg.com"}},{"@context":"http://schema.org","@type":"Event","name":"Parents Day for new students","description":"&lt;p&gt;1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently [&hellip;]&lt;/p&gt;\\n","url":"https://demo.themeegg.com/themes/education-master/event/parents-day-for-new-students/","startDate":"2024-05-17T08:00:00+00:00","endDate":"2024-05-17T17:00:00+00:00","location":{"@type":"Place","name":"Lorem Banquet","description":"","url":false,"address":{"@type":"PostalAddress","streetAddress":"Uphills, Lorem street","addressLocality":"Sydney","addressRegion":"Lorem State","postalCode":"0088877","addressCountry":"Australia"},"telephone":"9887766666","sameAs":"http://themeegg.com"},"organizer":{"@type":"Person","name":"Jon Doe","description":"","url":false,"telephone":"999999999","email":"the&#109;ee&#103;go&#102;&#102;&#105;&#99;ia&#108;&#64;gma&#105;&#108;.c&#111;m","sameAs":"https://themeegg.com"}},{"@context":"http://schema.org","@type":"Event","name":"New Year Eve","description":"&lt;p&gt;1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently [&hellip;]&lt;/p&gt;\\n","url":"https://demo.themeegg.com/themes/education-master/event/new-year-eve/","startDate":"2025-01-01T00:00:00+00:00","endDate":"2025-01-01T23:59:59+00:00","location":{"@type":"Place","name":"Lorem Banquet","description":"","url":false,"address":{"@type":"PostalAddress","streetAddress":"Uphills, Lorem street","addressLocality":"Sydney","addressRegion":"Lorem State","postalCode":"0088877","addressCountry":"Australia"},"telephone":"9887766666","sameAs":"http://themeegg.com"},"organizer":{"@type":"Person","name":"Jon Doe","description":"","url":false,"telephone":"999999999","email":"th&#101;m&#101;&#101;&#103;&#103;&#111;&#102;&#102;&#105;&#99;i&#97;l&#64;&#103;mai&#108;&#46;&#99;&#111;m","sameAs":"https://themeegg.com"},"offers":{"@type":"Offer","price":"10","url":"https://demo.themeegg.com/themes/education-master/event/new-year-eve/"}},{"@context":"http://schema.org","@type":"Event","name":"Welcome program","description":"&lt;p&gt;What is Lorem Ipsum? Lorem Ipsum\u00a0is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also [&hellip;]&lt;/p&gt;\\n","image":"https://demo.themeegg.com/themes/education-master/wp-content/uploads/2018/02/heart-3117389_960_7201.jpg')}}","url":"https://demo.themeegg.com/themes/education-master/event/welcome-program/","startDate":"2048-02-09T08:00:00+00:00","endDate":"2058-02-09T17:00:00+00:00","location":{"@type":"Place","name":"Lorem Banquet","description":"","url":false,"address":{"@type":"PostalAddress","streetAddress":"Uphills, Lorem street","addressLocality":"Sydney","addressRegion":"Lorem State","postalCode":"0088877","addressCountry":"Australia"},"telephone":"9887766666","sameAs":"http://themeegg.com"},"organizer":{"@type":"Person","name":"Jon Doe","description":"","url":false,"telephone":"999999999","email":"&#116;&#104;e&#109;eeg&#103;&#111;&#102;f&#105;c&#105;&#97;&#108;&#64;&#103;ma&#105;&#108;.&#99;om","sameAs":"https://themeegg.com"},"offers":{"@type":"Offer","price":"100","url":"https://demo.themeegg.com/themes/education-master/event/welcome-program/"}}]
                            </script>
                        </div>
                    </div>
                    <!-- .edm-home-middle-section -->
                </div>
                <!-- .edm-container -->
            </div>
            <!-- #content -->
           @include('frontlayouts.footer')
            <!-- #colophon -->
            <div id="edm-scrollup" class="animated arrow-hide"><i class="fa fa-envlope"></i></div>
        </div>
        <!-- #page -->
        @include('frontlayouts.javascript')
    </body>
</html>