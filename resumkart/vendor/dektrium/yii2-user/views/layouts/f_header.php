<header>
        <div id="topbar">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-xs-6">
			<span class="hidden-sm hidden-xs"><i class="icon-location4"></i>1375 RICHMOND AVE. MN </span><span class="vertical-space"></span> <i class="icon-phone4"></i>1-800-666-666
			</div>
			<div class="col-sm-6 col-xs-6 text-right">
				<div class="btn-group social-links hidden-sm hidden-xs">	
					<a href="javascript:;" class="btn btn-link"><i class="icon-facebook4"></i></a>
					<a href="javascript:;" class="btn btn-link"><i class="icon-twitter4"></i></a>
				</div>
				<?php echo yii\helpers\Html::a('LOGIN',['//user/login'],['class' => 'login-button', 'data-method'=>'get']);?>
				<?php echo yii\helpers\Html::a('SIGN UP',['//user/register'],['class' => 'signup-button', 'data-method'=>'get']);?>
			</div>
		</div>
		<div class="top-divider"></div>
	</div>
</div>            <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                    <span class="icon-navicon"></span>
                </button>
                <a class="navbar-brand" href="<?= Yii::$app->homeUrl?>">
                    <img src="<?= Yii::$app->view->theme->baseUrl?>/assets/img/logo.png" data-dark-src="<?= Yii::$app->view->theme->baseUrl?>/assets/img/logo_dark.png" alt="Coco Frontend Template" class="logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li><?php echo yii\helpers\Html::a('HOME',['//']);?></li>
                    <li><?php echo yii\helpers\Html::a('ABOUT',['//site/about']);?></li>
                    <li><?php echo yii\helpers\Html::a('SERVICES',['//site/services']);?></li>
                    <li><?php echo yii\helpers\Html::a('PORTFOLIO',['//site/portfolio']);?></li>
                    <li><?php echo yii\helpers\Html::a('CONTACT',['//site/contact']);?></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-->
    </nav>        <section class="main-slider fullsize" data-stellar-background-ratio="0.5" style="background-image: url(<?= Yii::$app->view->theme->baseUrl?>/images/headers/signup-login.jpg)">
	<div class="slider-caption">
		
    <div class="container">
       
      	</div>	
</div>
</section>
