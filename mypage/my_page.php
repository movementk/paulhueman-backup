<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    <main id="content" class="my-page">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li class="active">MYPAGE</li>
                </ol>
            </div>
            <div class="page-header">
                <h2>MY PAGE</h2>
            </div>
            <article class="mypage-info">
                <div class="article-header">
                    <dl>
                        <dt>
                            홍길동 님
                        </dt>
                        <dd>
                            적립포인트 
                            <ul>
                                <li>0 POINT</li>
                                <li>1 COUPON</li>
                            </ul>
                        </dd>
                    </dl>
                </div>
                <div class="article-content">
                    <ul class="my-list">
                        <li>
                            <a href="#">ORDER LIST</a>
                        </li>
                        <li>
                            <a href="#">EDIT AN ACCOUNT</a>
                        </li>
                        <li>
                            <a href="#">POINT</a>
                        </li>
                        <li>
                            <a href="#">1:1 INQUIRY</a>
                        </li>
                    </ul>
                </div>
            </article>
        </div><!--// Container -->
    </main><!--// Main Content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>