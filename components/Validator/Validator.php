<?php

class Validator
{
    private $data_to_validate;
    public $validate = true;

    public function __construct($array)
    {
        $this->data_to_validate = $array;
        $this->getDataToValidate();

    }

    /**
     * @return mixed
     */
    public function getDataToValidate()
    {
        foreach ($this->data_to_validate as $name => $type) {
            if ($type == 'int' && !is_numeric($_REQUEST[$name])) {
                $this->validate = false;
            }


            if (($type == 'string' && $_REQUEST[$name] != filter_var($_REQUEST[$name], FILTER_SANITIZE_STRING)) || !$_REQUEST[$name]) {
                $this->validate = false;
            }
        }
        return $this->data_to_validate;
    }


}