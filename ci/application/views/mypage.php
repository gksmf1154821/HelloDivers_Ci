<main>
    <div class="container">
        <div class="row">
            <h1 class="center">My Page</h1>
            <div class="col s12 m8 offset-m2  offset-l1 l10">
                <div class="card-panel grey lighten-5 z-depth-1">
                    <div class="row valign-wrapper">
                        <div class="col s12 m6 l3">
                            <img src="<?php echo base_url($photo)?>" alt="aaa" class="circle responsive-img"> <!-- notice the "circle" class -->
                        </div>

                        <div class="col s2 l9 center">
                            <div class="row">
                                <div class="col l3 center">
                                    <p>Name</p>
                                    <p><?=$name?></p>
                                </div>
                                <div class="col l3 center">
                                    <p>Phone</p>
                                    <p><?=$phone?></p>
                                </div>
                                <div class="col l3 center">
                                    <p>Eamil</p>
                                    <p><?=$email?></p>
                                </div>
                                <div class="col l3 center">
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
            </div>
        </div>
    </div>
    
            
</main>