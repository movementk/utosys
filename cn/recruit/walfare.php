<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/dochead.php'); ?>
<link rel="stylesheet" href="/cn/assets/css/sub.css">
<link rel="stylesheet" href="/cn/assets/css/recruit.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>人才录用</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								人才奖
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href=/cn/recruit/recruit_person.php>人才奖</a>
								<a class="dropdown-item active" href="/cn/recruit/walfare.php">福利制度</a>
								<a class="dropdown-item" href="/cn/recruit/recruitment.php">招聘信息</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="walfare">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>福利制度</h2>
			</div>
			<article class="health">
				<div class="info">
					<h5>健康生活的支持</h5>
					<ol>
						<li>
							<dl>
								<dt>
									<span>1</span>休假
								</dt>
								<dd>
									通过法定节假日，带薪休假， Re-Fresh 
									休假支持员工的健康生活。
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span>2</span>员工健康检查</dt>
								<dd>
									定期的健康检查能保证员工的健康。
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span>3</span>社内活动</dt>
								<dd>
									通过保龄球，台球，足球等活动来保证员工的健康生活。
								</dd>
							</dl>
						</li>
					</ol>
				</div>
			</article>
			
			<article class="happy">
				<div class="info">
					<h5>幸福生活的支持</h5>
					<ol>
						<li>
							<span>1</span>
							<p>生日或结婚纪念日有礼品赠送</p>
						</li>
						<li>
							<span>2</span>
							<p>节假日礼物及报销回家路费</p>
						</li>
						<li>
							<span>3</span>
							<p>运营社内食堂</p>
						</li>
					</ol>
				</div>
			</article>
			
			<article class="stable">
				<div class="info">
					<h5>稳定生活的支持</h5>
					<ol>
						<li>
							<dl>
								<dt>
									<span>1</span>慶弔事支援
								</dt>
								<dd>
									员工的慶弔事时有相应的资金补助和给予带薪休假。
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span>2</span>提供宿舍</dt>
								<dd>
									为外地员工提供宿舍 
								</dd>
							</dl>
						</li>
						<li>
							<span>3</span>
							<p>长期勤工奖金</p>
						</li>
					</ol>
				</div>
			</article>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/docfoot.php'); ?>
</body>
</html>