<?php

class Route {

    protected $_uri = array();
    protected $_method = array();

    public function add($uri, $method = null)
    {
        $this->_uri[] = '/' . trim($uri, '/');

        if ($method != null) {
            $this->_method[] = $method;
        }
    }

    public function submit()
    {
        $uriGetParam = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';

        foreach ($this->_uri as $key => $value) {

            if (preg_match("#^$value$#", $uriGetParam)) {

                $useMethod = $this->_method[$key];
                new $useMethod();
            }
        }
    }

    private function addSlash($string)
    {
        if ($string[strlen($string) - 1] != '/') {
            $string .= '/';

            return $string;
        }
    }
} 