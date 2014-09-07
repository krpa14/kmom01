<!doctype html>
<html class='no-js' lang='<?=$lang?>'>
<head>
    <meta charset='utf-8' />
    <title><?=get_title($title)?></title>
    <?php if(isset($favicon)):?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?>
    <?php foreach($stylesheets as $val): ?>
        <link rel='stylesheet' type='text/css' href='<?=$val?>'/>
    <?php endforeach; ?>
    <script src='<?=$modernizr?>'></script>
</head>
<body>
    <div id='wrapper'>
        <div id='header'><?=$header?>
            <?php echo CNavigation::GenerateMenu($menu, 'navbar');?>
        </div>
        <div id='main'><?=$main?></div>
        <div id='footer'><?=$footer?></div>
    </div>  <!-- wrapper -->
    <?php if(isset($jquery)):?><script src='<?=$jquery?>'></script><?php endif; ?>
    <?php if(isset($javascript_include)): foreach($javascript_include as $val): ?>
        <script src='<?=$val?>'></script>
    <?php endforeach; endif; ?>
</body>
</html>
    
    
