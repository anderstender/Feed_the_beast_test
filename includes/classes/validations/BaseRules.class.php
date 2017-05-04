<?
/*
	абстрактный класс для реализации проверки правила
	наследники будут реализовывать 2 метода:
        саму валидацию, с возвратом true/false
        и название класса, для работы во всяких массивах и т.д
	данный класс реализует всё остальное
*/
abstract class BaseRules{
	public static function GetClassName(){
        return static::ClassName();
    }
	public function GetErrorDesc(){
		return static::$error_desc;//данное св-во задается в дочернем классе, строка с описание ошибки
	}

	abstract public function Validate($value);
    abstract public function ClassName();
}