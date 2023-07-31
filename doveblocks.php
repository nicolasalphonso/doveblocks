<?php

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class DoveBlocks extends Module //implements WidgetInterface
{
    public function __construct()
    {
        $this->name = 'doveblocks';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Nicolas ALPHONSO';
        $this->dependencies = ['prettyblocks'];
        $this->need_instance = 1;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Dove blocks');
        $this->description = $this->l('More blocks for prettyblocks');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return parent::install() &&
        // $this->registerHook('ActionRegisterThemeSettings') &&
        // $this->registerHook('ActionQueueSassCompile') &&
        // $this->registerHook('beforeRenderingClassicFeaturedProduct') &&
        $this->registerHook('ActionRegisterBlock') &&
        $this->registerHook('displayHeader');
    }
    
    public function uninstall()
    {
        return parent::uninstall() &&
        // $this->unregisterHook('ActionRegisterThemeSettings') &&
        // $this->unregisterHook('ActionQueueSassCompile') &&
        // $this->unregisterHook('beforeRenderingClassicFeaturedProduct') &&
        $this->unregisterHook('ActionRegisterBlock') &&
        $this->unregisterHook('displayHeader');
    }

    // Register blocks here.
    public function hookActionRegisterBlock()
    {
        $blocks = [];
        $blocks[] = [
            'name' => $this->trans('Homepage Services'),
            'description' => $this->trans('Display services on home page'),
            'code' => 'homepage_services',
            'icon' => 'ShieldCheckIcon',
            //'icon_path' => 'https://yoursite.com/img/icon.png', // custom icon
            'need_reload' => true,
            // reload iframe after save
            //'nameFrom' => 'field_name', // take the name of a config field
            'templates' => [
                'default' => 'module:' . $this->name . '/views/templates/blocks/homepage_services.tpl'
            ],
            'config' => [
                'fields' => [
                    // service 1
                    'icon1' => [
                        'type' => 'fileupload',
                        'label' => 'Icon - 1',
                        'path' => '$/modules/doveblocks/views/images/',
                        'default' => [
                            'url' => 'https://via.placeholder.com/50x50',
                        ],
                        'force_default_value' => true,
                    ],
                    'title1' => [
                        'type' => 'text',
                        'label' => 'Title service - 1',
                        'default' => 'Service title 1',
                        'force_default_value' => true,
                    ],
                    'desc1' => [
                        'type' => 'text',
                        'label' => 'Add a small description - 1',
                        'default' => 'Lorem ispum... 1',
                        'force_default_value' => true,
                    ],
                    // service 2
                    'icon2' => [
                        'type' => 'fileupload',
                        'label' => 'Icon - 2',
                        'path' => '$/modules/doveblocks/views/images/',
                        'default' => [
                            'url' => 'https://via.placeholder.com/50x50',
                        ],
                        'force_default_value' => true,
                    ],
                    'title2' => [
                        'type' => 'text',
                        'label' => 'Title service - 2',
                        'default' => 'Service title 2',
                        'force_default_value' => true,
                    ],
                    'desc2' => [
                        'type' => 'text',
                        'label' => 'Add a small description - 2',
                        'default' => 'Lorem ispum... 2',
                        'force_default_value' => true,
                    ],
                    // service 3
                    'icon3' => [
                        'type' => 'fileupload',
                        'label' => 'Icon - 3',
                        'path' => '$/modules/doveblocks/views/images/',
                        'default' => [
                            'url' => 'https://via.placeholder.com/50x50',
                        ],
                        'force_default_value' => true,
                    ],
                    'title3' => [
                        'type' => 'text',
                        'label' => 'Title service - 3',
                        'default' => 'Service title 3',
                        'force_default_value' => true,
                    ],
                    'desc3' => [
                        'type' => 'text',
                        'label' => 'Add a small description - 3',
                        'default' => 'Lorem ispum... 3',
                        'force_default_value' => true,
                    ],
                    // service 4
                    'icon4' => [
                        'type' => 'fileupload',
                        'label' => 'Icon - 4',
                        'path' => '$/modules/doveblocks/views/images/',
                        'default' => [
                            'url' => 'https://via.placeholder.com/50x50',
                        ],
                        'force_default_value' => true,
                    ],
                    'title4' => [
                        'type' => 'text',
                        'label' => 'Title service - 4',
                        'default' => 'Service title 4',
                        'force_default_value' => true,
                    ],
                    'desc4' => [
                        'type' => 'text',
                        'label' => 'Add a small description - 4',
                        'default' => 'Lorem ispum... 4',
                        'force_default_value' => true,
                    ],

                ]
            ],
            /*
            'repeater' => [
                'name' => 'Element repeated',
                'nameFrom' => 'field name',
                'groups' => [
                    // ... array of fields
                ]
            ]
            */

        ];

        return $blocks;
    }

    // register css and js
    public function hookdisplayHeader($params)
    {
        $this->context->controller->registerStylesheet('modules-servicescards', 'modules/' . $this->name . '/views/css/homepage_services.css', ['media' => 'all', 'priority' => 150]);
        //$this->context->controller->registerJavascript('modules-servicescards', 'modules/' . $this->name . '/views/js/homepage_services.js', ['position' => 'bottom', 'priority' => 150]);
    }

}
