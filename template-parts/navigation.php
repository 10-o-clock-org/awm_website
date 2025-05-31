<?php
$pages = array(
    'about.php' => 'About',
    'mitmachen.php' => 'Mitmachen',
    'programm.php' => 'Programm',
    'sponsoren.php' => 'Sponsoren',
    'aicamp.php' => 'AI Camp',
    'news.php' => 'News',
) ;

$currentPage = basename($_SERVER['REQUEST_URI']) ;
if ($currentPage == 'php'){
    $currentPage = 'index.php';
}

?>
<?php foreach ($pages as $filename => $pageTitle) { 
    if ($filename == $currentPage) { ?>
        <li class="current"><a href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a></li>
    <?php } else { ?>
        <li id="<?php echo $pageTitle ?>"><a href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a></li>
    <?php
    }
 }
 ?>