<?php namespace Dudy\MenuManager;

use Backend;
use System\Classes\PluginBase;

/**
 * MenuManager Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'MenuManager',
            'description' => 'No description provided yet...',
            'author'      => 'Dudy',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Dudy\MenuManager\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'dudy.menumanager.some_permission' => [
                'tab' => 'MenuManager',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'menumanager' => [
                'label'       => 'Menu Manager',
                'url'         => Backend::url('dudy/menumanager/categories'),
                'icon'        => 'icon-pencil-square-o',
                'permissions' => ['dudy.menumanager.*'],
                'order'       => 500,
            ],
        ];
    }
}
