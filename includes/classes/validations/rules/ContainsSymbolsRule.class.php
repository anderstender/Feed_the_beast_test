<?php
class ContainsSymbolsRule extends BaseRules{
    protected static $error_desc = 'Логин должен состоять из цифр, латинских букв, точки и подчеркивания';
    public function Validate($value){
        $reg = '/^[a-zA-Z0-9\._]*$/';
        return (preg_match($reg, $value) == true);
    }

    public function ClassName(){
        return __CLASS__;
    }
}