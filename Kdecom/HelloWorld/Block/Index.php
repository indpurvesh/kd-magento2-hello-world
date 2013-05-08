<?php

class Kdecom_HelloWorld_Block_Index extends Mage_Page_Block_Html_Header {

    public function getHelloWorld() {
        return "Hello World";
    }
    public function getWelcome() {
        $welcome = "test";
        //$welcome = parent::getWelcome();
        return "testnew " . $welcome;
    }

    public function getHelloWorldTest() {
        return "Hello World Test Action";
    }

}
