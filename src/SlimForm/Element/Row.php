<?php
namespace SlimForm\Element;

class Row extends Element {
    public function __construct($name, $config) {
        parent::__construct($name, $config);
        $this->_defaultTemplateFile = 'slimform/partial/form/row.twig';
    }
}