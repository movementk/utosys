<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/dochead.php'); ?>
<link rel="stylesheet" href="/cn/assets/css/sub.css">
<link rel="stylesheet" href="/cn/assets/css/introduce.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>关于我们</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								经营理念
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/cn/introduce/greetings.php">CEO问候</a>
								<a class="dropdown-item  active" href="/cn/introduce/ideology.php">经营理念</a>
								<a class="dropdown-item" href="/cn/introduce/history.php">历史/业务绩效</a>
								<a class="dropdown-item" href="/cn/introduce/organization.php">组织图</a>
								<a class="dropdown-item" href="/cn/introduce/ci.php">CI</a>
								<a class="dropdown-item" href="/cn/introduce/certification.php">认证现状</a>
								<a class="dropdown-item" href="/cn/introduce/location.php">路线</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="ideology">
    	<div class="container">
			<!-- page-title -->
			<article class="management">
				<h3>经营理念</h3>
				<p>我们相信最好的技术始于人们的思想，<br><b>最优先实现顾客与成员的价值。</b></p>
			</article>
			<article class="vision">
				<h3>VISION</h3>
				<strong>Beyond <i>Aliveness</i></strong>
				<p>
					我们将走出现有框架，<br>以未来的思维和行动提升FPD设备部门的地位和竞争力。

				</p>
				<div class="vision-list">
					<figure>
						<img src="/cn/assets/images/introduce/img_vision_list_sm.png" class="d-sm-block d-md-none d-xl-none" alt=""> 
						<img src="/cn/assets/images/introduce/img_vision_list_md.png" class="d-none d-md-block d-xl-none" alt=""> 
						<img src="/cn/assets/images/introduce/img_vision_list_xl.png" class="d-none d-md-none d-xl-block" alt="">
						<figcaption class="sr-only">
							<ul>
								<li>
									<h4>会员中心</h4>
									<p>让我们专注于相互尊重，双赢/成长</p>
								</li>
								<li>
									<h4>顾客中心</h4>
									<p>努力实现客户满意度。</p>
								</li>
								<li>
									<h4>共享成果</h4>
									<p>为了日后发展，我们共同努力。</p>
								</li>
							</ul>
						</figcaption>
					</figure>
				</div>
			</article>
		</div>  
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/docfoot.php'); ?>
</body>
</html>