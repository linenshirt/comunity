<div id="wrapper">
	

	<div class="contents">
		



<div class="section board">
	
	<div class="header">
		<div class="cell mark"></div>
		<div class="cell category sortable dropdown container">
			
			<a href="#" class="handle label meta">
				<span class="text"><span>분류</span></span>
			</a>
			<div class="dropdown menu">
				<a href="#" class="close">닫기</a>
				<div class="tip top"><span></span></div>
				<div class="wrap">
					<ul>
						
						<li class="talk"><a href="/b/generic/c/talk/"><span>잡담</span></a></li>
						
						<li class="review"><a href="/b/generic/c/review/"><span>감상</span></a></li>
						
						<li class="news"><a href="/b/generic/c/news/"><span>정보</span></a></li>
						
						<li class="scanlation"><a href="/b/generic/c/scanlation/"><span>번역</span></a></li>
						
						<li class="subtitle"><a href="/b/generic/c/subtitle/"><span>자막</span></a></li>
						
						<li class="creation"><a href="/b/generic/c/creation/"><span>창작</span></a></li>
						
						<li class="bottom"><a href="/b/generic/"><span>기본 정렬</span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
		<div class="cell title">제목</div>
		<div class="cell author">글쓴이</div>
		<div class="cell timestamp sortable dropdown">
			<a class="handle label meta" href="/b/generic/?o=-ct">
				<span class="text">날짜</span>
				<span class="icon"></span> 
			</a>
		</div>
		<div class="cell score sortable dropdown">
			<a class="handle label meta" href="/b/generic/?o=%2Bvt">
				<span class="text">추천</span>
				
			</a>
		</div>
		<div class="cell views sortable dropdown">
			<a class="handle label meta" href="/b/generic/?o=%2Bvc">
				<span class="text">조회</span>
				
			</a>
		</div>
	</div>
	

	<ul class="post-list">
	
		
		

<li>
	<a href="/7487/" class="post item post-announcement odd" data-post-id="7487">
		<span class="cell mark">▶</span>
		<span class="cell category">공지</span>
		<span class="cell title">
			<span class="container">
			
				<span class="title">히어로코믹스 규정 개편 안내</span>
				<span class="label meta comments">
					<span class="text">3</span>
				</span>
			
			</span>
		</span>
		<br>
		<span class="cell author meta">
			<span title="+452" class="label meta 
			
				author user" data-user-id-url="/u/1/">
			
				<span class="text">Skye★</span>
			</span>
		</span>
		<span class="cell timestamp meta">
			<span title="2015년 7월 28일 20:08:15" class="label meta timestamp">
				<span class="icon"></span>
				<span class="text">2주 전</span>
			</span>
		</span>
		<span class="cell score meta">
			<span title="+8 / -0" class="label meta score">
				<span class="icon"></span>
				<span class="text">8</span>
			</span>
		</span>
		<span class="cell views meta">
			<span class="label meta views">
				<span class="icon"></span>
				<span class="text">855</span>
			</span>
		</span>
	</a>
</li>

	
		
		

	

	
		
		


<?php  foreach ($board_list as $row)
{
?>
<li>
	<a href="/board/<?=$row['idx']?>" class="post item post-talk odd" data-post-id="8248">
		<span class="cell mark">▶</span>
		<span class="cell category"><?=$row['category']?></span>
		<span class="cell title">
			<span class="container">
			
				<span class="title"><?=$row['subject']?></span>
				<span class="label meta comments">
					<span class="text">2</span>
				</span>
			
			</span>
		</span>
		<br>
		<span class="cell author meta">
			<span title="+1890" class="label meta 
			
				author user" data-user-id-url="/u/45/">
			
				<span class="text"><?=$row['name']?></span>
			</span>
		</span>
		<span class="cell timestamp meta">
			<span title="<?=$row['datetime']?>" class="label meta timestamp">
				<span class="icon"></span>
				<span class="text">1시간 전</span>
			</span>
		</span>
		<span class="cell score meta">
			<span title="+1 / -0" class="label meta score">
				<span class="icon"></span>
				<span class="text"><?=$row['recommend']?></span>
			</span>
		</span>
		<span class="cell views meta">
			<span class="label meta views">
				<span class="icon"></span>
				<span class="text"><?=$row['hit']?></span>
			</span>
		</span>
	</a>
</li>

<?php } ?>
		


	
	</ul>

	

	
<div class="nav bottom clear close">
	<div class="left">
		<a href="/b/generic/" class="button">목록</a>
		
			<a href="/b/generic/best/" class="button checkbox">
		
			<span class="label">
				<span class="icon"></span>
				<span class="text">베스트</span>
			</span>
		</a>
		<div class="search button">
			<form action="/b/generic/search" method="get">
				<button type="submit" class="search label meta"><span class="icon"></span></button>
				<input name="q" placeholder="검색" class="text" type="search">
				<div class="dropdown container scope">
					<a href="#" class="handle label meta">
						<span class="icon"></span>
					</a>
					<div class="dropdown menu">
					<div class="tip top"><span></span></div>
						<a href="#" class="close">닫기</a>
						<div class="wrap">
							<ul class="radio-container" data-input-name="t">
								<input name="t" type="hidden">
								<li>
									<a class="checkbox radio checked" href="#" data-input-value="">
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
		<a href="/board/write/" class="button blue">글쓰기</a>
	</div>
	
</div>


	
		<div class="pages nav">
			<div class="container nowrap">
				
				
				
					
						<a href="/b/generic/?page=1" class="button page current">1</a>
					
						<a href="/b/generic/?page=2" class="button page">2</a>
					
						<a href="/b/generic/?page=3" class="button page">3</a>
					
						<a href="/b/generic/?page=4" class="button page">4</a>
					
						<a href="/b/generic/?page=5" class="button page foldable">5</a>
					
						<a href="/b/generic/?page=6" class="button page foldable">6</a>
					
						<a href="/b/generic/?page=7" class="button page foldable">7</a>
					
						<a href="/b/generic/?page=8" class="button page foldable">8</a>
					
						<a href="/b/generic/?page=9" class="button page foldable">9</a>
					
						<a href="/b/generic/?page=10" class="button page foldable">10</a>
					
						<a href="/b/generic/?page=11" class="button page foldable">11</a>
					
				
				
					<a href="/b/generic/?page=2" class="button label meta next" title="다음"><span class="icon"></span></a>
				
				
					<a href="/b/generic/?page=last" class="button label meta last" title="마지막"><span class="icon"></span></a>
				
			</div>
		</div>
	
</div>



	</div>
</div>