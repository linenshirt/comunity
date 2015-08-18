<div id="wrapper">
	

	<div class="contents">
		


<div class="section article detail" data-id="8277">
	<div class="item article">
		<div class="header">
			<div class="title">
				<p class="category">
				<?=$board['category']?>
				</p>
				<h2>
					<span><?=$board['subject']?></span>
					<a href="#comments" class="label meta comments">
						<span class="icon"></span>
						<span class="text">2</span>
					</a>
				</h2>
			</div>
			<div class="meta">
				
				<a title="+475" class="label meta 
				
					author user" href="/u/580/">
				
					<span class="icon"></span>
					<span class="text"><span><?=$board['name']?></span></span>
				</a>
				
				<span class="label meta timestamp" title="<?=$board['datetime']?>">
					<span class="icon"></span>
					<span class="text"><span>32분 전</span></span>
				</span>
				<span class="label meta score" title="+3 / -0">
					<span class="icon"></span>
					<span class="text">
						
							추천 <span><?=$board['recommend']?></span>개
						
					</span>
				</span>
				<span class="label meta views">
					<span class="icon"></span>
					<span class="text">
						
							조회수 <span><?=$board['hit']?></span>
						
					</span>
				</span>
			</div>
		</div>
		<div class="clear">
			<div class="article clear">
				<div class="froala-view froala-element editor">
				<?=$board['content']?>
				</div>
			</div>
		</div>

		<div class="vote vote-post" data-target-id="8277">
			<a href="#upvote" class="upvote vote-post">
				<span class="icon"></span>
				<span class="text">추천</span>
			</a>
			<a href="#downvote" class="downvote vote-post">
				<span class="icon"></span>
				<span class="text">비추천</span>
			</a>
		</div>

		<div class="footer clear">
			
			<div class="tags">
				<a class="anchor" id="tags"></a>
				<a href="#tags" class="label meta tags">
					<span class="icon"></span>
					<span class="text">
					<a class="tag readonly" href="/t/Green%20Lantern/">Green Lantern</a>
					</span>
				</a>
			</div>
			
			<div class="comments">
				<a class="anchor" id="comments"></a>
				<div class="left">
					<a href="#toggle" class="label meta comments">
						<span class="icon"></span>
						<span class="text"><span>1</span>개의 댓글이 달려있습니다.</span>
					</a>
				</div>
				<div class="right">
					<a href="#refresh" class="label meta refresh">
						<span class="icon"></span>
						<span class="text">새로고침</span>
					</a>
				</div>
			</div>
		</div>
	</div>

<!--
	<div class="comments-list">
		<div>
			<div class="list template" style="display:none;">
				<a class="anchor"></a>
				<div class="comment">
					<div class="bubble item">
						<div class="container">
							<div class="header clear">
								<div class="left">
									<span class="dropdown fold" href="#">
										<span class="label meta handle"><span class="icon"></span></span>
									</span>
									<span class="depth"></span>
									<span class="hidden author">숨겨짐</span>
									<a class="label meta author user">
										<span class="text"></span>
									</a>
									<span class="meta timestamp"></span>
								</div>
								<div class="right">
									<span class="label meta score">
										<span class="text"><span>N/A</span></span>
									</span>
									<div class="dropdown container">
										<a href="#" class="label meta more dropdown handle">
											<span class="icon"></span>
										</a>
										<div class="dropdown menu">
											<a href="#" class="close">닫기</a>
											<div class="tip top"><span></span></div>
											<div class="wrap">
												<ul>
													<li class="vote upvote">
														<a href="#upvote">
															<span class="label meta upvote">
																<span class="icon"></span>
																<span class="text">추천</span>
															</span>
														</a>
													</li>
													<li class="vote downvote">
														<a href="#downvote">
															<span class="label meta downvote">
																<span class="icon"></span>
																<span class="text">비추천</span>
															</span>
														</a>
													</li>
													
													<li class="reply">
														<a href="#reply">
															<span class="label meta reply">
																<span class="icon"></span>
																<span class="text">답글</span>
															</span>
														</a>
													</li>
													<li class="manipulate">
														<a href="#modify">
															<span class="label meta modify">
																<span class="icon"></span>
																<span class="text">수정</span>
															</span>
														</a>
													</li>
													
													<li class="manipulate">
														<a href="#delete">
															<span class="label meta delete">
																<span class="icon"></span>
																<span class="text">삭제</span>
															</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="article clear">
								<div class="froala-view froala-element editor"></div>
							</div>
						</div>
					</div>
					<div class="bubble tip"><span></span></div>
				</div>
			</div>

			<div class="separator"></div>

			
			<div class="owned write template" data-id="8277" data-type="p">
				<div class="comment">
					<div class="bubble item">
						<div class="container">
							<div class="article"><textarea cols="40" id="id_contents" name="contents" rows="10">
</textarea>
        <script>
            $(function(){
                $('#id_contents').editable({"key": "evzrnaliletD6bx==", "fileUploadParams": {"type": "f"}, "placeholder": "\ucee8\ud2b8\ub864-\uc5d4\ud130 \ud0a4\ub97c \uc774\uc6a9\ud574 \ub313\uae00\uc744 \ub2ec \uc218 \uc788\uc2b5\ub2c8\ub2e4", "language": "ko", "editorClass": "froala-view hc-froala-editor", "imageUploadURL": "/x/f", "pasteImage": false, "inlineMode": false, "linkAutoPrefix": "http://", "alwaysBlank": true, "imageUploadParams": {"type": "i"}, "buttons": ["bold", "italic", "underline", "spoiler", "formatBlock", "align", "insertOrderedList", "insertUnorderedList", "createLink", "insertImage", "insertVideo", "uploadFile", "html"], "fileUploadURL": "/x/f", "defaultImageWidth": 0, "imageUpload": true})
            });
        </script></div>
							<div class="footer">
								<div class="ot nav">
									<label style="display:none;" class="nick"><input id="id_onetime_nick" maxlength="16" name="onetime_nick" placeholder="닉네임" type="text" /></label>
									<label style="display:none;" class="password"><input id="id_onetime_password" name="onetime_password" placeholder="비밀번호" type="password" /></label>
								</div>
								<div class="nav clear">
									<div class="right">
										<a href="#cancel" class="cancel button" style="display:none;">취소</a>
										<a href="#submit" class="submit button blue">댓글 달기</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="bubble tip"><span></span></div>
				</div>
			</div>
			
		</div>
-->

		<script>
			var post_id = 8277;
			getComments(8277);
		</script>
	</div>

	<div class="nav clear">
		<div class="left">
			<a href="/board" class="button">목록</a>
			
				<a href="/boar/best" class="button checkbox">
			
				<span class="label">
					<span class="icon"></span>
					<span class="text">베스트</span>
				</span>
			</a>
		</div>
		
		<div class="right">
			
			<a href="/board/write" class="button blue">글쓰기</a>
		</div>
		
	</div>
</div>




<div class="section board">
	

	<ul class="post-list">
	


	
	</ul>

	

	
<div class="nav bottom clear close">
	<div class="left">
		<a href="/board" class="button">목록</a>
		
			<a href="/board/best/" class="button checkbox">
		
			<span class="label">
				<span class="icon"></span>
				<span class="text">베스트</span>
			</span>
		</a>
		<div class="search button">
			<form action="/b/generic/search" method="get">
				<button type="submit" class="search label meta"><span class="icon"></span></button>
				<input type="search" name="q" placeholder="검색" class="text">
				<div class="dropdown container scope">
					<a href="#" class="handle label meta">
						<span class="icon"></span>
					</a>
					<div class="dropdown menu">
					<div class="tip top"><span></span></div>
						<a href="#" class="close">닫기</a>
						<div class="wrap">
							<ul class="radio-container" data-input-name="t">
								<input type="hidden" name="t" >
								<li>
									<a class="checkbox radio" href="#" data-input-value="">
										<span class="label">
											<span class="icon"></span>
											<span class="text">제목 + 본문</span>
										</span>
									</a>
								</li>
								<li>
									<a class="checkbox radio" href="#" data-input-value="author">
										<span class="label">
											<span class="icon"></span>
											<span class="text">글쓴이</span>
										</span>
									</a>
								</li>
							</ul>
						</div>
						<script>
							(function() {
								var value = $('input[name=t]').val();
								$('a.checkbox.radio').filter('[data-input-value="' + value + '"]').addClass('checked');
							})();
						</script>
					</div>
				</div>
				<a href="#" class="label meta delete">
					<span class="icon"></span>
				</a>
			</form>
		</div>
	</div>
	
	<div class="right">
		<a href="/board/write" class="button blue">글쓰기</a>
	</div>
	
</div>


	
</div>



	</div>
</div>
