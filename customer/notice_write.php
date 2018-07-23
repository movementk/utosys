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
    <main id="content" class="notice-write">
    	<div class="container">
			<div class="page-title">
				<h2>공지사항</h2>
			</div>
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
					<div class="btn-area">
						<p>
							<a href="#" class="btn btn-black" role="button">취소</a>
							<button type="submit" class="btn btn-navy">완료</button>
						</p>
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