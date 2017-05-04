<?php
/*
 * в $handlers просто передаются названия классов,
 * которые будут проверять входную строку валидатора
 * */
class AuthValidator extends Validator {
    protected static $handlers = [
        'FirstLatinRule',
        'ContainsSymbolsRule',
        'LastDigitRule',
        'MinLengthRule',
        'MaxLengthRule'
    ];
}