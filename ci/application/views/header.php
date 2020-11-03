<?php  //로그인 체크

        if(isset($this->session->userdata['name'])){
            $login_now = true;
        }else{
            $login_now = false;
        }
        if(isset($this->session->userdata['admin'])){ //회원등급 체크
            $level =  $this->session->userdata['admin'];
        }
        
        
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Hello Divers</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- link rel="stylesheet" href="../assets/css/style.css" -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style2.css'); ?>">

        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <!-- Warp -->
        <div class="container">
            <header class="row">
                <div class="logo col l12 m12 s12">
                    <img width="250px" src="<?php echo base_url('assets/images/logo3.png');?>" alt="hello diver logo" onclick="home();" />
                </div>
            </header>
        </div>
        
        <nav class="z-depth-1">
            <div class="container">
                <div class="row">
                        <div class="nav-wrapper">
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="center hide-on-med-and-down">
                            <li><a href="">프리다이빙</a></li>
                            <li><a href="">스쿠버다이빙</a></li>
                            <li><a href="">공지사항</a></li>
                            <li><a href="">중고장터</a></li>
                        <?php if($login_now == false) { ?>
                            <li><a class="modal-trigger" href="#modal1">로그인</a></li>
                            <li><a href="/Main/join1">회원가입</a></li>
                        <?php }else if ($login_now == true) { ?>
                            <li><a href="/Main/mypage">My Page</a></li>
                            <li><a href="/Login/logout">로그아웃</a></li>
                        <?php } ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="">프리다이빙</a></li>
                <li><a href="">스쿠버다이빙</a></li>
                <li><a href="">공지사항</a></li>
                <li><a href="">중고장터</a></li>
            <?php if($login_now == false) { ?>
                <li><a class="modal-trigger" href="#modal1">로그인</a></li>
                <li><a href="/Main/join1">회원가입</a></li>
            <?php }else if ($login_now == true) { ?>
                <li><a class="">My Page</a></li>
                <li><a class="" href="/Login/logout">로그아웃</a></li>
            <?php } ?>
        </ul>      
           
        
        
          