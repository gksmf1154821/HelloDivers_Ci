<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- link rel="stylesheet" href="../assets/css/style.css" -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style3.css'); ?>">

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!--Side bar -->
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
            <div class="user-view">
                <div class="background">
                    <!-- img src="<?=base_url('assets/images/slider2.jpg')?>"  -->
                </div>
                <a href="#user"><img class="circle" src="<?=base_url('assets/images/profile2.png')?>"></a>
                <a href="#name"><span class="black-text name">HaNeul LEE</span></a>
                <a href="#email"><span class="black-text email">gksmf1154821@naver.com</span></a>
            </div>
        </li>
        <li><div class="divider"></div></li>
        <li><a href="#about">About</a></li>
        <li><a href="#time">Timeline</a></li>
        <li><a href="#skill">Skill</a></li>
        <li><a href="#project">Project</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="https://github.com/gksmf1154821/">github</a></li>
        <li><a class="waves-effect" href="https://instagram.com/henney_lee_">instagram</a></li>
        <!-- span class="down">이페이지는 AWS EC2 ubuntu서버와 PHP Codeigniter기반으로 제작되었습니다.</span-->
    </ul>
    
    <!-- side bar end -->
    <div class="wrap">
        <header>
            <nav>
                <ul>
                    <li class="right"><a href="#"><span>Login</span></a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section id="about" class="scrollspy">
                <h1 class="title-text">안녕하세요 저는 이하늘 입니다.</h1>
                <div class="text-box">
                    <span class="sub-text">배우는것을 두려워하지 않고 항상 도전하는 백앤드 개발자입니다.</span><br>
                    <span class="sub-text">새로운 기술에 관심이 많아 지속적으로 관심을 가지고 배우려고 노력 하고있으며 <br> 동료들과 소통하고 상호 피드백 및 리뷰하는것에 익숙합니다.</span>
                </div>
                <h1 id="time" class="title-text scrollspy"><blockquote>Time Line</blockquote></h1>
                <div class="text-box">
                    <p class="time-title">(주)유니웹스</p>
                    <p class="day">2019.04.22 ~ 2020.06.30 (퇴사) </p>
                    <p class="detail">약 1년 3개월간 PHP웹개발자로 근무하였습니다.</p>
                    <p class="detail">쇼핑몰 및 CMS솔루션 등 웹개발과 유지보수를 하였습니다.</p>
                </div>
                <div class="text-box mt50">
                    <p class="time-title">스마트미디어인재개발원</p>
                    <p class="day">2018.10 ~ 2019.02 </p>
                    <p class="detail">IOT융합 서비스 개발자 과정을 수료하였습니다.주로 Java위주로 공부를 하였고 Java기반 팀프로젝트를 3번 진행하였습니다.</p>
                    <p class="detail"><a href="">프로젝트영상보러가기</a></p>
                </div>
                <div class="text-box mt50">
                    <p class="time-title">(주)큐넷 현장실습</p>
                    <p class="day">2017.06 ~ 2018.09 </p>
                    <p class="detail">기본적인 웹서비스에 대한 지식을 학습하였습니다.PHP사이트 유지보수 작업을 진행하였고 개인과제로 Codeigniter를사용하여 게시판프로그램 을구현하였습니다.</p>
                </div>
                <div class="text-box mt50">
                    <p class="time-title">광주대학교</p>
                    <p class="day">2013.03 ~ 2019.02 </p>
                    <p class="detail">좋은 개발자가 되기위해 기초적인 알고리즘, DB, 네트워크, 운영체제 과목을 수강하였습니다.<br>학교에서 배우는것과 달리 팀프로젝트를 경험하고자 스마트미디어 인재개발원에서 진행하는 교육과정을 수료하였습니다.</p>
                </div>
            </section>
            <section id="skill" class="scrollspy">
                <h1 class="title-text"><blockquote>Skill</blockquote></h1>
                <div class="text-box">
                    <span class="sub-text">PHP7, Codeigniter, VanillaJs, Jquery, ES6, Mysql, HTML/CSS, Java, AWS, Git/github, Linux</span>
                </div>

                <div class="text-box mt50">
                    <p class="time-title">PHP</p>
                    <p class="detail">PHP7 OR PHP5 문법을 익숙하게 사용할수있습니다.</p>
                    <p class="detail">MVC패턴에 대한 이해.</p>
                    <p class="detail">Codeigniter기반 프로젝트 진행경험 및 익숙하게 사용가능합니다.</p>
                    <p class="detail">레거시 코드 리딩 및 수정 가능.</p>
                </div>
                <div class="text-box mt50">
                    <p class="time-title">Mysql</p>
                    <p class="detail">SQL쿼리를 mysql쉘에서 익숙하게 사용할수있습니다.</p>
                    <p class="detail">ERD작성 및 리딩가능합니다.</p>
                </div>
                <div class="text-box mt50">
                    <p class="time-title">AWS</p>
                    <p class="detail">AWS EC2인스턴스를 생성하여 서버 어플리케이션을 배포할 수 있습니다.</p>
                    <p class="detail">AWS RDS를 사용하여 데이터베이스를 구축해본 경험이 있습니다.</p>
                </div>
                <div class="text-box mt50">
                    <p class="time-title">Linux</p>
                    <p class="detail">리눅스 기본 커맨드를 익숙하게 사용할수있습니다.</p>
                </div>
                <div class="text-box mt50">
                    <p class="time-title">HTML/CSS</p>
                    <p class="detail">HTML5 시멘틱웹에 대한 이해를 하고있습니다.</p>
                    <p class="detail">간단한 퍼블리싱 가능합니다.</p>
                    <p class="detail">웹접근성인증 작업 진행경험이있습니다.</p>
                    <p class="detail">Bootstrap 과 materialize CSS 와 같은 CSS프레임워크 활용가능합니다.</p>
                </div>
                <div class="text-box mt50">
                    <p class="time-title">VanillaJs & Jquery</p>
                    <p class="detail">javascript 와 Jquery에대해 익숙하게 사용할수있습니다.</p>
                    <p class="detail">ajax 비동기 자동에대한 이해 및 사용할수있습니다.</p>
                    <p class="detail"></p>
                </div>
                <div class="text-box mt50">
                    <p class="time-title">ES6</p>
                    <p class="detail">현재 ES6에대해 관심을 가지고 지속적으로 공부하고있습니다.</p>
                    <p class="detail"></p>
                </div>
                
                
            </section>
            <section id="project" class="scrollspy">
                <div class="row">
                    <h1 class="title-text"><blockquote>Project</blockquote></h1>
                    <div class="col s12 m6 l4">
                        <div class="card medium">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="<?=base_url('assets/images/gn_rent.PNG')?>">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">강남구 육아종합지원센터<i class="material-icons right">더보기</i></span>
                                <p><a href="http://gncare.go.kr/gnrent/">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">강남구 육아종합지원센터<i class="material-icons right">close</i></span>
                                <blockquote>강남구 육아종합지원센터 대여시스템</blockquote>
                                <p>관리자 페이지 대여,반납 알고리즘 및 CRUD 구현하였습니다.<br>
                                 대여시 반납일 및 공지사항 문자 자동발송 기능개발.<br>(타사 모듈연동)<br>
                                 google chart api 활용 통계페이지 구현 <br>
                                 PHP Excel 라이브러리 활용하여 재고관리 페이지 excel출력기능개발. </p>
                                <blockquote>개발환경 및 기술</blockquote>
                                 <div class="chip">PHP7</div>
                                 <div class="chip">Js/Jquery</div>
                                 <div class="chip">Excel Class</div>
                                 <div class="chip">Ubuntu</div>
                                 <div class="chip">Apache</div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                    <div class="card medium">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="<?=base_url('assets/images/igogi.PNG')?>">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">축산물 쇼핑몰<i class="material-icons right">더보기</i></span>
                                <p><a href="https://www.honest-choice.co.kr/user/contents/main/index.php">igogi</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">축산물 쇼핑몰<i class="material-icons right">close</i></span>
                                <blockquote>프로젝트 내용</blockquote>
                                <p>socal 로그인 기능 개발<br>( OAuth 2.0 이용한 facebook kakao api 연동 )</p>
                                <p>각 상품평 댓글 기능 및 별점 기능 구현</p>
                                <blockquote>개발환경 및 기술</blockquote>
                                 <div class="chip">PHP7</div>
                                 <div class="chip">Js/Jquery</div>
                                 <div class="chip">kakao api</div>
                                 <div class="chip">facebook api</div>
                                 <div class="chip">ubuntu</div>
                                 <div class="chip">bootstrap</div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card medium">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="<?=base_url('assets/images/smeil.PNG')?>">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">서울시평생교육진흥원<i class="material-icons right">더보기</i></span>
                                <p><a href="https://smile.seoul.kr">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">서울시평생교육진흥원<i class="material-icons right">close</i></span>
                                <blockquote>프로젝트 내용</blockquote>
                                <p>-워드프레스로 구성도있던 웹사이트를 클라이언트의 요청에따라 커스터마이징이 불편한 워드프레스를 PHP codeigniter로 개발진행.</p>
                                <p>-게시판 모듈화(게시판 추가요청시 구분값만 추가하여 쉽게생성할수있도록 개발.)</p>
                                <p>-이전 관리자의 부재 등 이유로 DB가 엃히고 중복데이터와 쓰레기 데이터로 인해 그대로 데이터이관을 진행하기에 비효율적이라고 생각하여 
                                    PHP크롤링 라이브러리 snoopy 를사용하여 데이터 이관 진행.
                                </p>
                                <p>-관리자페이지 게시판 CRUD구현.</p>
                                <blockquote>개발환경 및 기술</blockquote>
                                 <div class="chip">PHP7</div>
                                 <div class="chip">Codeigniter</div>
                                 <div class="chip">Js/Jquery</div>
                                 <div class="chip">PHP Snoopy(크롤링)</div>
                                 <div class="chip">ubuntu</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6 l4">
                        <div class="card medium">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="<?=base_url('assets/images/total.PNG')?>">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">통합 유지보수게시판<i class="material-icons right">더보기</i></span>
                                <p><a href="http://uniwebs.co.kr/work/">This is a link</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">통합 유지보수 게시판<i class="material-icons right">close</i></span>
                                <blockquote>프로젝트 내용</blockquote>
                                <p>유지보수 업무를 진행하던중 각각 유지보수를 관리하기 비효율적이라고 판단하여 통합해서 관리할수있는 게시판 구현.</p>
                                <blockquote>개발환경 및 기술</blockquote>
                                 <div class="chip">PHP7</div>
                                 <div class="chip">Codeigniter</div>
                                 <div class="chip">Chart.js</div>
                                 <div class="chip">Js/Jquery</div>
                                 <div class="chip">CK editer</div>
                                 <div class="chip">ubuntu</div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l4">
                        <div class="card medium">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="<?=base_url('/assets/images/menagement.PNG')?>">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">고객 관리 프로그램<i class="material-icons right">더보기</i></span>
                                <p><a href="https://github.com/gksmf1154821/React-ManagementSystem-Tutorial">go to github</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">고객 관리 프로그램<i class="material-icons right">close</i></span>
                                <blockquote>프로젝트 내용</blockquote>
                                <p>Node.js 와 React에 관심이있어 개인적으로 구현한 고객관리 프로그램입니다.</p>
                                <p>Express서버 구현, Multer사용 파일업로드구현 </p>
                                <p>고객 CRUD기능 구현 ,Component로 분리하여 구현. </p>
                                <blockquote>개발환경 및 기술</blockquote>
                                 <div class="chip">Node.js</div>
                                 <div class="chip">Express</div>
                                 <div class="chip">React</div>
                                 <div class="chip">materialize</div>
                                 <div class="chip">AWS RDS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
<script>
     $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.scrollspy').scrollSpy();
    });
</script>
</html>