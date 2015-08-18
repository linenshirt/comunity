<script src="<?php echo base_url('assets/js/garlic.js'); ?>" charset="utf-8"></script>


<div id="wrapper">
	

<div class="section article form">
	<form id="writetable" name="writetable" action="" method="post" onsubmit="return formcheck();" >
	<input type='hidden' name='action' value='write' />
	<div class="item article">
		
		<div class="header">
			<div class="title">
				<span class="category dropdown container" data-text="분류"><select id="id_category" name="category">
				<option value="">---------</option>
				<option value="2" selected="selected">잡담</option>
				<option value="7">감상</option>
				<option value="3">정보</option>
				<option value="4">번역</option>
				<option value="5">자막</option>
				<option value="8">창작</option>
				</select></span>
				<h2>
					<input id="id_title" maxlength="50" name="title" placeholder="제목" type="text" />
				</h2>
			</div>
		</div>
		
		<div class="clear">
			<textarea cols="40" id="id_contents" name="contents" rows="10">
</textarea>
<!--
        <script>
            $(function(){
                $('#id_contents').editable({"key": "evzrnaliletD6bx==", "fileUploadParams": {"type": "f"}, "language": "ko", "editorClass": "froala-view hc-froala-editor", "imageUploadURL": "/x/f", "pasteImage": false, "inlineMode": false, "linkAutoPrefix": "http://", "alwaysBlank": true, "imageUploadParams": {"type": "i"}, "buttons": ["bold", "italic", "underline", "spoiler", "formatBlock", "align", "insertOrderedList", "insertUnorderedList", "createLink", "insertImage", "insertVideo", "uploadFile", "html"], "fileUploadURL": "/x/f", "defaultImageWidth": 0, "imageUpload": true})
            });
        </script>
-->
		</div>
		
		
		<div class="footer clear">
			<div class="tags">
				<input id="id_tags" name="tags" type="text" />
				<div class="label meta tags">
					<span class="icon" title="태그 "></span>
					<div class="text" id="tagbox" data-tags-input-name="tags"></div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="nav center">
		<input class="submit" type="submit" value="글쓰기">
	</div>
	</form>
	<script>
		$('.section.article.form form').garlic();
		$('#id_contents').on('editable.contentChanged', function() {
			$(this).trigger('change');
		});
		

function formcheck(){
	
                var title = $('#id_title').val();
                var content = $('#id_contents').val();
                var tag = $('#tagbox').val();
                    
                if(title==''){
                    alert('제목을 입력해주세요.');
                    $('#id_title').focus();
                    return false;
                }
                
                if(content==''){
                    alert('내용을 입력해주세요.');
                    $('#id_contents').focus();
                    return false;
                }

               AjaxSubmit();

                return false;
            }
            function AjaxSubmit(){
	            
				var formContent = $("#writetable").serialize();
				
                $.ajax({
                    type: 'post',
                    url: '/board/write',
                    data: formContent,
                    contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                    success: function(result) {
                   
                        if(result === '1'){
                            submitsuccess();
                        }
                        else{
                            eval(result);
                        }

                    }
                });

            }



            function submitsuccess(){
                //$('#username').text(str);
                //$('#succmsg').delay(50).slideDown();
//                 alert('['+$('#id_nickname').val()+']님 가입되셨습니다. 메인으로 이동합니다.'); 
                location.href='/board/';
                //setTimeout(function(){location.href='/itbank/';},3000); 
            }



	</script>
</div>

<script>
/*
	var $tagbox, $tags;
	$(function() {
		$tagbox = $('#tagbox');
		$tags = $('#id_tags');

		$tagbox.tagging(taggingJS_options);
		$tagbox.tagging('add', $tags.val().split(/,[ ]?/));
		$tagbox.find('input.type-zone')
			.blur()
			.attr('placeholder', '태그')
			.attr('maxlength', 32)
			.autocomplete(autocomplete_options);

		if($('#id_title').val() == '') { $('#id_title').focus();
		} else if($('#id_contents').val() == '') { $('#id_contents').editable('focus'); }
	});
*/

	$(window).on('scroll', function(){
		var $editor = $('.section.article.form .froala-editor'),
			$wrapper = $('.section.article.form .froala-wrapper');
    		if ($(this).scrollTop() > 50) {
    			$editor.addClass('fixed');
    			$wrapper.css('padding-top', $editor.height());
    		} else {
    			$editor.removeClass('fixed');
    			$wrapper.css('padding-top', 0);
    		}
    	});
</script>


	</div>
</div>

</div>
	