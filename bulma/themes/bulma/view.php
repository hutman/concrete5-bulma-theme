<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('inc/header.php');
?>

<div class="section">
    <div class="container">
        <?php
        View::element('system_errors', [
            'format' => 'block',
            'error' => isset($error) ? $error : null,
            'success' => isset($success) ? $success : null,
            'message' => isset($message) ? $message : null,
        ]);

        echo $innerContent;
        ?>
    </div>
</div>

<?php $this->inc('inc/footer.php'); ?>