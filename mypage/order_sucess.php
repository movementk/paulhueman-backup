<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    <main id="content" class="order-sucess">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li><a href="/mypage/my_page.php">MYPAGE</a></li>
                    <li class="active">ORDER LIST</li>
                </ol>
            </div>
            <div class="order-details">
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <div class="lnb">
                            <h2 class="visible-lg">MY PAGE</h2>
                            <ul>
                                <li><a href="#">ORDERS</a></li>
                                <li class="active"><a href="#">CART</a></li>
                                <li><a href="#">PROFILE</a></li>
                                <li><a href="#">POINT</a></li>
                                <li><a href="#">COUPON</a></li>
                                <li><a href="#">Q&amp;A</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <div class="content-header">
                            <h2>고객님의 주문이 완료되었습니다.</h2>
                            <p>
                                주문내역 및 배송에 관한 안내는<br class="visible-xs">
                                주문조회 를 통하여 확인 가능합니다.
                            </p>
                            <div class="order-num-date">
                                <dl>
                                    <dt>주문번호</dt>
                                    <dd class="order-num">20160801-0000089</dd>
                                    <dt>주문일자</dt>
                                    <dd class="order-date">2016-08-01 15:27:45</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="detailed-info">
                            <h3>
                                주문번호 <span class="order-num">1234567890-12</span>
                            </h3>
                            <div class="ordered-product">
                                <div class="product-img">
                                    <p>
                                        <img src="/assets/images/mypage/product_item_img01.gif" class="img-responsive" alt="주문한 상품 이미지">
                                    </p>
                                </div>
                                <div class="product-details">
                                    <p class="product-code">PHF-5089D COL.4-1</p>
                                    <dl class="inline-dl">
                                        <dt>COLOR</dt>
                                        <dd>WHITE</dd>
                                    </dl>
                                </div>
                            </div>
                            <dl class="table-dl">
                                <dt class="first">주문일자</dt>
                                <dd class="date first">2016-03-09 10:54:46</dd>
                                <dt>입금현황</dt>
                                <dd>미입금</dd>
                                <dt class="last">수량</dt>
                                <dd class="last">1개</dd>
                            </dl>
                            <div class="table-wrap">
                                <h4>배송회원 정보</h4>
                                <table class="table table-bordered">
                                   <colgroup>
                                       <col>
                                       <col>
                                   </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>주문자</th>
                                            <td>무브먼트케이</td>
                                        </tr>
                                        <tr>
                                            <th>주문자 휴대폰</th>
                                            <td>010-1234-1234</td>
                                        </tr>
                                        <tr>
                                            <th>주문자 전화</th>
                                            <td>02-123-1234</td>
                                        </tr>
                                        <tr>
                                            <th>주문자 이메일</th>
                                            <td>mk_manager@mkdesign.co.kr</td>
                                        </tr>
                                        <tr>
                                            <th>입금은행정보</th>
                                            <td>하나은행 / 123-45678-98-01235 / 예금주 : 홍길동</td>
                                        </tr>
                                        <tr>
                                            <th>받으시는분</th>
                                            <td>무브먼트케이</td>
                                        </tr>
                                        <tr>
                                            <th>연락처</th>
                                            <td>010-1234-5678</td>
                                        </tr>
                                        <tr>
                                            <th>배송지 주소</th>
                                            <td>
                                                01234 서울시 서초구 양재동 120-1<br>
                                                <p class="highway-addr">(도로명:)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>요청사항</th>
                                            <td>요청사항 노출영역</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-sm btn-gray" role="button">쇼핑계속하기</a>
                                    <a href="#" class="btn btn-sm btn-white" role="button">주문확인하기</a>
                                </p>
                            </div>
                            <div class="attention">
                                <h5>이용안내</h5>
                                <p>
                                    비회원 주문의 경우, 주문번호를 꼭 기억하세요. 주문번호로 주문조회가 가능합니다.<br>
                                    배송은 결제완료 후 지역에 따라 2일 ~ 3일 가량이 소요됩니다.  상품별 자세한 배송과정은 주문조회를 통하여 조회하실 수 있습니다.<br>
                                    주문의 취소 및 환불, 교환에 관한 사항은 이용안내의 내용을 참고하십시오.
                                </p>
                            </div>
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