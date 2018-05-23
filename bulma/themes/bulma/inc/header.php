<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage(); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="initial-scale=1.0">

        <link href="<?php echo $this->getThemePath(); ?>/css/bulma.css" rel="stylesheet" type="text/css" media="all" />
        <?php echo Core::make('helper/html')->css($view->getStylesheet('main.less')); ?>
        
        <?php Loader::element('header_required'); ?>
    </head>
    <body>
        <div id="page-body-wrap" class="<?php echo $c->getPageWrapperClass(); ?> <?php echo $c->getCollectionHandle(); ?> <?php if ($c->isEditMode()) { echo 'edit-mode'; } ?>">
            <header class="header section">
                <div class="container">
                    <div class="columns">
                        <div class="column is-6-tablet is-3-desktop logo">
                            <?php
                            $a = new GlobalArea('Header Site Title');
                            $a->display();
                            ?>
                        </div>
                        <div class="column is-6-tablet is-offset-1-desktop is-8-desktop navigation">
                            <?php
                            $a = new GlobalArea('Header Navigation');
                            $a->display();
                            ?>
                        </div>
                    </div>
                </div>
            </header>