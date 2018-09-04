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
								历史/业务绩效
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/cn/introduce/greetings.php">CEO问候</a>
								<a class="dropdown-item" href="/cn/introduce/ideology.php">经营理念</a>
								<a class="dropdown-item  active" href="/cn/introduce/history.php">历史/业务绩效</a>
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
    <main id="content" class="history">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>历史/业务绩效</h2>
			</div>
			<ol class="history-list">
			    <li>
			        <h3 class="year year-15">2015</h3>
			        <ol>
			            <li>
			                <dl>
			                    <dt>2015. 12</dt>
			                    <dd>成立研发中心</dd>
			                </dl>
			            </li>
			            <li>
			                <dl>
			                    <dt>2015. 04</dt>
			                    <dd>新公司搬迁</dd>
			                </dl>
			            </li>
			            <li>
			                <dl>
			                    <dt>2015. 03</dt>
			                    <dd>2015.03  更变公司名（DSNT ---UTOSYS) </dd>
			                </dl>
			            </li>
			        </ol>
			    </li>
			    <li>
			        <h3 class="year year-12">2012</h3>
			        <ol>
			            <li>
			                <dl>
			                    <dt>2012. 03</dt>
			                    <dd> LGD 第一次合作企业登录</dd>
			                </dl>
			            </li>
			        </ol>
			    </li>
			    <li>
			        <h3 class="year year-11">2011</h3>
			        <ol>
			            <li>
			                <dl>
			                    <dt>2011. 08</dt>
			                    <dd>创业企业认证 ISO 9001/14001 认证</dd>
			                </dl>
			            </li>
			        </ol>
			    </li>
			    <li>
			        <h3 class="year year-09">2009</h3>
			        <ol>
			            <li>
			                <dl>
			                    <dt>2009. 06</dt>
			                    <dd>更变公司名 （DAS Nanotech --- DSNT)</dd>
			                </dl>
			            </li>
			        </ol>
			    </li>
			    <li>
			        <h3 class="year year-07">2007</h3>
			        <ol>
			            <li>
			                <dl>
			                    <dt>200. 01</dt>
			                    <dd>设立 DAS Nanotech</dd>
			                </dl>
			            </li>
			        </ol>
			    </li>
			</ol>
		</div>
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/cn/inc/docfoot.php'); ?>
</body>
</html>