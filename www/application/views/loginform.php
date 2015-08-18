
    <script type="text/javascript">
    function logincheck(){
     var id = $('#id_email').val();
     var pw = $('#id_password').val();
        if(id==''){
            alert('아이디를 입력해주세요.');
            $('#id').focus();
            return false;
        }
        
        if(id.length < 4){
            alert('아이디는 4글자 이상 영문, 숫자만 가능합니다.');
            $('#id').focus();
            return false;
        }
/*
        if(!/^[a-zA-Z0-9]{4,}$/.test(id))
        { 
            alert('아이디는 4글자 이상 영문, 숫자만 가능합니다.');
            $('#id').focus();
            return false;
        }
*/
    
        if(pw==''){
            alert('비밀번호를 입력해주세요.');
            $('#pw').focus();
            return false;
        }
        
        AjaxLogin();
        
        return false;
    }
    
    
    function AjaxLogin(){
// 	    alert('action=login&m_id='+$('#id_email').val()+'&m_pw='+$('#id_password').val());
        //$('#loginprocessing').slideUp();
        $.ajax({
            type: 'post',
            url: '/member',
            data: 'action=login&m_id='+$('#id_email').val()+'&m_pw='+$('#id_password').val(),
            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
            success: function(result) {
                //parse_result_login(result);
                if(result == '1'){
                    login_error_return();
                }
                else{
                    login_success_return(result);
                }
                //$('#errormsg').delay(2000).css('visibility','visible');
                //$('#errormsg').delay(2500).css('visibility','hidden');
            }
        });
        
    }
    
    function login_error_return()  {
        /*
       $('#errormsg').delay(50).slideDown();
       $('#errormsg').delay(500).fadeTo(10,0.01);
               $('#errormsg').delay(500).fadeTo(10,1.00);
               $('#errormsg').delay(500).fadeTo(10,0.01);
                $('#errormsg').delay(500).fadeTo(10,1.00);
                $('#errormsg').delay(500).fadeTo(10,0.01);
                $('#errormsg').delay(500).fadeTo(10,1.00,function (){$('#errormsg').delay(1000).slideUp();$('#loginprocessing').delay(1300).slideDown();}); 
                */
                alert('아이디 혹은 비밀번호가 올바르지 않습니다.');
                $('#pw').val('').focus();
        
    }
    
    function login_success_return(str){
       //$('#username').text(str);
       //$('#succmsg').delay(50).slideDown();
       alert('['+str+']님 로그인을 환영합니다.'); 
       location.href='/board/';
       //setTimeout(function(){location.href='/itbank/';},3000); 
    }
    
    
    </script>
    <script type="text/javascript">
            // hide URL field on the iPhone/iPod touch
            function hideUrlBar() {
                
                if (window.pageYOffset==0) {
                    window.scrollTo(0, 1);
                    // repeat every second for slow rendering pages
                    setTimeout(function() { hideUrlBar(); }, 3000);
                
                }
                
            }
        </script>



<div id="wrapper">
	

	<div class="contents">
		


<div id="form-login">
	<form method="post" action="" onsubmit="return logincheck();" >
		
		<ul>
			
			<li class="field email">
				<input id="id_email" name="email" placeholder="이메일" type="email" />
				
				
			</li>
			
			<li class="field password">
				<input id="id_password" name="password" placeholder="비밀번호" type="password" />
				
				
			</li>
			
			<li class="field remember">
				<input id="id_remember" name="remember" placeholder="로그인 유지" type="checkbox" />
				<label for="id_remember">로그인 유지</label>
				
			</li>
			
		</ul>
		<div class="center">
			<input class="submit" type="submit" value="로그인">
		</div>
	</form>
	<div class="meta">
		<p>아직 계정이 없으신가요? <a href="/member/join">회원가입</a></p>
		<p>비밀번호를 잃어버리셨나요? <a href="/member/lost">여기를 클릭하세요.</a></p>
		<p>인증 이메일을 못 받으셨나요? <a href="/member/email/resend/">여기를 클릭하세요.</a></p>
	</div>
</div>


	</div>
</div>