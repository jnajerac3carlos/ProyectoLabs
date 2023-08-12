<?php

class Parameter {
    public $type;
    public $value;

    public function __construct($type, $value) {
        $this->type = $type;
        $this->value = $value;
    }
}
?>