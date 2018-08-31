<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduce.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
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
								认证现状
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/cn/introduce/greetings.php">CEO问候</a>
								<a class="dropdown-item" href="/cn/introduce/ideology.php">经营理念</a>
								<a class="dropdown-item" href="/cn/introduce/history.php">历史/业务绩效</a>
								<a class="dropdown-item" href="/cn/introduce/organization.php">组织图</a>
								<a class="dropdown-item" href="/cn/introduce/ci.php">CI</a>
								<a class="dropdown-item active" href="/cn/introduce/certification.php">认证现状</a>
								<a class="dropdown-item" href="/cn/introduce/location.php">路线</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="certification">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>认证现状</h2>
			</div>
			<ul class="row">
				<li class="col-6 col-md-4 col-xl-3">
					<a href="#" data-toggle="modal" data-target="#certify-popup">
						<div class="items">
							<img src="/assets/images/introduce/img_certify01.jpg" class="img-fluid" alt="">
						</div>
						<p>특허 제 10-0963955호</p>
					</a>
				</li>
				<li class="col-6 col-md-4 col-xl-3">
					<a href="#" data-toggle="modal" data-target="#certify-popup">
						<div class="items">
							<img src="/assets/images/introduce/img_certify02.jpg" class="img-fluid" alt="">
						</div>
						<p>특허 제 10-0963955호</p>
					</a>
				</li>
				<li class="col-6 col-md-4 col-xl-3">
					<a href="#" data-toggle="modal" data-target="#certify-popup">
						<div class="items">
							<img src="/assets/images/introduce/img_certify03.jpg" class="img-fluid" alt="">
						</div>
						<p>특허 제 10-0963955호</p>
					</a>
				</li>
				<li class="col-6 col-md-4 col-xl-3">
					<a href="#" data-toggle="modal" data-target="#certify-popup">
						<div class="items">
							<img src="/assets/images/introduce/img_certify04.jpg" class="img-fluid" alt="">
						</div>
						<p>특허 제 10-0963955호</p>
					</a>
				</li>
			</ul>
		</div>
	</main>
	
	
	
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
	  Launch demo modal
	</button>

	<!-- Modal -->
	<div class="modal fade" id="certify-popup" tabindex="-1" role="dialog" aria-labelledby="certify-popup" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<!--div class="modal-header"-->
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				<!--/div-->
				<div class="modal-body">
					<figure>
						<img src="/assets/images/introduce/certify-popup.jpg" class="img-fluid" alt="">
					</figure>
				</div>
			</div>
		</div>
	</div>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>