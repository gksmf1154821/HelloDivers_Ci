<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12">
                <h1 class="center">My Page</h1>
            </div>
            <div class="col s12 m8 offset-m2  offset-l1 l10 hidden-modile">
                
                <div class="card-panel grey lighten-5 z-depth-1">
                    <div class="row valign-wrapper">
                        <div class="col s3 m6 l3">
                            <img src="<?php echo base_url($photo)?>" alt="aaa" class="circle responsive-img profile_photo">
                        </div>

                        <div class="col s2 l9 center">
                            <div class="row">
                                <div class="col l3 m6 s12 center">
                                    <p>Name</p>
                                    <p><?=$name?></p>
                                </div>
                                <div class="col l3 m6 s12 center">
                                    <p>Phone</p>
                                    <p><?=$phone?></p>
                                </div>
                                <div class="col l3 m6 s12 center">
                                    <p>Eamil</p>
                                    <p><?=$email?></p>
                                </div>
                                <div class="col l3 m6 s12 center">
                                    <p>Level</p>
                                    <p><?=$level?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col l3 center">
                                    <p>접속일</p>
                                    <p><?=$day?></p>
                                </div>
                                <div class="col l3 center">
                                    <p>추천수</p>
                                    <p><?=$up?></p>
                                </div>
                                <div class="col l3 center">
                                    <p>비추천수</p>
                                    <p><?=$down?></p>
                                </div>
                                <div class="col l3 center">
                                    <p>댓글수</p>
                                    <p><?=$comment?></p>
                                </div>
                            </div>
                            <div class="col s2 l12">

                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn center" href="/Mypage/member_modify">정보수정</a>
            </div>
        </div>
    </div>
    
            
</main>