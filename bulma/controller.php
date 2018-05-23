<?php
namespace Concrete\Package\Bulma;

use \Concrete\Core\Database\EntityManager\Provider\StandardPackageProvider;
use \Concrete\Core\Package\Package;
use \Concrete\Core\Page\Theme\Theme as PageTheme;
use \Concrete\Core\Support\Facade\Application as Core;
use \Concrete\Package\Bulma\Src\BulmaGridFramework;

class Controller extends \Concrete\Core\Package\Package
{
    protected $pkgHandle = 'bulma';
    protected $appVersionRequired = '8.0';
    protected $pkgVersion = '1.0.0';
    protected $pkgAutoloaderRegistries = array(
        'src' => '\Concrete\Package\Bulma\Src'
    );

    public function getPackageDescription()
    {
        return t('Bulma grid framework and basic theme.');
    }

    public function getPackageName()
    {
        return t('Bulma');
    }

    public function install()
    {
        $pkg = parent::install();
        $this->installThemes($pkg);
    }

    public function upgrade()
    {
        parent::upgrade();
        $pkg = Package::getByHandle($this->pkgHandle);
        $this->installThemes($pkg);
    }

    public function on_start()
    {
        //register our custom bulma framework
        $manager = Core::make('manager/grid_framework');
        $manager->extend('bulma', function($app) {
            return new BulmaGridFramework();
        });
    }

    private function installThemes($pkg)
    {
        $theme = PageTheme::getByHandle('bulma');
        if (!$theme || !is_object($theme)) {
            PageTheme::add('bulma', $pkg)->applyToSite();
        }
    }
}