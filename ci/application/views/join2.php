        <main>
            <form action="/Main/join3" method="POST">
            <div class="row">
                <div class="container">
                    <h2 class="center join1_title">회원가입</h2>
                    <div class="col l2 m1"></div>
                    <div class="col l8 m10 s12" >
                        <h3 class="xl6 join2_title"><strog> 1 . 기본정보</strong></h3>
                        <!-- 아이디 -->
                        <div class="input-field col l8 m10 s10">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="id" type="text" name="id" required>
                            <label for="id">ID</label>
                        </div>
                        <div class="input-field col l4 m2 s2">
                            <button class="btn waves-effect waves-light" id="send" >아이디 중복체크</button>
                        </div>
                        <!-- 비밀번호 -->
                        <div class="input-field col l8 m10 s10">
                            <i class="material-icons prefix">lock</i>
                            <input id="password" type="password" name="password" class="validate" required>
                            <label for="password">Password</label>
                        </div>
                        <!-- 비밀번호 확인 -->
                        <div class="input-field col l8 m10 s10">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="passwordConfirm" type="password" name="passwordConfirm" required>
                            <label id="lblPasswordConfirm" for="passwordConfirm">Password (Confirm)</label>
                            <span class="helper-text" data-error="비밀번호가 일치하지않습니다." data-success="일치"></span>
                        </div>
                        <!-- 이름 -->
                        <div class="input-field col l8 m10 s10">
                            <i class="material-icons prefix">face</i>
                            <input id="name" type="text" name="real_name" class="validate" required>
                            <label for="name">이름</label>
                        </div>
                        <!-- 이메일 -->
                        <div class="input-field col l8 m10 s10">
                            <i class="material-icons prefix">mail_outline</i>
                            <input id="email" type="email" name="email" class="validate" required>
                            <label for="email">이메일</label>
                        </div>
                        <!-- 전화번호 -->
                        <div class="input-field col l8 m10 s10">
                            <i class="material-icons prefix">phone</i>
                            <input id="phone" type="text" name="phone" class="validate">
                            <label for="phone">전화번호</label>
                        </div>
                        <div class="input-field col l4 m2 s2">
                            <button class="btn waves-effect waves-light" name=""  onclick="alert('추후 추가예정입니다.');">인증번호 전송</button>
                        </div>
                    </div>
                    <div class="col l2 m1"></div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="login col l12 m12 s12 center">
                        <a class="waves-effect waves-light btn-large" href="/Main/index/">취소</a>
                        <button class="waves-effect waves-light btn-large center-align" type="submit">다음</button>
                    </div>
                </div>
            </div>
        </main>
        </form>
<script>
    var check ="";
    $(document).ready(function(){
        const base_url = "<?php echo base_url();?>";
        
        $("#send").click(function(){     
            if($("#id").val() == ""){
                alert('아이디를 입력해주세요!'); 
                return false; 
            } 
            $.ajax({
                type: "POST",
                url: base_url + "Join/checkid/", 
                data: {id: $("#id").val()},
                dataType: "text",  
                cache:false,
                success: 
                    function(data){
                        if(data == "사용가능"){
                            alert('사용가능한 아이디 입니다.');
                            $("#id").removeClass("invalid").addClass("valid");
                            check = true;
                        }else if(data == "사용불가능"){
                            alert('이미 사용중인 아이디입니다.');
                            $("#id").removeClass("valid").addClass("invalid");
                            check = false;
                        }
                    }
                });
            return false;
        });

        //비밀번호 확인

        
        $("#password").on("focusout", function (e) {
            if ($(this).val() != $("#passwordConfirm").val()) {
                $("#passwordConfirm").removeClass("valid").addClass("invalid");
            } else {
                $("#passwordConfirm").removeClass("invalid").addClass("valid");
            }
        });
        
        $("#passwordConfirm").on("keyup", function (e) {
            if ($("#password").val() != $(this).val()) {
                $(this).removeClass("valid").addClass("invalid");//비밀번호 틀렷을때.
                check = false;
            } else {
                $(this).removeClass("invalid").addClass("valid");
                check = true;
            }
        });

    });
</script>
