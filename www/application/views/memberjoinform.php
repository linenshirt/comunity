<div id="wrapper">
	

	<div class="contents">
		


<div id="form">
	<form method="post" action="?" onsubmit="return joincheck();">

		<ul>
			
			<li class="field">
				<label><span>이메일</span><input id="id_email" name="email" type="email" /></label>
				
			</li>
			
			<li class="field">
				<label><span>비밀번호</span><input id="id_password" name="password" type="password" /></label>
				
			</li>
			
			<li class="field">
				<label><span>비밀번호 확인</span><input id="id_password_confirm" name="password_confirm" type="password" /></label>
				
			</li>
			
			<li class="field">
				<label><span>닉네임</span><input id="id_nickname" maxlength="16" name="nickname" type="text" /></label>
				
			</li>
			
		</ul>
		<button class="submit" type="submit">회원가입</button>
	</form>
</div>


	</div>
</div>

 <script type="text/javascript">
            // hide URL field on the iPhone/iPod touch
            function hideUrlBar() {
                
                if (window.pageYOffset==0) {
                    window.scrollTo(0, 1);
                    // repeat every second for slow rendering pages
                    setTimeout(function() { hideUrlBar(); }, 3000);
                
                }
                
            }
            
            
            function joincheck(){
                var name = $('#id_nickname').val();
                var id = $('#id_email').val();
                var pw1 = $('#id_password').val();
                var pw2 = $('#id_password_confirm').val();
                
                if(name==''){
                    alert('이름을 입력해주세요.');
                    $('#name').focus();
                    return false;
                }
                
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

                if(pw1==''){
                    alert('비밀번호를 입력해주세요.');
                    $('#pw1').focus();
                    return false;
                }
                if(pw2==''){
                    alert('비밀번호 확인을 입력해주세요.');
                    $('#pw2').focus();
                    return false;
                }
                if(pw1!=pw2){
                    alert('비밀번호 확인이 올바르지 않습니다.');
                    $('#pw1').val('').focus();
                    $('#pw2').val('');
                    return false;
                }

                AjaxJoin();

                return false;
            }
            function AjaxJoin(){

                //$('#loginprocessing').slideUp();
                $.ajax({
                    type: 'post',
                    url: '/member/join',
                    data: 'action=join&m_name='+$('#id_nickname').val()+'&m_id='+$('#id_email').val()+'&m_pw='+$('#id_password_confirm').val(),
                    contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                    success: function(result) {
                        //parse_result_login(result);
                        
                        if(result === '1'){
                            joinsuccess();
                        }
                        else{
                            //error(result);
                            eval(result);
                        }
                        //$('#errormsg').delay(2000).css('visibility','visible');
                        //$('#errormsg').delay(2500).css('visibility','hidden');
                    }
                });

            }



            function joinsuccess(){
                //$('#username').text(str);
                //$('#succmsg').delay(50).slideDown();
                alert('['+$('#id_nickname').val()+']님 가입되셨습니다. 메인으로 이동합니다.'); 
                location.href='/member/';
                //setTimeout(function(){location.href='/itbank/';},3000); 
            }

        </script>
        