<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/campaign.css" rel="stylesheet">
</head>
<body class="sub campaign">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    <main id="content" class="video-view">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li><a href="#">CAMPAIGN</a></li>
                    <li class="active">DIARY</li>
                </ol>
            </div>
            <div class="campaign-view">
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <div class="lnb">
                            <h2 class="visible-lg">CAMPAIGN</h2>
                            <ul>
                                <li class="active"><a href="#">DIARY</a></li>
                                <li><a href="#">CELEB</a></li>
                                <li><a href="#">VIDEO</a></li>
                                <li><a href="#">LOOKBOOK</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <div class="page-header">
                            <h2>WHAT'S YOUR SIGN?</h2>
                            <p class="font-lato">2016.01.01</p>
                        </div>
                        <article class="video-frame">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_mCJXVKksmw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="feature">
                                As Capricorns, Kate Moss, Betty White, 
                                Michelle Obama, Muhammad Ali and Martin
                                Luther King, Jr. are all celebrating their birthdays in
                                the upcoming month. Here, our astrology expert
                                Susie Cox tells us what we can expec
                                t under this sign(December 21st – January 19th).
                            </div>
                        </article>
                        <div class="btn-area">
                            <p>
                                <a href="/campaign/video_list.php" class="btn btn-white btn-lg" role="button">목록보기</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>