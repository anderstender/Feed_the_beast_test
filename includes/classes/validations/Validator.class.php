<?php
/*
 * класс для реализации валидирования
 * наследники представляют из себя просто список классов правил,
 * которые стоит подключать
 * то есть можно создать кучу разных схем валидации из набора заранее заданных правил
 * */
abstract class Validator{
    protected static $handlers = [];
    public function Validate($value){
        $result = [
            'is_validate'   =>  true,
            'errors'   =>  []
        ];
        foreach (static::$handlers as $class_name){
            if(!$class_name::Validate($value)){
                $result['is_validate'] = false;
                $result['errors'][$class_name] = [
                    'desc'          =>  $class_name::GetErrorDesc(),
                    'is_validate'   =>  false
                ];
            }
        }

        return $result;
    }
}