<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    <main id="content" class="basket">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li><a href="/mypage/my_page.php">MYPAGE</a></li>
                    <li class="active">SHOPPING CART</li>
                </ol>
            </div>
            <div class="basket-info">
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <div class="lnb">
                            <h2 class="visible-lg">MY PAGE</h2>
                            <ul>
                                <li><a href="#">ORDERS</a></li>
                                <li><a href="#">CART</a></li>
                                <li><a href="#">PROFILE</a></li>
                                <li><a href="#">POINT</a></li>
                                <li><a href="#">COUPON</a></li>
                                <li><a href="#">Q&amp;A</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <div class="page-header">
                            <h2>SHOPPING CART</h2>
                        </div>
                        <div class="my-basket">
                            <h3>ITEMS</h3>
                            <ul class="basket-list">
                                <li>
                                    <p class="product-img">
                                        <img src="/assets/images/mypage/product_item_img01.gif" class="img-responsive" alt="구매상품 이미지">
                                    </p>
                                    <ul class="product-info">
                                        <li class="name-color">
                                            <h4>PHF-5089D Col.4-1</h4>
                                            <dl>
                                                <dt>COLOR</dt>
                                                <dd>WHITE</dd>
                                            </dl>
                                        </li>
                                        <li class="quantity">1</li>
                                        <li class="modify">
                                            <a href="#">EDIT</a>
                                            <a href="#">DELETE</a>
                                        </li>
                                        <li class="amount">204,000</li>
                                    </ul>
                                </li>
                            </ul>
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