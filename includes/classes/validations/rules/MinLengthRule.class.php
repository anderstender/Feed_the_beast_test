<?
class MinLengthRule extends BaseRules{
    protected static $error_desc = 'Минимальная длина логина — один символ';
    public function Validate($value){
        return strlen($value) >= 1;
    }
    public function ClassName(){
        return __CLASS__;
    }
}