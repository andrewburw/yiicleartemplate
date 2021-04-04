<?php 

use \yii\bootstrap\NavBar;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test site yiiii</title>
</head>
<body>
<?php 
        NavBar::begin([
            'brandLabel'=> 'SUPER',
            'brandUrl' =>Yii::$app->homeUrl,
            'options'  => [
                'class' => 'navbar-default navbar-fixed-top'
            ]
        ]);
        NavBar::end();
?>
    <?= $content ?>
</body>
</html> 