<?
class MaxLengthRule extends BaseRules{
    protected static $error_desc = 'Максимальная длина логина — 25 символов';
    public function Validate($value){
        return strlen($value) <= 25;
    }
    public function ClassName(){
        return __CLASS__;
    }
}