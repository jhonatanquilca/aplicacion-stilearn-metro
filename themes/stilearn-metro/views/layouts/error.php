<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>    
    <!--<title>Thin Admin</title>-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/favicon.ico" />
    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/vendor/bootstrap-checkbox.css">

    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/minimal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="bg-1">
    <!-- Wrap all page content here -->
    <div id="wrap">
        <!-- Make page fluid -->
        <div class="row">
            <!-- Page content -->
            <div id="content" class="col-md-12 full-page error">
                <div class="inside-block">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/logo-big.png" alt class="logo">
                    <?php echo $content ?>                  
                </div>
            </div>
        </div>

    </div>
    <!-- Wrap all page content end -->
</body>
<!-- END BODY -->
</html>