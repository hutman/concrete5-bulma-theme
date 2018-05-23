<?php
namespace Concrete\Package\Bulma\Theme\Bulma;

use \Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme {

    protected $pThemeGridFrameworkHandle = 'bulma';

    public function registerAssets()
    {
        $this->requireAsset('javascript', 'jquery');
    }
}