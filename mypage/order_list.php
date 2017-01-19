<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/mypage.css" rel="stylesheet">
</head>
<body class="sub mypage">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    <main id="content" class="order-list">
        <div class="container">
            <!-- page-path -->
            <div class="page-path">
                <ol class="breadcrumb">
                    <li><a href="/"><i class="icon-home"></i></a></li>
                    <li><a href="/mypage/my_page.php">MYPAGE</a></li>
                    <li class="active">ORDER LIST</li>
                </ol>
            </div>
            <div class="my-order">
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <div class="lnb">
                            <h2 class="visible-lg">MY PAGE</h2>
                            <ul>
                                <li class="active"><a href="#">ORDERS</a></li>
                                <li><a href="#">CART</a></li>
                                <li><a href="#">PROFILE</a></li>
                                <li><a href="#">POINT</a></li>
                                <li><a href="#">COUPON</a></li>
                                <li><a href="#">Q&amp;A</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <div class="my-order-list">
                            <div class="page-header mypage-header">
                                <h2>주문배송내역조회</h2>
                                <p>
                                    결제는 [은행결제 / 카드결제 / 핸드폰결제 / 인터넷뱅킹 / 포인트결제] 중 원하시는 방법으로 이용할 수 있습니다.<br class="hidden-xs">
                                    입금이 확인된 주문건은 발송준비중 코너로 옮겨집니다.
                                </p>
                            </div>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-1">
                                        <div class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                주문번호 <p class="order-num">1234567890-12</p>
                                                <span class="close-text">상세 열기<i class="icon-down-circle"></i></span>
                                                <span class="open-text">상세 닫기<i class="icon-up-circle"></i></span>
                                            </a>
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
                                        </div>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-1">
                                        <div class="panel-body">
                                            <div class="table-wrap">
                                                <h3>배송회원 정보</h3>
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
                                            <div class="table-wrap">
                                                <h3>배송회원 정보</h3>
                                                <table class="table table-bordered">
                                                   <colgroup>
                                                       <col>
                                                       <col>
                                                   </colgroup>
                                                    <tbody>
                                                        <tr>
                                                            <th>주문상태</th>
                                                            <td>입금확인 중</td>
                                                        </tr>
                                                        <tr>
                                                            <th>상품명</th>
                                                            <td>PJF-5089D COL.4-1</td>
                                                        </tr>
                                                        <tr>
                                                            <th>배송사</th>
                                                            <td>대한통운</td>
                                                        </tr>
                                                        <tr>
                                                            <th>송장번호</th>
                                                            <td>1234567890</td>
                                                        </tr>
                                                        <tr>
                                                            <th>도착예정일</th>
                                                            <td>2017.01.01</td>
                                                        </tr>
                                                        <tr>
                                                            <th>결제방식</th>
                                                            <td>무통장입금</td>
                                                        </tr>
                                                        <tr>
                                                            <th>남기는 글</th>
                                                            <td>남기는 글 노출영역</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="table-wrap">
                                                <h3>현금영수증 발행정보</h3>
                                                <table class="table table-bordered">
                                                   <colgroup>
                                                       <col>
                                                       <col>
                                                   </colgroup>
                                                    <tbody>
                                                        <tr>
                                                            <th>현금영수증</th>
                                                            <td>발행요청 안함</td>
                                                        </tr>
                                                        <tr>
                                                            <th>발행용도</th>
                                                            <td>정보없음</td>
                                                        </tr>
                                                        <tr>
                                                            <th>발행방식</th>
                                                            <td>
                                                                <dl class="cash-receipt">
                                                                    <dt>정보없음</dt>
                                                                    <dd>정보없음</dd>
                                                                </dl>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>발행결과</th>
                                                            <td>발행요청 안함</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="payment">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-8">
                                                        <ul class="sum-list">
                                                            <li>
                                                                <dl class="sum">
                                                                    <dt>상품구매금액</dt>
                                                                    <dd>123,456원</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl class="sum">
                                                                    <dt>총배송비</dt>
                                                                    <dd>0원</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl class="sum">
                                                                    <dt>사용포인트</dt>
                                                                    <dd>300p</dd>
                                                                </dl>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4">
                                                        <dl class="total">
                                                            <dt>결제될 주문 총금액</dt>
                                                            <dd>123,150원</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-2">
                                        <div class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                주문번호 <p class="order-num">1234567890-12</p>
                                                <span class="close-text">상세 열기<i class="icon-down-circle"></i></span>
                                                <span class="open-text">상세 닫기<i class="icon-up-circle"></i></span>
                                            </a>
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
                                        </div>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
                                        <div class="panel-body">
                                          <div class="table-wrap">
                                                <h3>배송회원 정보</h3>
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
                                            <div class="table-wrap">
                                                <h3>배송회원 정보</h3>
                                                <table class="table table-bordered">
                                                   <colgroup>
                                                       <col>
                                                       <col>
                                                   </colgroup>
                                                    <tbody>
                                                        <tr>
                                                            <th>주문상태</th>
                                                            <td>입금확인 중</td>
                                                        </tr>
                                                        <tr>
                                                            <th>상품명</th>
                                                            <td>PJF-5089D COL.4-1</td>
                                                        </tr>
                                                        <tr>
                                                            <th>배송사</th>
                                                            <td>대한통운</td>
                                                        </tr>
                                                        <tr>
                                                            <th>송장번호</th>
                                                            <td>1234567890</td>
                                                        </tr>
                                                        <tr>
                                                            <th>도착예정일</th>
                                                            <td>2017.01.01</td>
                                                        </tr>
                                                        <tr>
                                                            <th>결제방식</th>
                                                            <td>무통장입금</td>
                                                        </tr>
                                                        <tr>
                                                            <th>남기는 글</th>
                                                            <td>남기는 글 노출영역</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="table-wrap">
                                                <h3>현금영수증 발행정보</h3>
                                                <table class="table table-bordered">
                                                   <colgroup>
                                                       <col>
                                                       <col>
                                                   </colgroup>
                                                    <tbody>
                                                        <tr>
                                                            <th>현금영수증</th>
                                                            <td>발행요청 안함</td>
                                                        </tr>
                                                        <tr>
                                                            <th>발행용도</th>
                                                            <td>정보없음</td>
                                                        </tr>
                                                        <tr>
                                                            <th>발행방식</th>
                                                            <td>
                                                                <dl class="cash-receipt">
                                                                    <dt>정보없음</dt>
                                                                    <dd>정보없음</dd>
                                                                </dl>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>발행결과</th>
                                                            <td>발행요청 안함</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="payment">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-8">
                                                        <ul class="sum-list">
                                                            <li>
                                                                <dl class="sum">
                                                                    <dt>상품구매금액</dt>
                                                                    <dd>123,456원</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl class="sum">
                                                                    <dt>총배송비</dt>
                                                                    <dd>0원</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl class="sum">
                                                                    <dt>사용포인트</dt>
                                                                    <dd>300p</dd>
                                                                </dl>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4">
                                                        <dl class="total">
                                                            <dt>결제될 주문 총금액</dt>
                                                            <dd>123,150원</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading-3">
                                        <div class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                주문번호 <p class="order-num">1234567890-12</p>
                                                <span class="close-text">상세 열기<i class="icon-down-circle"></i></span>
                                                <span class="open-text">상세 닫기<i class="icon-up-circle"></i></span>
                                            </a>
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
                                        </div>
                                    </div>
                                    <div id="collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-3">
                                        <div class="panel-body">
                                            <div class="table-wrap">
                                                <h3>배송회원 정보</h3>
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
                                            <div class="table-wrap">
                                                <h3>배송회원 정보</h3>
                                                <table class="table table-bordered">
                                                   <colgroup>
                                                       <col>
                                                       <col>
                                                   </colgroup>
                                                    <tbody>
                                                        <tr>
                                                            <th>주문상태</th>
                                                            <td>입금확인 중</td>
                                                        </tr>
                                                        <tr>
                                                            <th>상품명</th>
                                                            <td>PJF-5089D COL.4-1</td>
                                                        </tr>
                                                        <tr>
                                                            <th>배송사</th>
                                                            <td>대한통운</td>
                                                        </tr>
                                                        <tr>
                                                            <th>송장번호</th>
                                                            <td>1234567890</td>
                                                        </tr>
                                                        <tr>
                                                            <th>도착예정일</th>
                                                            <td>2017.01.01</td>
                                                        </tr>
                                                        <tr>
                                                            <th>결제방식</th>
                                                            <td>무통장입금</td>
                                                        </tr>
                                                        <tr>
                                                            <th>남기는 글</th>
                                                            <td>남기는 글 노출영역</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="table-wrap">
                                                <h3>현금영수증 발행정보</h3>
                                                <table class="table table-bordered">
                                                   <colgroup>
                                                       <col>
                                                       <col>
                                                   </colgroup>
                                                    <tbody>
                                                        <tr>
                                                            <th>현금영수증</th>
                                                            <td>발행요청 안함</td>
                                                        </tr>
                                                        <tr>
                                                            <th>발행용도</th>
                                                            <td>정보없음</td>
                                                        </tr>
                                                        <tr>
                                                            <th>발행방식</th>
                                                            <td>
                                                                <dl class="cash-receipt">
                                                                    <dt>정보없음</dt>
                                                                    <dd>정보없음</dd>
                                                                </dl>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>발행결과</th>
                                                            <td>발행요청 안함</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="payment">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-8">
                                                        <ul class="sum-list">
                                                            <li>
                                                                <dl class="sum">
                                                                    <dt>상품구매금액</dt>
                                                                    <dd>123,456원</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl class="sum">
                                                                    <dt>총배송비</dt>
                                                                    <dd>0원</dd>
                                                                </dl>
                                                            </li>
                                                            <li>
                                                                <dl class="sum">
                                                                    <dt>사용포인트</dt>
                                                                    <dd>300p</dd>
                                                                </dl>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4">
                                                        <dl class="total">
                                                            <dt>결제될 주문 총금액</dt>
                                                            <dd>123,150원</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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