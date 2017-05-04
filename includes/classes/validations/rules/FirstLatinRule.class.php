<?
class FirstLatinRule extends BaseRules{
    protected static $error_desc = 'Логин должен начинаться с латинской буквы';
    public function Validate($value){
        $reg = '/^[a-zA-Z].*$/';
        return (preg_match($reg, $value) == true);
    }
    public function ClassName(){
        return __CLASS__;
    }
}