<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/recruit.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>인재채용</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								인재상
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item active" href="#">인재상</a>
								<a class="dropdown-item" href="#">복지제도</a>
								<a class="dropdown-item" href="#">채용안내</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="recruit-person">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>인재상</h2>
				<p>
					우리는 경영이념과 목표를 명확히 인식하고 각자의 개성과 창의력을 한껏 발휘할 수 있는 인재와<br class="d-none d-xl-block"> 새로운 시대에 걸맞는 긍정적인 사고와 모든 일에 열정적으로 도전하여<br class="d-none d-xl-block"> 창의적인 방법으로 변화를 주도하는 가슴 따뜻한 사람, 이것이 바로 유토시스의 인재상입니다.  
				</p>
			</div>
			
			<ul class="row">
				<li class="col-12 col-md-4">
					<figure>
						<img src="/assets/images/recruit/img_recruit_list01.png" class="img-fluid" alt="Sensitive">
						<figcaption>
							S
						</figcaption>
					</figure>
					<dl>
						<dt>Sensitive</dt>
						<dd>미래지향적 감각을 보유한 인재</dd>
					</dl>
				</li>
			</ul>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>