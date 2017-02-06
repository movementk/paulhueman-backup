<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/campaign.css" rel="stylesheet">
</head>
<body class="sub campaign">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    <main id="content" class="look-book">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li><a href="#">CAMPAIGN</a></li>
                    <li class="active">LOOKBOOK</li>
                </ol>
            </div>
            <div class="lookbook-list">
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <div class="lnb">
                            <h2 class="visible-lg">CAMPAIGN</h2>
                            <ul>
                                <li><a href="#">DIARY</a></li>
                                <li><a href="#">CELEB</a></li>
                                <li><a href="#">VIDEO</a></li>
                                <li class="active"><a href="#">LOOKBOOK</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <div class="lookbook-head">
                            <figure>
                                <img class="img-responsive visible-xs" src="/assets/images/campaign/img_lookbook_header_xs.jpg">
                                <img class="img-responsive visible-sm" src="/assets/images/campaign/img_lookbook_header_sm.jpg">
                                <img class="img-responsive visible-lg visible-md" src="/assets/images/campaign/img_lookbook_header_lg.jpg">
                                <figcaption>
                                    <h1>MODERN JOURNEY <br>LOOKBOOK #5 SUMMER 2017</h1>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="lookbook-body">
                            <div class="lookbook-item lookbook-type-1">
                                <figure>
                                    <img class="img-responsive visible-xs" src="/assets/images/campaign/img_lookbook_figure_1_xs.jpg">
                                    <img class="img-responsive visible-sm" src="/assets/images/campaign/img_lookbook_figure_1_sm.jpg">
                                    <img class="img-responsive visible-md visible-lg" src="/assets/images/campaign/img_lookbook_figure_1_lg.jpg">
                                    <figcaption>
                                        <h5>PHS-168A Col.1A</h5>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="lookbook-item lookbook-type-2">
                                <figure>
                                    <img class="img-responsive visible-xs" src="/assets/images/campaign/img_lookbook_figure_2_xs.jpg">
                                    <img class="img-responsive visible-sm" src="/assets/images/campaign/img_lookbook_figure_2_sm.jpg">
                                    <img class="img-responsive visible-md visible-lg" src="/assets/images/campaign/img_lookbook_figure_2_lg.jpg">
                                    <figcaption>
                                        <h5>PHS-1095A Col.5</h5>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="lookbook-item lookbook-type-3">
                                <figure>
                                    <img class="img-responsive visible-xs" src="/assets/images/campaign/img_lookbook_figure_3_xs.jpg">
                                    <img class="img-responsive visible-sm" src="/assets/images/campaign/img_lookbook_figure_3_sm.jpg">
                                    <img class="img-responsive visible-md visible-lg" src="/assets/images/campaign/img_lookbook_figure_3_lg.jpg">
                                    <figcaption>
                                        <h5>PHS-1095A Col.5</h5>
                                    </figcaption>
                                </figure>
                                <figure>
                                    <img class="img-responsive visible-xs" src="/assets/images/campaign/img_lookbook_figure_4_xs.jpg">
                                    <img class="img-responsive visible-sm" src="/assets/images/campaign/img_lookbook_figure_4_sm.jpg">
                                    <img class="img-responsive visible-md visible-lg" src="/assets/images/campaign/img_lookbook_figure_4_lg.jpg">
                                    <figcaption>
                                        <h5>PHS-1100A Col.5</h5>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="lookbook-item lookbook-type-1">
                                <figure>
                                    <img class="img-responsive visible-xs" src="/assets/images/campaign/img_lookbook_figure_5_xs.jpg">
                                    <img class="img-responsive visible-sm" src="/assets/images/campaign/img_lookbook_figure_5_sm.jpg">
                                    <img class="img-responsive visible-md visible-lg" src="/assets/images/campaign/img_lookbook_figure_5_lg.jpg">
                                    <figcaption>
                                        <h5>PHS-1100A Col.5</h5>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="lookbook-item lookbook-type-4">
                                <figure>
                                    <img class="img-responsive visible-xs" src="/assets/images/campaign/img_lookbook_figure_6_xs.jpg">
                                    <img class="img-responsive visible-sm" src="/assets/images/campaign/img_lookbook_figure_6_sm.jpg">
                                    <img class="img-responsive visible-md visible-lg" src="/assets/images/campaign/img_lookbook_figure_6_lg.jpg">
                                    <figcaption>
                                        <h5>PHS-1100A Col.5</h5>
                                    </figcaption>
                                </figure>
                                <figure>
                                    <img class="img-responsive visible-xs" src="/assets/images/campaign/img_lookbook_figure_7_xs.jpg">
                                    <img class="img-responsive visible-sm" src="/assets/images/campaign/img_lookbook_figure_7_sm.jpg">
                                    <img class="img-responsive visible-md visible-lg" src="/assets/images/campaign/img_lookbook_figure_7_lg.jpg">
                                    <figcaption>
                                        <h5>PHS-1100A Col.5</h5>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="lookbook-foot">
                            <p><a href="#">더보기</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script>
        (function($) {
            $(window).on('scroll', function() {
                $('.lookbook-item figure').each(function(index, elem) {
                    if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 2)) {
                        $(elem).addClass('on');
                    }
                });
            });
        })(jQuery);
    </script>
</body>
</html>