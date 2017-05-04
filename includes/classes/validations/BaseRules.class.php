<?
/*
	абстрактный класс для реализации проверки правила
	наследники будут реализовывать 1 метод, обеспечит это интерфейс iRules
	данный класс реализует всё остальное
*/
abstract class BaseRules{
	public static function GetClassName(){
        return static::ClassName();
    }

    protected static $error_desc;
	public function GetErrorDesc(){
		return static::$error_desc;
	}

	abstract public function Validate($value);
    abstract public function ClassName();
}