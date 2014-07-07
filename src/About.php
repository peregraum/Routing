<?php

class About {
    public function __construct()
    {
        echo 'This is the about page';
        $this->_other();
    }

    protected function _other()
    {
        echo 'This is the other function';
    }
} 