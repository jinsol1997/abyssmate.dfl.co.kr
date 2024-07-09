<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta property="og:type" content="website">
    <meta name="robots" content="ALL">

    <title>어비스메이트</title>

    <script type="text/javascript" src="/public/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/public/js/jquery-migrate-3.1.0.js"></script>
    <script type="text/javascript" src="/public/js/jquery.ba-throttle-debounce.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/js/swiper.min.css">
    <script type="text/javascript" src="/public/js/swiper.min.js"></script>
    <script type="text/javascript" src="/public/js/Carousel.js"></script>
    <script type="text/javascript" src="/public/js/sub.mo.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/css/font.css">
    <link rel="stylesheet" type="text/css" href="/public/css/sub.mo.css">
</head>

<body class="">
<div id="bodyWrapper" class="sub1">
    <div id="mGnb" class="isOpen">
        <div class="navContainer">
            <a href="/" class="logo"><span class="blind">어비스메이트 메인 바로가기</span></a>
            <a href="javascript:void(0);" class="btnGnbOpen"><span class="blind">GNB 열기</span></a>
        </div>
        <div class="gnbWrapper">
            <nav class="main">
                <ul class="mainMenu">
                    <li class="mn0"><a href="/#stg0">메인</a></li>
                    <li class="mn1"><a href="/#stg1">사전예약</a></li>
                    <li class="mn2 toggleOn">
                        <a href="javascript:void(0)">게임소개</a>
                        <nav class="sub">
                            <li class="mn3"><a href="#stg3" target="_self">세계관</a></li>
                            <li class="mn4"><a href="#stg4" target="_self">캐릭터</a></li>
                            <li class="mn5"><a href="#stg5" target="_self">게임특징</a></li>
                            <li class="mn6"><a href="#stg6" target="_self">미디어</a></li>
                        </nav>
                    </li>
                    <li class="mn7"><a href="/#stg7">이벤트</a></li>
                </ul>
            </nav>
            <div class="bottomMenu">
                <ul class="snsList">
                    <li><a href="#" class="sns1"><span class="blind">네이버 카페</span></a></li>
                    <li><a href="#" class="sns2"><span class="blind">유튜브</span></a></li>
                    <li><a href="#" class="sns3"><span class="blind">X</span></a></li>
                </ul>
                <ul class="shareList">
                    <li><a href="#" class="share1"><span class="blind">URL 링크 공유하기</span></a></li>
                    <li><a href="#" class="share2"><span class="blind">URL 복사</span></a></li>
                    <li><a href="#" class="share3"><span class="blind">X에 포스트하기</span></a></li>
                </ul>
            </div>
            <a href="javascript:void(0);" class="btnGnbClose"><span class="blind">GNB 닫기</span></a>
        </div>
    </div>
    <div id="content">
        <div id="stg3" class="section animate">
            <div class="fade"></div>
            <div class="reset">
                <div class="worldView">
                    <div class="crawl">
                        <p class="mb80">"여기는 어비스”</p>
                        <p>어비스는 신들이 너를 봉인하기 위해 만든, 거대한 탑이야.</p>
                        <p>하지만 사신인 내가 특별히 기회를 주지.</p>
                        <p>이 높은 어비스를 탈출해봐.</p>
                        <p>그렇게 하면 네 기억을 돌려주고, 원래 있던 곳에서 부활할 수 있게 해줄게.</p>

                        <p class="mb120">자, 그럼...</p>
                        <p class="big">어비스에 온 걸, 진심으로 환영한다</p>
                    </div>
                </div>

            </div>
        </div>
        <div id="stg4" class="section animate">
            <div class="characterSlider">
                <div class="chaSliderWrapper">
                    <div class="chaFile">
                        <div class="pic">
                        </div>
                        <div class="infBox">
                            <p class="inf inf1">
                                <span class="name1">아미</span>
                                <span class="name2">Army</span>
                            </p>
                            <div class="inf inf2">
                                    <span class="field fd1">
                                    </span>
                                <span class="field fd2">
                                    </span>
                                <span class="field fd3">
                                    </span>
                                <span class="field fd4">
                                    </span>
                                <span class="field fd5">
                                    </span>
                                <span class="field fd6">
                                    </span>
                            </div>
                            <p class="inf inf3">교육자의 위치는 언제나 어렵지.
                                제자 앞에서는 늘 완벽해야 하니까.</p>
                            <div class="vocal">
                                <div class="inf inf4">
                                    <button class="btnAudioPlay">목소리 듣기</button>
                                    <audio src="" id="vcSource"></audio>
                                    <p class="cv"></p>
                                    <div class="toggle">
                                        <button class="swch kr">KR</button>
                                        <button class="swch jp">JP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thumbList">
                    <button class="chaThumb isActive" data="0"><img src="/public/images/character/thumb_01.png"
                                                                    alt=""></button>
                    <button class="chaThumb" data="1"><img src="/public/images/character/thumb_02.png" alt=""></button>
                    <button class="chaThumb" data="2"><img src="/public/images/character/thumb_03.png" alt=""></button>
                    <button class="chaThumb" data="3"><img src="/public/images/character/thumb_04.png" alt=""></button>
                    <button class="chaThumb" data="4"><img src="/public/images/character/thumb_comming.png"
                                                           alt=""></button>
                </div>
                <div class="wpCategoryTab">
                    <a href="javascript:void(0);" class="wp1 isActive" data="0">
                        <span class="ic"></span>
                        <span class="t">검</span>
                    </a>
                    <a href="javascript:void(0);" class="wp2" data="4">
                        <span class="ic"></span>
                        <span class="t">총</span>
                    </a>
                    <a href="javascript:void(0);" class="wp3" data="3">
                        <span class="ic"></span>
                        <span class="t">책</span>
                    </a>
                    <a href="javascript:void(0);" class="wp4" data="2">
                        <span class="ic"></span>
                        <span class="t">지팡이</span>
                    </a>
                    <a href="javascript:void(0);" class="wp5" data="1">
                        <span class="ic"></span>
                        <span class="t">둔기</span>
                    </a>
                </div>
                <button class="btnPrev"></button>
                <button class="btnNext"></button>
            </div>
        </div>
        <div id="stg5" class="section animate">
            <div class="reset">
                <div class="gallaryWrap">
                    <a href="javascript:imgView();" class="frame" id="gwTarget" data-roll=""><span class="blind">이미지
                                크게보기</span></a>
                    <div class="flipster">
                        <ul class="flip-items">
                            <li id="1"> <img src="/public/images/slider/img_01.jpg" width="100%" alt=""></li>
                            <li id="2"> <img src="/public/images/slider/img_02.jpg" width="100%" alt=""></li>
                            <li id="3"> <img src="/public/images/slider/img_03.jpg" width="100%" alt=""></li>
                            <li id="4"> <img src="/public/images/slider/img_04.jpg" width="100%" alt=""></li>
                            <li id="5"> <img src="/public/images/slider/img_05.jpg" width="100%" alt=""></li>
                            <li id="6"> <img src="/public/images/slider/img_06.jpg" width="100%" alt=""></li>
                            <li id="7"> <img src="/public/images/slider/img_07.jpg" width="100%" alt=""></li>
                            <li id="8"> <img src="/public/images/slider/img_08.jpg" width="100%" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="stg6" class="section animate">
            <div class="tab">
                <a href="javascript:void(0);">영상</a>
                <a href="javascript:void(0);" class="isActive">이미지</a>
                <a href="javascript:void(0);">디지털 굿즈</a>
            </div>
            <div class="tabCont">
                <div class="myVdoWrapper">
                    <div class="t"></div>
                    <div class="l"></div>
                    <div class="r"></div>
                    <div class="b"></div>
                    <div id="myVdoSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video-container">
                                    <div class="yt-player" data-id="R514wlTL-OY"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-container">
                                    <div class="yt-player" data-id="KNexS61fjus"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-container">
                                    <div class="yt-player" data-id="6QbrCY-IOvs"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-container">
                                    <div class="yt-player" data-id="phuiiNCxRMg"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-container">
                                    <div class="yt-player" data-id="ToASX6axGuw"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-container">
                                    <div class="yt-player" data-id="Z4qVfCi_lUI"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-video-prev"></div>
                    <div class="swiper-video-next"></div>
                    <div class="mdBox">
                        <div id="myVdoSwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://i.ytimg.com/vi/zIlCcVyl4Cw/hqdefault.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://i.ytimg.com/vi/zIlCcVyl4Cw/hqdefault.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://i.ytimg.com/vi/zIlCcVyl4Cw/hqdefault.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://i.ytimg.com/vi/zIlCcVyl4Cw/hqdefault.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://i.ytimg.com/vi/zIlCcVyl4Cw/hqdefault.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://i.ytimg.com/vi/zIlCcVyl4Cw/hqdefault.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabCont isActive">
                <div class="mediaWrap">
                    <a href="javascript:imgView2();" class="frame" id="gwTarget2" data-roll=""><span
                            class="blind">이미지 크게보기</span></a>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/public/images/slider/slider2_img1_2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/public/images/slider/slider2_img2_2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/public/images/slider/slider2_img3_2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/public/images/slider/slider2_img4_2.jpg" alt="">
                        </div>
                    </div>
                    <div class="gallary-pagination"></div>
                    <div class="gallary-prev"></div>
                    <div class="gallary-next"></div>
                </div>
                <div class="mdBox">
                    <div class="mediaThumbWrap">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/public/images/slider/slider2_img1_2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/public/images/slider/slider2_img2_2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/public/images/slider/slider2_img3_2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/public/images/slider/slider2_img4_2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabCont">
                <div class="digitalDownload">
                    <a href="#" download="" class="frame" id="downloadLink"></a>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#test1"><img src="/public/images/slider/slider3_img8_2.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#test2"><img src="/public/images/slider/slider3_img7_2.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#test3"><img src="/public/images/slider/slider3_img6_2.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#test4"><img src="/public/images/slider/slider3_img5_2.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#test5"><img src="/public/images/slider/slider3_img4_2.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#test6"><img src="/public/images/slider/slider3_img3_2.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#test7"><img src="/public/images/slider/slider3_img2_2.jpg" alt=""></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#test8"><img src="/public/images/slider/slider3_img1_2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="gallary-pagination"></div>
                    <div class="gallary-prev"></div>
                    <div class="gallary-next"></div>
                </div>
                <div class="mdBox">
                    <div class="ddThumbWrap">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/public/images/slider/slider3_img8_2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/public/images/slider/slider3_img7_2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/public/images/slider/slider3_img6_2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/public/images/slider/slider3_img5_2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/public/images/slider/slider3_img4_2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/public/images/slider/slider3_img3_2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/public/images/slider/slider3_img2_2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/public/images/slider/slider3_img1_2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="mskChain"></div>
        </div>
        <div class="footerWrapper animate">
            <footer class="footer">
                <div class="company">
                    <a href="#"><img src="/public/images/company_01.png" alt=""></a><a href="#"><img
                            src="/public/images/company_02.png" alt=""></a>
                </div>
                <div class="footerLinks"><a href="#">이용약관</a><span class="bar"></span><a href="#">개인정보처리방침</a></div>
                <div class="copyright">&#169; 2024 DRAGONFLY GF CO., LTD. &amp; &#169; 2024 FUNCREW inc. ALL RIGHTS
                </div>
            </footer>
        </div>
    </div>
</div>

<div class="modalDimmed" id="media1">
    <div class="lyrMediaSlide">
        <div class="mediaWrapper" id="imgViewer">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/public/images/slider/img_01.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/public/images/slider/img_02.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/public/images/slider/img_03.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/public/images/slider/img_04.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/public/images/slider/img_05.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/public/images/slider/img_06.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/public/images/slider/img_07.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/public/images/slider/img_08.jpg" alt="">
                </div>
            </div>
            <div class="gallary-prev"></div>
            <div class="gallary-next"></div>
            <a href="javascript:closeImgView();" class="btnCloseLayer"><span class="blind">창 닫기</span></a>
        </div>
    </div>
</div>


<div class="modalDimmed" id="media2">
    <div class="lyrMediaSlide">
        <div class="mediaWrapper" id="imgViewer2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/public/images/slider/slider2_img1_re.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/public/images/slider/slider2_img2_re.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/public/images/slider/slider2_img3_re.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/public/images/slider/slider2_img4_re.jpg" alt="">
                </div>
            </div>
            <div class="gallary-prev"></div>
            <div class="gallary-next"></div>
            <a href="javascript:closeImgView2();" class="btnCloseLayer"><span class="blind">창 닫기</span></a>
        </div>
    </div>
</div>

<script>
    // 이미지겔러리
    var imgSwiper2;


    var flipContainer = $('.flipster'),
        flipItemContainer = flipContainer.find('.flip-items'),
        flipItem = flipContainer.find('li');

    flipContainer.flipster({
        itemContainer: flipItemContainer,
        itemSelector: flipItem,
        loop: 2,
        start: 2,
        style: 'infinite-carousel',
        spacing: 0,
        scrollwheel: false,
        nav: 'after',
        buttons: true
    });

    imgSwiper2 = new Swiper('#imgViewer', {
        loop: false,
        speed: 500,
        spaceBetween: 1000,
        observer: true,
        autoHeight: true,
        navigation: {
            nextEl: '#imgViewer .gallary-next',
            prevEl: '#imgViewer .gallary-prev',
        },
    });

    function imgView() {
        var last = $(".flipster__container").find(".flipster__item").length;
        var slide = $(".flipster__container").find(".flipster__item");
        slide.each(function (i) {
            if ($(this).css("zIndex") == 20) {
                imgSwiper2.update();
                imgSwiper2.slideTo(i);
            }
        });
        $("#media1").addClass('isActive');
        setTimeout(function () {
            $(".lyrMediaSlide").delay(300).css("opacity", 1);
        }, 300);
    }

    function closeImgView() {
        $("#media1").removeClass("isActive");
    }
    // 이미지겔러리
    var swiper1;
    var swiper1Thumb;
    var swiper2;
    var swiper3;
    var swiper3Thumb;
    swiper1Thumb = new Swiper(".mediaThumbWrap", {
        loop: false,
        observer: true,
        spaceBetween: 10,
        slidesPerView: 'auto',
        centeredSlides: true,
        watchSlidesProgress: true,
    });
    swiper1 = new Swiper('.mediaWrap', {
        loop: false,
        speed: 500,
        observer: true,
        spaceBetween: 540,
        effect: 'coverflow',
        centeredSlides: true,
        slidesPerView: 'auto',
        thumbs: {
            swiper: swiper1Thumb,
        },
        coverflowEffect: {
            rotate: 0,
            stretch: 80,
            depth: 400,
            modifier: 1,
            slideShadows: false,
        },
        navigation: {
            nextEl: '.mediaWrap .gallary-next',
            prevEl: '.mediaWrap .gallary-prev',
        },
        on: {
            init: function () {
                document.getElementById("gwTarget2").setAttribute("data-roll", this.realIndex);
            },
            slideChange: function () {
                document.getElementById("gwTarget2").setAttribute("data-roll", this.realIndex);
            }
        },

    });

    //  디지털 다운로드

    var cont = document.getElementsByClassName('digitalDownload')[0];
    var wrapper = cont.getElementsByClassName('swiper-wrapper')[0];
    swiper2 = new Swiper('#imgViewer2', {
        loop: false,
        speed: 500,
        spaceBetween: 1000,
        observer: true,
        navigation: {
            nextEl: '#imgViewer2 .gallary-next',
            prevEl: '#imgViewer2 .gallary-prev',
        },
    });

    function imgView2() {
        var a = $("#gwTarget2").attr("data-roll");
        console.log(a);
        $("#media2").addClass('isActive');

        swiper2.update();
        swiper2.slideTo(a);
        setTimeout(function () {
            $(".lyrMediaSlide").delay(300).css("opacity", 1);
        }, 300);
    }

    function closeImgView2() {
        $("#media2").removeClass("isActive");
    }

    //   비디오겔러리
    var myVideo1;
    var myVideo2;
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    var players = [];
    var activeVdo = 0;

    function onYouTubeIframeAPIReady() {
        // Check all slides and initialize video players
        var swiper = document.getElementById('myVdoSwiper');
        var slides = swiper.getElementsByClassName('swiper-slide')
        var vWidth;
        var vHeight;
        var screenWidth = $(window).width();
        if (screenWidth > 640) {
            if (screenWidth > 1023) {
                // 1024
                vWidth = 820;
                vHeight = 462;
            } else {
                // 768
                vWidth = 667;
                vHeight = 376;
            }
        } else {
            vWidth = 336;
            vHeight = 188;
        }

        for (var i = 0; i < slides.length; i++) {
            var element = slides[i].getElementsByClassName('yt-player')[0];
            var id = element.getAttribute('data-id');

            var player = new YT.Player(element, {
                height: vHeight,
                width: vWidth,
                videoId: id,
                playerVars: {
                    autoplay: false,
                    color: '#7fbc03',
                    modestbranding: true,
                    rel: 0
                }
                // events: {
                //   'onReady': onPlayerReady,
                //   'onStateChange': onPlayerStateChange
                // }
            });
            players.push(player);
        }

        myVideo2 = new Swiper("#myVdoSwiper2", {
            loop: false,
            observer: true,
            spaceBetween: 10,
            slidesPerView: 'auto',
            centeredSlides: true,
            watchSlidesProgress: true,
        });
        myVideo1 = new Swiper("#myVdoSwiper", {
            loop: false,
            observer: true,
            spaceBetween: 540,
            navigation: {
                nextEl: ".swiper-video-next",
                prevEl: ".swiper-video-prev",
            },
            effect: 'slide',
            centeredSlides: true,
            slidesPerView: 'auto',
            thumbs: {
                swiper: myVideo2,
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 80,
                depth: 400,
                modifier: 1,
                slideShadows: false,
            },
            on: {
                init: function () {
                    activeVdo = this.realIndex;
                },
                slideChange: function () {
                    activeVdo = this.realIndex;
                    players[myVideo1.previousIndex].pauseVideo();
                    players[myVideo1.activeIndex].playVideo();
                }
            },
        });

    }

    swiper3Thumb = new Swiper(".ddThumbWrap", {
        loop: false,
        observer: true,
        spaceBetween: 10,
        slidesPerView: 'auto',
        centeredSlides: true,
        watchSlidesProgress: true,
    });
    swiper3 = new Swiper('.digitalDownload', {
        loop: false,
        speed: 500,
        observer: true,
        spaceBetween: 540,
        effect: 'slide',
        centeredSlides: true,
        slidesPerView: 'auto',
        spaceBetween: 100,
        thumbs: {
            swiper: swiper3Thumb,
        },
        navigation: {
            nextEl: '.digitalDownload .gallary-next',
            prevEl: '.digitalDownload .gallary-prev',
        },
        on: {
            init: function () {
                var target = wrapper.getElementsByTagName('a')[this.realIndex].getAttribute("href");
                document.getElementById("downloadLink").setAttribute("href", target);
            },
            slideChange: function () {
                var target = wrapper.getElementsByTagName('a')[this.realIndex].getAttribute("href");
                document.getElementById("downloadLink").setAttribute("href", target);
            }
        },

    });

    $(".tab > a").each(function (i) {
        $(this).on("click", function () {
            $(".tab > a").removeClass("isActive");
            $(".tabCont").removeClass("isActive");
            $(".tab > a").eq(i).addClass("isActive");
            $(".tabCont").eq(i).addClass("isActive");
            // if( i == 1){
            // }
            switch (i) {
                case 0:
                    myVideo1.update();
                    myVideo2.update();
                    players[activeVdo].playVideo();
                    break;
                case 1:
                    players[activeVdo].pauseVideo();
                    swiper1.update();
                    swiper1Thumb.update();
                    break;
                case 2:

                    players[activeVdo].pauseVideo();
                    swiper3.update();
                    swiper3Thumb.update();
                    break;

                default:
                    break;
            }

        });
    });

    $(".mainMenu a").each(function () {
        $(this).on("click", function () {
            players[activeVdo].pauseVideo();
        })
    });
    $(window).scroll($.debounce(200, function (e) {
        if (!$("#bodyWrapper").hasClass("pg4")) {
            players[activeVdo].pauseVideo();
        } else {

        }
    }));
</script>
</body>

</html>