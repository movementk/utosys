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
								<a class="dropdown-item" href="/recruit/recruit_person.php">인재상</a>
								<a class="dropdown-item" href="/recruit/walfare.php">복지제도</a>
								<a class="dropdown-item active" href="/recruit/recruitment.php">채용안내</a>
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
				<h2>채용절차</h2>
			</div>
			<article class="process">
			    <div class="article-header">
			        <ol>
			            <li>
			                <figure>
			                    <img src="/assets/images/recruit/img_recruitment01.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 01</small>
			                        <p>지원서 접수</p>
			                    </figcaption>
			                </figure>
			            </li>
			            <li>
			                <figure>
			                    <img src="/assets/images/recruit/img_recruitment02.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 02</small>
			                        <p>서류전형</p>
			                    </figcaption>
			                </figure>
			            </li>
			            <li>
			                <figure>
		                    	<img src="/assets/images/recruit/img_recruitment04.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 04</small>
			                        <p>1차면접<br class="d-md-none">(실무진)</p>
			                    </figcaption>
			                </figure>
			            </li>
			            <li>
			                <figure>
			                    <img src="/assets/images/recruit/img_recruitment03.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 03</small>
			                        <p>2차면접<br class="d-md-none">(경영진)</p>
			                    </figcaption>
			                </figure>
			            </li>
			            <li>
			                <figure>
			                    <img src="/assets/images/recruit/img_recruitment05.png" class="img-fluid" alt="">
			                    <figcaption>
			                        <small class="d-md-none">STEP 05</small>
			                        <p>최종합격</p>
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
                                    <h4>지원서접수</h4>
                                </div>
                                <div class="col-12 col-md-7 col-xl-9">
                                    <p class="summary">
                                        채용공고를 바탕으로 자신에게 적합한 분야를 선택하여 지원서를 작성/제출합니다.
                                    </p>
                                </div>
                            </div>                            
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-12 col-md-5 col-xl-3">
                                    <strong>STEP 02</strong>
                                    <h4>서류전형</h4>
                                </div>
                                <div class="col-12 col-md-7 col-xl-9">
                                    <p class="summary">
                                        지원자의 입사 지원서를 바탕으로 지원자의 기본 역량/유토시스 인재상 기준에 적합 여부를 평가합니다.<br>
                                        이력서와 자기소개서는 면접전형에 활용되므로 성실하고 허위사실 없이 기재를 하셔야 합니다.
                                    </p>
                                </div>
                            </div>                            
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-12 col-md-5 col-xl-3">
                                    <strong>STEP 03</strong>
                                    <h4>면접전형<br class="d-none d-md-block"> (실무진,경영진)</h4>
                                </div>
                                <div class="col-12 col-md-7 col-xl-9">
                                    <p class="summary">
                                        서류전형 합격자를 대상으로 면접이 실시되며, 면접전형은 실무진 면접과 경영진 면접이 있습니다. <br class="d-none d-xl-block">이를 통해 자사 인재상과의 적합한 성품, 가치관 등을 평가하며, 업무 수행을 위한 능력과 열정,  실무역량 등을 평가합니다.
                                    </p>
                                </div>
                            </div>                            
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-12 col-md-5 col-xl-3">
                                    <strong>STEP 04</strong>
                                    <h4>최종합격</h4>
                                </div>
                                <div class="col-12 col-md-7 col-xl-9">
                                    <p class="summary">
                                        최종합격 후 입사자는 부서배치 후 OJT를 통하여 유토시스인으로 육성됩니다.
                                    </p>
                                </div>
                            </div>                            
                        </li>
                    </ol>
			    </div>
			</article>
		</div>	
	</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>