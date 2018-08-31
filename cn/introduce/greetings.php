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
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								CEO问候
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item active" href="/cn/introduce/greetings.php">CEO问候</a>
								<a class="dropdown-item" href="/cn/introduce/ideology.php">经营理念</a>
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
    <main id="content" class="greetings">
    	<div class="container">
			<div class="page-title">
				<h2>CEO问候</h2>
			</div>
			<article>
				<figure>
					<img src="/cn/assets/images/introduce/img_greetings.jpg" class="img-fluid" alt="인사말배경">
				</figure> 
				<div class="row">
					<div class="col-12 col-xl-5">
						<div class="greeting-card">
							<p>
								您好?<br>
								欢迎来访问我们的网页
							</p>
						</div>
					</div>
					<div class="col-12 col-xl-7">
						<div class="details">
							<b>人们 <i>建康</i>, <i>會社</i> <i>建康</i>, <i>百年</i> 价值的企业</b> 
							<p>
								UTOSYS是一家聆听每个员工的个人意见，
								以追求员工的绝对快乐，同时全体员工尽最大努力，
								以追求客户所期望的最大价值。

								<br>
								<br>
								Utosys已经将业务范围从LCD / OLED领域的物流系统领域扩展到检测设备系统领域，再到基于LCD和OLED行业公认的技术的国内市场和全球市场。
								<br>
								<br>
								在瞬息万变的市场形势下，我们将尽我们所能优先考虑客户，努力成为一家始终在技术开发和思维方面做到最好的公司，以满足客户的需求，追求百年价值的企业。
								<br>
								<br>
								我们期待您对UTOSYS的持续关注和鼓励。
								<br>
								<br>
								谢谢。
								<br>
								<br>
								（株）UTOSYS 全体成员
							</p>
						</div>
					</div>
				</div>
			</article>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/docfoot.php'); ?>
</body>
</html>