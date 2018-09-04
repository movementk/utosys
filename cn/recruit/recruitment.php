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
								<a class="dropdown-item" href="/cn/recruit/recruit_person.php">人才奖</a>
								<a class="dropdown-item" href="/cn/recruit/walfare.php">福利制度</a>
								<a class="dropdown-item active" href="/cn/recruit/recruitment.php">招聘信息</a>
							</div> 
						</div>
					</li>
				</ol>
			</div>
		</div>
    </div>
   
	<!-- Content -->
    <main id="content" class="recruitment">
    	<div class="container">
			<!-- page-title -->
			<div class="page-title">
				<h2>招聘信息</h2>
			</div>
			<article class="process">
			    <div class="article-header">
			        <ol>
			            <li>
			                <figure>
			                    <img src="/cn/assets/images/recruit/img_recruitment01.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 01</small>
			                        <p>接收申请</p>
			                    </figcaption>
			                </figure>
			            </li>
			            <li>
			                <figure>
			                    <img src="/cn/assets/images/recruit/img_recruitment02.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 02</small>
			                        <p>筛选简历</p>
			                    </figcaption>
			                </figure>
			            </li>
			            <li>
			                <figure>
		                    	<img src="/cn/assets/images/recruit/img_recruitment04.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 04</small>
			                        <p>第1次面试<br class="d-md-none">（工作组）</p>
			                    </figcaption>
			                </figure>
			            </li>
			            <li>
			                <figure>
			                    <img src="/cn/assets/images/recruit/img_recruitment03.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 03</small>
			                        <p>第2次面试<br class="d-md-none">（管理层）</p>
			                    </figcaption>
			                </figure>
			            </li>
			            <li>
			                <figure>
			                    <img src="/cn/assets/images/recruit/img_recruitment05.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 05</small>
			                        <p>最终合格</p>
			                    </figcaption>
			                </figure>
			            </li>
			        </ol>
			    </div>
			    <div class="article-content">
                    <ol>
                        <li>
                            <div class="row">
                                <div class="col-12 col-md-5 col-xl-3">
                                    <strong>STEP 01</strong>
                                    <h4>接收申请</h4>
                                </div>
                                <div class="col-12 col-md-7 col-xl-9">
                                    <p class="summary">
                                        根据招聘信息，您可以选择并提交合适您岗位的申请表。
                                    </p>
                                </div>
                            </div>                            
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-12 col-md-5 col-xl-3">
                                    <strong>STEP 02</strong>
                                    <h4>筛选简历</h4>
                                </div>
                                <div class="col-12 col-md-7 col-xl-9">
                                    <p class="summary">
                                        根据申请人的申请表，评估申请人的基本能力来判断适不适合UTOSYS.<br>
                                        您提交的简历和个人介绍需要写的真实，不可有虚假。
                                    </p>
                                </div>
                            </div>                            
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-12 col-md-5 col-xl-3">
                                    <strong>STEP 03</strong>
                                    <h4>面试<br class="d-none d-md-block">(工作组，<br class="d-none d-md-block">管理层)</h4>
                                </div>
                                <div class="col-12 col-md-7 col-xl-9">
                                    <p class="summary">
                                        面试的对象是提交简历的人员，是由工作组和管理层来面试。<br class="d-none d-xl-block">	
                                        通过它来评估面试对象的性格和价值观，评估工作能力，热情和展开业务的实际能力。
                                    </p>
                                </div>
                            </div>                            
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-12 col-md-5 col-xl-3">
                                    <strong>STEP 04</strong>
                                    <h4>最终合格</h4>
                                </div>
                                <div class="col-12 col-md-7 col-xl-9">
                                    <p class="summary">
                                        最终录取后，会安排部属，通过OJT成为UTOSYS的员工。
                                    </p>
                                </div>
                            </div>                            
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