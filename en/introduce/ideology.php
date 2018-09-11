<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/dochead.php'); ?>
<link rel="stylesheet" href="/en/assets/css/sub.css">
<link rel="stylesheet" href="/en/assets/css/introduce.css">
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/aside.php'); ?>
    
	<!-- page-header -->
    <div class="page-header">
        <div class="page-summary">
            <h2>About Us</h2>
        </div>
		<!-- page-path -->
		<div class="page-path">
			<div class="container"> 
				<ol class="breadcrumb"> 
					<li></li> 
					<li> 
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="depth-list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Philosophy &amp; Vision
							</button>
							<div class="dropdown-menu" aria-labelledby="depth-list">
								<a class="dropdown-item" href="/en/introduce/greetings.php">CEO Message</a>
								<a class="dropdown-item active" href="/en/introduce/ideology.php">Philosophy &amp; Vision</a>
								<a class="dropdown-item" href="/en/introduce/history.php">History &amp; Business result</a>
								<a class="dropdown-item" href="/en/introduce/organization.php">Organization</a>
								<a class="dropdown-item" href="/en/introduce/ci.php">CI</a>
								<a class="dropdown-item" href="/en/introduce/certification.php">Certification status</a>
								<a class="dropdown-item" href="/en/introduce/location.php">Maps</a>
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
				<h3>Management Philosophy</h3>
				<p><b>Realize the supreme value of customers and members</b><br> with the belief that the best technology begins with the human mind</p>
			</article>
			<article class="vision">
				<h3>VISION</h3>
				<strong>Beyond <i>Aliveness</i></strong>
				<p>
					It aims to enhance the status and competitiveness of the FPD equipment <br>by moving forward beyond the present’s mode of thought.
				</p>
				<div class="vision-list">
					<figure>
						<img src="/en/assets/images/introduce/img_vision_list_sm.png" class="d-sm-block d-md-none d-xl-none" alt=""> 
						<img src="/en/assets/images/introduce/img_vision_list_md.png" class="d-none d-md-block d-xl-none" alt=""> 
						<img src="/en/assets/images/introduce/img_vision_list_xl.png" class="d-none d-md-none d-xl-block" alt="">
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
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/en/inc/docfoot.php'); ?>
</body>
</html>