@extends('layouts.app')

            @section('content')
            <?php use Arabic\Arabic; ?>
       
       
            <div class="se-pre-con" style="display: none;"></div>
     
            <section class="news-feed">
                <div class="container">
                    <div class="row row-margin">
                        <div class="col-sm-3 hidden-xs col-padding">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="#">
                                        <img class="entry-thumb" src="images/slider/slide-01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-1">موضة </span>
                                    <h3 class="post-title post-title-size"><a href="#" rel="bookmark">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة  </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                        <!-- read more -->
                                        <a class="readmore pull-left" href="#"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="#">
                                        <img class="entry-thumb" src="images/slider/slide-01.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-1">موضة </span>
                                    <h3 class="post-title post-title-size"><a href="#" rel="bookmark">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة  </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                        <!-- read more -->
                                        <a class="readmore pull-left" href="#"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 hidden-xs col-padding">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="#">
                                        <img class="entry-thumb" src="images/slider/slide-05.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-5">موضة </span>
                                    <h3 class="post-title post-title-size"><a href="#" rel="bookmark">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                        <!-- read more -->
                                        <a class="readmore pull-left" href="#"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>	
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12"> <!-- right content inner -->
                        <section class="recent_news_inner">
                            <h3 class="category-headding ">أخبار حديثة</h3>
                            <div class="headding-border"></div>
                            <div class="row">
                                <div id="content-slide" class="owlousel">
                                    <!-- item-1 -->
                                    <div class="item">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s"><!-- image -->
                                            <h3><a href="#">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني </a></h3>
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="images/recent_news_01.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_six">T</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                            </div>
                                            <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، <a href="#">...اقرأ أكثر</a></p>
                                        </div>
                                    </div>
                                    <!-- item-2 -->
                                    <div class="item">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"><!-- image -->
                                            <h3><a href="#">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني </a></h3>
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="images/recent_news_02.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_sev">I</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                            </div>
                                            <p>خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور <a href="#">...اقرأ أكثر</a></p>
                                        </div>
                                    </div>
                                    <!-- item-3 -->
                                    <div class="item">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"><!-- image -->
                                            <h3><a href="#">لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس </a></h3>
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="images/recent_news_03.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_five">B</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                            </div>
                                            <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام <a href="#">...اقرأ أكثر</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row rn_block">
                                <div class="col-md-4 col-sm-6 padd">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s"><!-- image -->
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="images/recent_news_04.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info meta-info-rn">
                                            <div class="slide">
                                                <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-title-author-details">
                                        <h4><a href="#">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي ...</a></h4>
                                        <div class="post-editor-date">
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                            </div>
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 padd">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"><!-- image -->
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="images/recent_news_05.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info meta-info-rn">
                                            <div class="slide">
                                                <a target="_blank" href="#" class="post-badge btn_nine">p</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-title-author-details">
                                        <h4><a href="#">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور ...</a></h4>
                                        <div class="post-editor-date">
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                            </div>
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm padd">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"><!-- image -->
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="images/recent_news_06.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info meta-info-rn">
                                            <div class="slide">
                                                <a target="_blank" href="#" class="post-badge btn_one">F</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-title-author-details">
                                        <h4><a href="#">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم  ...</a></h4>
                                        <div class="post-editor-date">
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                            </div>
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Politics Area
                        ============================================ -->
                         <!-- /.Politics -->
                        
                    </div> <!-- /.left content inner -->
                     <!-- side content end -->
                </div> <!-- row end -->
            </div> <!-- container end -->
            <!-- Weekly News Area
            ============================================ -->
             
            <!-- second content -->
             <!-- second content end -->
            <div class="container"> <!-- /.adds -->
                <div class="row">
                    
                </div>
            </div> <!-- /.adds-->
            <!-- all category  news Area
            ============================================ -->
            <section class="all-category-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">  <!-- sports -->
                            <div class="sports-inner">
                                <h3 class="category-headding ">رياضات</h3>
                                <div class="headding-border bg-color-1"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز </a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="images/sports.jpg" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                    </div>
                                    <p>للمهتمين قمنا بوضع نص لوريم إبسوم القياسي والمُستخدم منذ القرن الخامس عشر في الأسفل. وتم أيضاً توفير الأقسام 1.10.32 و 1.10.33 من "حول أقاصي الخير والشر"<a href="#">...اقرأ أكثر</a></p>
                                </div>
                            </div>
                        </div>  <!-- /.sports -->
                        <div class="col-md-4 col-sm-4">  <!-- fashion -->
                            <div class="fashion-inner">
                                <h3 class="category-headding ">موضة</h3>
                                <div class="headding-border bg-color-4"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني </a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="images/fashion.jpg" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                    </div>
                                    <p>البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل "ألدوس بايج مايكر" (Aldus PageMaker) والتي حوت أيضاً<a href="#">...اقرأ أكثر</a></p>
                                </div>
                            </div>
                        </div>  <!-- /.fashion -->
                        <div class="col-md-4 col-sm-4">  <!-- travel -->
                            <div class="travel-inner">
                                <h3 class="category-headding ">سفر</h3>
                                <div class="headding-border bg-color-3"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر </a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="images/travel.jpg" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                    </div>
                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.<a href="#">...اقرأ أكثر</a></p>
                                </div>
                            </div>
                        </div>  <!-- /.travel -->
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">  <!-- food -->
                            <div class="food-inner">
                                <h3 class="category-headding ">الأطعمة</h3>
                                <div class="headding-border bg-color-4"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص </a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="images/food.jpg" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦ 
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                    </div>
                                    <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.<a href="#">...اقرأ أكثر</a></p>
                                </div>
                            </div>
                        </div>  <!-- /.food -->		
                        <div class="col-md-4 col-sm-4">  <!-- politics -->
                            <div class="politics-inner">
                                <h3 class="category-headding ">سياسة</h3>
                                <div class="headding-border bg-color-5"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور </a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="images/politics_06.jpg" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                    </div>
                                    <p>لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال<a href="#">...اقرأ أكثر</a></p>
                                </div>
                            </div>
                        </div>  <!-- /.politics -->		
                        <div class="col-md-4 col-sm-4">  <!-- health -->
                            <div class="health-inner">
                                <h3 class="category-headding ">الصحة</h3>
                                <div class="headding-border bg-color-3"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني </a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="images/health.jpg" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                    </div>
                                    <p>للمهتمين قمنا بوضع نص لوريم إبسوم القياسي والمُستخدم منذ القرن الخامس عشر في الأسفل. وتم أيضاً توفير الأقسام 1.10.32 و 1.10.33 من "حول أقاصي الخير والشر<a href="#">...اقرأ أكثر</a></p>
                                </div>
                            </div>
                        </div>  <!-- /.health -->
                    </div>
                </div>
            </section>
            <!-- article section Area
            ============================================ -->
            <div class="lat_arti_cont_wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">  <!-- article -->	 				
                            
                            <section class="articale-inner">
                                <h3 class="category-headding ">مقالة</h3>
                                <div class="headding-border"></div>
                                <div class="row">

                                    <div id="content-slide-5" class="owlsel">
                                        <!-- item-1 -->
                                        <div class="item">
                                            <div class="row rn_block">
                                                <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s"><!-- image -->
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/articale.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-info meta-info-rn">
                                                            <div class="slide">
                                                                <a target="_blank" href="#" class="post-badge btn_five">B</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <h4><a href="#">برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم  ...</a></h4>
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"><!-- image -->
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/articale02.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-info meta-info-rn">
                                                            <div class="slide">
                                                                <a target="_blank" href="#" class="post-badge btn_three">S</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <h4><a href="#">عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع ...</a></h4>
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"><!-- image -->
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/articale03.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-info meta-info-rn">
                                                            <div class="slide">
                                                                <a target="_blank" href="#" class="post-badge btn_one">F</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <h4><a href="#">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل ...</a></h4>
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"><!-- image -->
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/articale04.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-info meta-info-rn">
                                                            <div class="slide">
                                                                <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <h4><a href="#">للمهتمين قمنا بوضع نص لوريم إبسوم القياسي والمُستخدم منذ القرن ...</a></h4>
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s"><!-- image -->
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/articale05.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-info meta-info-rn">
                                                            <div class="slide">
                                                                <a target="_blank" href="#" class="post-badge btn_four">L</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <h4><a href="#">إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص ...</a></h4>
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s"><!-- image -->
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/articale06.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-info meta-info-rn">
                                                            <div class="slide">
                                                                <a target="_blank" href="#" class="post-badge btn_two">T</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <h4><a href="#">دخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن ...</a></h4>
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- item-2 -->
                                        <div class="item">
                                            <div class="row rn_block">
                                                <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s"><!-- image -->
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/articale.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-info meta-info-rn">
                                                            <div class="slide">
                                                                <a target="_blank" href="#" class="post-badge btn_five">B</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <h4><a href="#">برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم  ...</a></h4>
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"><!-- image -->
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/articale02.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-info meta-info-rn">
                                                            <div class="slide">
                                                                <a target="_blank" href="#" class="post-badge btn_three">S</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <h4><a href="#">عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع ...</a></h4>
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"><!-- image -->
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/articale03.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-info meta-info-rn">
                                                            <div class="slide">
                                                                <a target="_blank" href="#" class="post-badge btn_one">F</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <h4><a href="#">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل ...</a></h4>
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"><!-- image -->
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/articale04.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-info meta-info-rn">
                                                            <div class="slide">
                                                                <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <h4><a href="#">للمهتمين قمنا بوضع نص لوريم إبسوم القياسي والمُستخدم منذ القرن ...</a></h4>
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s"><!-- image -->
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/articale05.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-info meta-info-rn">
                                                            <div class="slide">
                                                                <a target="_blank" href="#" class="post-badge btn_four">L</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <h4><a href="#">إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص ...</a></h4>
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s"><!-- image -->
                                                        <div class="post-thumb">
                                                            <a href="#">
                                                                <img class="img-responsive" src="images/articale06.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="post-info meta-info-rn">
                                                            <div class="slide">
                                                                <a target="_blank" href="#" class="post-badge btn_two">T</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details">
                                                        <h4><a href="#">دخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن ...</a></h4>
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </section>
                        </div>  <!-- /.article -->
                        <div class="col-sm-4 right-padding">
                            <aside>
                                <h3 class="category-headding ">فئة</h3>
                                <div class="headding-border bg-color-2"></div>
                                <div class="cats-widget">
                                    <ul>	
                                        @foreach ($categories as $category)
                                        <li class=""><a href="{{route('categories.show', ['category'=>$category->id])}}" title="Title goes here.">{{$category->category_name}}</a> <span>{{count($category->articles)}}</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </aside>
                             <!-- /.flicker widget -->
                             <aside>
                                    <h3 class="category-headding ">أرشيف</h3>
                                    <div class="headding-border bg-color-2"></div>
                                    <div class="cats-widget">
                                        <ul>	
                                            @foreach ($archives as $archive)

                                           {{setlocale(LC_TIME, 'ar_AE.utf8')}}
                                            {{$month_name = date('F', mktime(0, 0, 0, 4))  }}                                          <li class=""><a href="{{route('archives.show', ['year'=>$archive['year'] , 'month'=>date("m", strtotime($archive['month']))])}}" title="Title goes here.">{{$archive['year']}}</a> {{$archive['month']}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </aside>
                        </div>
                    </div>
                </div>
            </div>	
            <!-- footer Area
            ============================================ -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="footer-box">
                                <h3 class="category-headding">علامات شعبية</h3>
                                <div class="headding-border"></div>
                                <a class="tag" href="" title="">التعليم</a>
                                <a class="tag" href="" title="">موضة</a>
                                <a class="tag" href="" title="">خلاق</a>
                                <a class="tag" href="" title="">سم</a>
                                <a class="tag" href="" title="">تسلية</a>
                                <a class="tag" href="" title="">تكنولوجيا</a>
                                <a class="tag" href="" title="">كلية</a>
                                <a class="tag" href="" title="">ثقافة</a>
                                <a class="tag" href="" title="">مدونة</a>
                                <a class="tag" href="" title="">عمل</a>
                                <a class="tag" href="" title="">موسيقى</a>
                                <div class="newsletter-inner"> <!-- newsletter -->
                                    <h3 class="category-headding ">النشرة الإخبارية</h3>
                                    <div class="headding-border"></div>
                                    <p>أدخل عنوان بريدك الإلكتروني للحصول قائمتنا البريدية!</p>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="ادخل بريدك الإلكتروني" required="">
                                    <button type="button" class="btn btn-style">الاشتراك</button>
                                </div> <!-- /.newsletter -->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer-box"> <!-- featured news -->
                                <h3 class="category-headding ">أخبار مميزة</h3>
                                <div class="headding-border bg-color-2"></div>
                                <div class="box-item wow fadeIn" data-wow-duration="2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_01.jpg" alt="" height="80" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-1">
                                            <a href="#">رياضات</a>
                                        </h6>
                                        <h3 class="td-module-title"><a href="#">يبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص الناتح خالي</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_02.jpg" alt="" height="80" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-2">
                                            <a href="#">تكنولوجيا</a>
                                        </h6>
                                        <h3 class="td-module-title"><a href="#">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                        </div>
    
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_03.jpg" alt="" height="80" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-3">
                                            <a href="#">الصحة</a>
                                        </h6>
                                        <h3 class="td-module-title"><a href="#">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>  <!-- /.featured news -->
                        </div>
                        <div class="col-sm-4"> 
                            <div class="footer-box"> <!-- top rated  -->
                                <h3 class="category-headding">أعلى التقييمات</h3>
                                <div class="headding-border bg-color-3"></div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </td>
                                            <td><a href="#">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">هامبدن-سيدني في فيرجينيا بالبحث عن أصول</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">هنالك العديد من الأنواع المتوفرة لنصوص لوريم </a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">عليك أن تتحقق أولاً أن ليس هناك أي</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">خلافاَ للإعتقاد السائد فإن لوريم</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">هنالك العديد من الأنواع المتوفرة لنصوص لوريم </a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">عليك أن تتحقق أولاً أن ليس هناك أي</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- /.top rated  -->
                    </div><hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="footer-box footer-logo-address"> <!-- address  -->
                                <img src="images/footer-logo.png" class="img-responsive" alt="">
                                <address>
                                    14L.E Goulburn St, Sydney 2000NSW<br>
                                    Tell: 01922296392<br>
                                    Email: bdtask@gmail.com
                                </address>
                            </div> <!-- /.address  -->
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-box">
                                <h3 class="category-headding">الفئات</h3>
                                <div class="headding-border bg-color-4"></div>
                                <ul>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">النشرة الإخبارية</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">غرفة الصحافة</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">الإعلان على شبكة الإنترنت</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">لغة</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">كونها جزءا</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-box">
                                <h3 class="category-headding">الفئات الشعبية</h3>
                                <div class="headding-border bg-color-5"></div>
                                <ul>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">الطبعة الرقمية</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">خريطة الموقع</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">خريطة الموقع</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">أعط هدية</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">معلومات عنا</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-box">
                                <h3 class="category-headding ">الفئات الشعبية</h3>
                                <div class="headding-border"></div>
                                <ul>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">النشرة الإخبارية</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">غرفة الصحافة</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">الإعلان على شبكة الإنترنت</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">لغة</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">كونها جزءا</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
   
            @endsection
    