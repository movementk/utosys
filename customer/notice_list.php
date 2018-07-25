<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body class="customer">
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>고객센터</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								공지사항
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item active" href="/customer/notice_list.php">공지사항</a>
								<a class="dropdown-item" href="/customer/qna_list.php">Q&amp;A</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="notice-list">
    	<div class="container">
			<div class="page-title">
				<h2>공지사항</h2>
			</div>
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
			<ul class="list">
				<li class="d-none d-xl-block list-intro">
					<ul class="list-header">
						<li>NO</li>
						<li>제목</li>
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
							<a href="/customer/notice_view.php">
								임의의 내용을 노출합니다.
							</a>
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
				<li>
					<ul>
						<li class="num">
							152							
						</li>
						<li class="subject">
							<a href="/customer/notice_view.php">
								임의의 내용을 노출합니다.
							</a>
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
				<li>
					<ul>
						<li class="num">
							152							
						</li>
						<li class="subject">
							<a href="/customer/notice_view.php">
								임의의 내용을 노출합니다.
							</a>
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
				<li>
					<ul>
						<li class="num">
							152							
						</li>
						<li class="subject">
							<a href="/customer/notice_view.php">
								임의의 내용을 노출합니다.
							</a>
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
				<li>
					<ul>
						<li class="num">
							152							
						</li>
						<li class="subject">
							<a href="/customer/notice_view.php">
								임의의 내용을 노출합니다.
							</a>
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
				<li>
					<ul>
						<li class="num">
							152							
						</li>
						<li class="subject">
							<a href="/customer/notice_view.php">
								임의의 내용을 노출합니다.
							</a>
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
				<li class="d-none d-xl-block">
					<ul>
						<li class="num">
							152							
						</li>
						<li class="subject">
							<a href="/customer/notice_view.php">
								임의의 내용을 노출합니다.
							</a>
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
				<li class="d-none d-xl-block">
					<ul>
						<li class="num">
							152							
						</li>
						<li class="subject">
							<a href="/customer/notice_view.php">
								임의의 내용을 노출합니다.
							</a>
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
				<li class="d-none d-xl-block">
					<ul>
						<li class="num">
							152							
						</li>
						<li class="subject">
							<a href="/customer/notice_view.php">
								임의의 내용을 노출합니다.
							</a>
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
				<li class="d-none d-xl-block">
					<ul>
						<li class="num">
							152							
						</li>
						<li class="subject">
							<a href="/customer/notice_view.php">
								임의의 내용을 노출합니다.
							</a>
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
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>