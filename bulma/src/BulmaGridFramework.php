<?php
namespace Concrete\Package\Bulma\Src;

use Concrete\Core\Page\Theme\GridFramework\GridFramework;

defined('C5_EXECUTE') or die(_("Access Denied."));

class BulmaGridFramework extends GridFramework
{
    public function getPageThemeGridFrameworkName()
    {
        return t('Bulma');
    }
    
    public function getPageThemeGridFrameworkRowStartHTML()
    {
        return '<div class="columns">';
    }
    
    public function getPageThemeGridFrameworkRowEndHTML()
    {
        return '</div>';
    }
    
    public function getPageThemeGridFrameworkContainerStartHTML()
    {
        return '<div class="container">';
    }
    
    public function getPageThemeGridFrameworkContainerEndHTML()
    {
        return '</div>';
    }
    
    public function getPageThemeGridFrameworkColumnClasses()
    {
        $columns = array(
            'is-1',
            'is-2 ',
            'is-3',
            'is-4',
            'is-5',
            'is-6',
            'is-7',
            'is-8',
            'is-9',
            'is-10',
            'is-11',
            'is-12',
        );
        return $columns;
    }
    
    public function getPageThemeGridFrameworkColumnOffsetClasses()
    {
        $offsets = array(
            'is-offset-1',
            'is-offset-2',
            'is-offset-3',
            'is-offset-4',
            'is-offset-5',
            'is-offset-6',
            'is-offset-7',
            'is-offset-8',
            'is-offset-9',
            'is-offset-10',
            'is-offset-11',
            'is-offset-12',
        );
        return $offsets;
    }
    
    public function getPageThemeGridFrameworkColumnAdditionalClasses()
    {
        return 'column';
    }
    
    public function getPageThemeGridFrameworkColumnOffsetAdditionalClasses()
    {
        return 'column';
    }
}