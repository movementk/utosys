<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body class="sub">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>회사소개</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								인사말
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="#">인사말</a>
								<a class="dropdown-item" href="#">경영이념</a>
								<a class="dropdown-item" href="#">연혁/사업실적</a>
								<a class="dropdown-item" href="#">조직도</a>
								<a class="dropdown-item" href="#">CI</a>
								<a class="dropdown-item" href="#">인증현황</a>
								<a class="dropdown-item" href="#">오시는길</a>
							</div>
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
    
	
	<!-- Content -->
    <main id="content" class="">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>공지사항</h2>
			</div>
    	
			<p class="ex-txt">검색</p>
			<div class="select-search">
				<form action="#">
					<div class="form-group">
						<select class="form-control">
							<option>전체</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" id="search" class="form-control">
						<label for="search" class="sr-only">검색하기</label>
					</div>
					<p class="btn-search">
						<button type="submit" class="btn btn-default">
							<i class="icon-search"></i>
						</button>
					</p>
				</form>
			</div>
			
			<p class="ex-txt">게시판 1</p>
			<div class="table-wrap">
				<table class="table type-1">
					<thead>
						<tr>
							<th>NO</th>
							<th>제목</th>
							<th>글쓴이</th>
							<th>등록일</th>
							<th>조회</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="num">152</td>
							<td class="title">
								<a href="#">
									임의 내용을 노출합니다.임의 내용을 임의 내용을 노출합니다.임의 내용을 임의 내용을 노출합니다.임의 내용을 을 노출합니다.임의 내용을 임의 내용을 노출합니다.임의 내용을 임의 내용을 노출합니다.임의 내용을
								</a>
							</td>
							<td class="user">UTOSYS</td>
							<td class="date">2018.06.08</td>
							<td class="hit">70012</td>
						</tr>
						<tr>
							<td class="num">152</td>
							<td class="title">
								<a href="#">
									임의 내용을 노출합니다.
								</a>
							</td>
							<td class="user">UTOSYS</td>
							<td class="date">2018.06.08</td>
							<td class="hit">70012</td>
						</tr>
						<tr>
							<td class="num">152</td>
							<td class="title">
								<a href="#">
									임의 내용을 노출합니다.
								</a>
							</td>
							<td class="user">UTOSYS</td>
							<td class="date">2018.06.08</td>
							<td class="hit">70012</td>
						</tr>
						<tr>
							<td class="num">152</td>
							<td class="title">
								<a href="#">
									임의 내용을 노출합니다.
								</a>
							</td>
							<td class="user">UTOSYS</td>
							<td class="date">2018.06.08</td>
							<td class="hit">70012</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<p class="ex-txt">페이징</p>
			<nav class="paging">
				<ol class="pagination">
					<li class="first">
						<a href="#">
							<i class="icon-angle-double-left">
								<span class="sr-only">첫 페이지</span>
							</i>
						</a>
					</li>
					<li class="prev">
						<a href="#">
							<i class="icon-angle-left">
								<span class="sr-only">이전 페이지</span>
							</i>
						</a>
					</li>
					<li class="active">
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li class="d-none d-md-block">
						<a href="#">5</a>
					</li>
					<li class="d-none d-md-block">
						<a href="#">6</a>
					</li>
					<li class="d-none d-md-block">
						<a href="#">7</a>
					</li>
					<li class="d-none d-md-block">
						<a href="#">8</a>
					</li>
					<li class="d-none d-md-block">
						<a href="#">9</a>
					</li>
					<li class="d-none d-md-block">
						<a href="#">10</a>
					</li>
					<li class="next">
						<a href="#">
							<i class="icon-angle-right">
								<span class="sr-only">다음 페이지</span>
							</i>
						</a>
					</li>
					<li class="last">
						<a href="#">
							<i class="icon-angle-double-right">
								<span class="sr-only">마지막 페이지</span>
							</i>
						</a>
					</li>
				</ol>	
			</nav>
			
			<p class="ex-txt">게시판 뷰</p>
			<div class="board-view">
				<div class="view-header">
					<h3 class="board-title">임의에 내용을 노출합니다.</h3>
					<div class="borad-info">
						<ul>
							<li>
								<dl>
									<dt>등록일</dt>
									<dd>2018.07.04</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt>조회수</dt>
									<dd>201</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt>작성자</dt>
									<dd>유토시스</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
				<div class="view-body">
					임의의 내용을 노출합니다.<br>
					감사합니다.
				</div>
				<dl class="attach">
					<dt>첨부파일</dt>
					<dd>
						<a href="#">회사소개서.pdf</a>
						<a href="#">첨부파일1.jpg</a>
					</dd>
				</dl>
			</div>
			<br>
			<br>
			<!-- page-link -->
			<ul class="page-link1">
				<li class="prev-link">
					<dl>
						<dt>이전글</dt>
						<dd>
							<a href="#">이전글 제목이 노출되는 영역입니다.</a>
						</dd>
					</dl>
				</li>
				<li class="next-link">
					<dl>
						<dt>다음글</dt>
						<dd>
							<a href="#">다음글 제목이 노출되는 영역입니다.</a>
						</dd>
					</dl>
				</li>
			</ul>
			<br>
			<br>
			<!-- 게시판 -->
			<ul class="list">
				<li class="d-none d-xl-block">
					<ul class="list-header">
						<li>NO</li>
						<li>제목</li>
						<li>글쓴이</li>
						<li>등록일</li>
						<li>조회</li>
					</ul>
				</li>	
				<li>
					<ul>
						<li class="num">
							152							
						</li>
						<li class="subject">
							<a href="#">
								임의의 내용을 노출합니다.
							</a>
						</li>
						<li class="user">
							UTOSYS			
						</li>
						<li class="date">
							<dl>
								<dt>등록일</dt>
								<dd>2018.06.08</dd>
							</dl>
						</li>
						<li class="hit">
							<dl>
								<dt>조회수</dt>
								<dd>700</dd>
							</dl>
						</li>
					</ul>
				</li>
			</ul>
			<br>
			<br>
			<!-- 버튼지역 -->
			<div class="btn-area">
				<p>
					<a href="#" class="btn btn-black btn-left" role="button">삭제하기</a>
					<a href="#" class="btn btn-black btn-left" role="button">수정하기</a>
					<a href="#" class="btn btn-navy btn-right" role="button">목록보기</a>
				</p>
				<br>
				<p>
					<a href="#" class="btn btn-black" role="button">취소</a>
					<a href="#" class="btn btn-navy" role="button">완료</a>
				</p>
			</div>
			
			
			<p class="ex-txt">게시판 쓰기</p>
			<div class="write-wrap">
				<form action="#">
					<div class="table-wrap">
						<table class="table">
							<tbody>
								<tr>
									<th>
										<label for="user">작성자</label>
									</th>
									<td>
										<div class="form-group">
											<input type="text" id="user" class="form-control">
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<label for="pw">비밀번호</label>
									</th>
									<td>
										<div class="form-group">
											<input type="password" id="pw" class="form-control">
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<label for="title">제목</label>
									</th>
									<td>
										<div class="form-group">
											<input type="text" id="title" class="form-control">
										</div>
									</td>
								</tr>
								<tr>
									<th class="v-top">
										<label for="u-content">내용</label>
									</th>
									<td>
										<div class="form-group">
											<textarea id="u-content" class="form-control"></textarea>
										</div>
									</td>
								</tr>
								<tr>
									<th>
										<label for="attach">첨부파일</label>
									</th>
									<td class="file">
										<div class="form-group">
											<input type="file" id="attach" class="form-control">
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</form>
			</div>
			
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
	<script src="/assets/js/common.js"></script>
</body>
</html>