<?php

class Validator
{
    //Поля для валидации
    private $data_to_validate;

    // Результат валидации
    public $validate = true;

    // При создании нового объекта передаем поля которые нужно проверить

    public function __construct($array)
    {
        $this->data_to_validate = $array;
        $this->getDataToValidate();
    }

    /**
     * Производит валидацию данных, результат проверки записывается в переменную $validate
     *
     */

    public function getDataToValidate()
    {
        foreach ($this->data_to_validate as $name => $type) {
            // Проверяем поле типа число если не число, то выдаем ошибку
            if ($type == 'int' && !is_numeric($_REQUEST[$name])) {
                $this->validate = false;
            }

            // Проверяем строку на наличие запрещенных символов, если после очистки строка отличается от исходной, то выдаем ошибку
            if (($type == 'string' && $_REQUEST[$name] != filter_var($_REQUEST[$name], FILTER_SANITIZE_STRING)) || !$_REQUEST[$name]) {
                $this->validate = false;
            }
        }

    }


}