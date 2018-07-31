<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>회사소개</h2>
        </div>
    </div>
   
    
	
	<!-- Content -->
    <main id="content" class="result">
    	<div class="container">
			<div class="form-group">
				<form action="#">			
					<lavel for="pd-search" class="sr-only">검색하기</lavel>
					<input type="text" id="pd-search" class="form-control" placeholder="Loader">
					<button type="submit" class="btn btn-search">					
					</button>
				</form>	
			</div>
			<h2 class="result-title">
				‘<span>Loader</span>’ 로 검색하신 결과입니다.
			</h2>
			<article>
				<h3>FPD Transfer System (물류설비)</h3>
				<div class="article-content">
					<ul>
						<li>
							<a href="#">Loader/Unloader</a>
						</li>
						<li><a href="#">Panel Reversal System</a></li>
						<li><a href="#">Gluon Mask Change System</a></li>
						<li><a href="#">Mask Loader</a></li>
						<li><a href="#">Packing &amp; Unpacking System</a></li>
					</ul>
				</div>
			</article>
			<article>
				<h3>FPD Inspection System  (검사설비)</h3>
				<div class="article-content">
					<figure>
						<img src="/assets/images/img_result.jpg" class="img-fluid" alt="">
						<figcaption>검색하시는 제품이 없습니다</figcaption>
					</figure>
				</div>
			</article>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>