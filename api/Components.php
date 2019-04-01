<?php

trait Components {

	public function register_сomponents() {
		$this->register_component('compact_product_list', 'compact_product_list_plugin');
	}

    public function compact_product_list_plugin($params, &$smarty) {
        $this->assign('config',           $this->config);
        $this->assign('settings',         $this->settings);
        $this->assign('title',            $params['title']);
        $this->assign('label',            $params['label']);
        $this->assign('placeholder',      $params['placeholder']);
        $this->assign('name',             $params['name']);
        $this->assign('products', $params['products']);

        return $this->smarty->fetch('components/compact_product_list.tpl');
    }

    private function register_component($name_component, $bind_method) {
        $this->smarty->registerPlugin("function", $name_component, array($this, $bind_method));
    }
}