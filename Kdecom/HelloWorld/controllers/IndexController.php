<?php

class Kdecom_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        $this->loadLayout();
        $this->loadLayout('hello_world_index');
        $this->renderLayout();
    }
    public function testAction() {
        $this->loadLayout();
        $this->loadLayout('hello_world_test');
        $this->renderLayout();
    }

}
