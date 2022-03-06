<?php

use Presentation\Component;


class Drawer extends Component {


    
    public function __construct($name,$id,$params) {

        parent::__construct($name,$id,$params);
        $this->template = "drawer";
    }


    public function getStyles() {
        return array(
            "active" => true,
            "href" => "/content/themes/default/components/drawer/css/drawer.css?bust=001"
        );
    }

    public function getScripts() {
        return array(
            "src" => "/content/themes/default/components/drawer/js/sidebar.js"
        );
    }

}