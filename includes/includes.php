<?
define('CUR_DIR', realpath(__DIR__));
include_once(CUR_DIR . '/helpers.php');

$aClasses = [
	'validations/BaseRules',
    'validations/rules/FirstLatinRule',
    'validations/rules/ContainsSymbolsRule',
    'validations/rules/LastDigitRule',
    'validations/rules/MinLengthRule',
    'validations/rules/MaxLengthRule',
    'validations/Validator',
    'validations/types/AuthValidator'
];
foreach($aClasses as $className){
	$relPath = CUR_DIR . '/classes/' . $className . '.class.php';
	if(file_exists($relPath)){
		include_once($relPath);
	}
}