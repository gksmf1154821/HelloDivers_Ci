<!-- 로그인 모달 -->
    <!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
    <h4 class="center login-modal-title">Login</h4>
        <div class="row">
            <form class="col s12" method="POST" action="/Login/login">
            <div class="row">
                <div class="input-field col s12 l12 m12">
                    <input placeholder="Placeholder" id="id" name="id" type="text" class="validate">
                    <label for="id">ID</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l12 m12">
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l12 m12">
                    <a class="right" href="find_info">비밀번호찾기</a>
                </div>
                <div class="col s12 l12 m12">
                    <button type="submit" class="cus-btn text-center" onclick="" >Login</button>
                </div>
                <div class="col s12 l12 m12">
                    <button type="button" class="cus-btn text-center" onclick="todo();">google</button>
                </div>
                <div class="col s12 l12 m12">
                    <button type="button" class="cus-btn text-center" onclick="todo();">github</button>
                </div>
            </div>
            <!--div class="col s12 l12 m12">
                <a class="waves-effect waves-light btn-large">Google</a>
            </div>
            <div class="col s12 l12 m12">
                <a class="waves-effect waves-light btn-large">KaKao</a>
            </div -->
            <!--  div class="row"> //inline input Demo
                <div class="col s12">
                This is an inline input field:
                <div class="input-field inline">
                    <input id="email_inline" type="email" class="validate">
                    <label for="email_inline">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                </div>
                </div>
            </div -->
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <!--a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a -->
    </div>
</div>