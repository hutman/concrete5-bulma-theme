<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('inc/header.php');
?>

<main class="main-content">
    <?php
    $a = new Area('Main');
    $a->enableGridContainer();
    $a->display($c);
    ?>
</main>

<?php $this->inc('inc/footer.php'); ?>