<?php defined("C5_EXECUTE") or die("Access Denied."); ?>

            <footer class="footer">
                <?php
                $a = new GlobalArea('Footer');
                $a->enableGridContainer();
                $a->display();
                ?>
            </footer>
        </div>
        <?php Loader::element('footer_required'); ?>
    </body>
</html>