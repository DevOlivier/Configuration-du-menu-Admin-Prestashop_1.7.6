<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Module_Test extends Module
{
    public function __construct()
    {
        $this->name = 'module_test';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Prestashop';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.6',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('module_test');
        $this->description = $this->l('Starter création d\'un module');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MODULE_TEST_NAME')) {
            $this->warning = $this->l('No name provided');
        }
    }

    public function install(){
        $tab = new Tab();
        $tab->class_name = "DemoController";
        $tab->module = "module_test";
        $tab->id_parent = (int) Tab::getIdFromClassName('AdminAdvancedParameters');

            foreach(Language::getLanguages(false) as $lang){
                $tab->name[(int) $lang['id_lang']] = 'First Module 1.7.6';
            }
            $tab->save();

        return parent::install(); 
    }

    public function uninstall(){
        return parent::uninstall();

    }




    
    
    
}

