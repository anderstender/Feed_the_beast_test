<?
class LastDigitRule extends BaseRules{
    protected static $error_desc = 'Логин должен заканчиваться только цифрой';
    public function Validate($value){
        $reg = '/^.*[0-9]$/';
        return (preg_match($reg, $value) == true);
    }
    public function ClassName(){
        return __CLASS__;
    }
}