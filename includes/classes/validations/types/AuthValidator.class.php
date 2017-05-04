<?php
class AuthValidator extends Validator {
    protected static $handlers = [
        'FirstLatinRule',
        'ContainsSymbolsRule',
        'LastDigitRule',
        'MinLengthRule',
        'MaxLengthRule'
    ];
}