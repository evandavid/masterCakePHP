<?php
//  Spec for PHP
//  Copyright (C) 2011 Iván -DrSlump- Montes <drslump@pollinimini.net>
//
//  This source file is subject to the MIT license that is bundled
//  with this package in the file LICENSE.
//  It is also available through the world-wide-web at this URL:
//  http://creativecommons.org/licenses/MIT/


use DrSlump\Spec;

// Matcher names should be written as if they were to complete the
// sentence "value should ...". Words like 'be', 'to', 'at', 'the' ...
// will be automatically ignored but when Spec finds two conflicting
// matchers they will be used to disambiguate.

$matchers = Spec::matchers();

$matchers['be equal to'] = '\Hamcrest\Matchers::equalTo';
$matchers['be eq to'] = '\Hamcrest\Matchers::equalTo';

$matchers['be the same to'] = '\Hamcrest\Matchers::identicalTo';
$matchers['be identical to'] = '\Hamcrest\Matchers::identicalTo';
$matchers['be exactly'] = '\Hamcrest\Matchers::identicalTo';
$matchers['be exactly equal to'] = '\Hamcrest\Matchers::identicalTo';

$matchers['be at most'] = '\Hamcrest\Matchers::lessThanOrEqualTo';
$matchers['be less equal to'] = '\Hamcrest\Matchers::lessThanOrEqualTo';
$matchers['be less equal than'] = '\Hamcrest\Matchers::lessThanOrEqualTo';
$matchers['be le to'] = '\Hamcrest\Matchers::lessThanOrEqualTo';
$matchers['be le than'] = '\Hamcrest\Matchers::lessThanOrEqualTo';

$matchers['be at least'] = '\Hamcrest\Matchers::greaterThanOrEqualTo';
$matchers['be more equal to'] = '\Hamcrest\Matchers::greaterThanOrEqualTo';
$matchers['be more equal than'] = '\Hamcrest\Matchers::greaterThanOrEqualTo';
$matchers['be greater equal to'] = '\Hamcrest\Matchers::greaterThanOrEqualTo';
$matchers['be greater equal than'] = '\Hamcrest\Matchers::greaterThanOrEqualTo';
$matchers['be ge to'] = '\Hamcrest\Matchers::greaterThanOrEqualTo';
$matchers['be ge than'] = '\Hamcrest\Matchers::greaterThanOrEqualTo';

$matchers['be greater than'] = '\Hamcrest\Matchers::greaterThan';
$matchers['be more than'] = '\Hamcrest\Matchers::greaterThan';

$matchers['be less than'] = '\Hamcrest\Matchers::lessThan';

$matchers['be an instance of'] = '\Hamcrest\Matchers::anInstanceOf';
$matchers['be an instanceof'] = '\Hamcrest\Matchers::anInstanceOf';

$matchers['be an empty string'] = '\Hamcrest\Matchers::isEmptyString';
$matchers['be an empty array'] = '\Hamcrest\Matchers::emptyArray';

$matchers['be of type'] = '\Hamcrest\Matchers::typeOf';
$matchers['has type of'] = '\Hamcrest\Matchers::typeOf';
$matchers['have type of'] = '\Hamcrest\Matchers::typeOf';

$matchers['be an array'] = '\Hamcrest\Matchers::arrayValue';
$matchers['be a string'] = '\Hamcrest\Matchers::stringValue';
$matchers['be a boolean'] = '\Hamcrest\Matchers::booleanValue';
$matchers['be a bool'] = '\Hamcrest\Matchers::booleanValue';
$matchers['be a double'] = '\Hamcrest\Matchers::doubleValue';
$matchers['be a float'] = '\Hamcrest\Matchers::floatValue';
$matchers['be an integer'] = '\Hamcrest\Matchers::integerValue';
$matchers['be an int'] = '\Hamcrest\Matchers::integerValue';
$matchers['be an object'] = '\Hamcrest\Matchers::objectValue';
$matchers['be a resource'] = '\Hamcrest\Matchers::resourceValue';

$matchers['be a scalar'] = '\Hamcrest\Matchers::scalarValue';
$matchers['be a scalar value'] = '\Hamcrest\Matchers::scalarValue';
$matchers['be numeric'] = '\Hamcrest\Matchers::numericValue';
$matchers['be a numeric value'] = '\Hamcrest\Matchers::numericValue';
$matchers['be callable'] = '\Hamcrest\Matchers::callableValue';
$matchers['be a callable value'] = '\Hamcrest\Matchers::callableValue';

$matchers['be a null'] = '\Hamcrest\Matchers::nullValue';
$matchers['be a null value'] = '\Hamcrest\Matchers::nullValue';
$matchers['be a nil'] = '\Hamcrest\Matchers::nullValue';
$matchers['be a nil value'] = '\Hamcrest\Matchers::nullValue';

$matchers['be a true'] = '\DrSlump\Spec\Matcher\True::trueValue';
$matchers['be a true value'] = '\DrSlump\Spec\Matcher\True::trueValue';

$matchers['be truthy'] = '\DrSlump\Spec\Matcher\Truthy::truthyValue';
$matchers['be a truthy value'] = '\DrSlump\Spec\Matcher\Truthy::truthyValue';
$matchers['be truly'] = '\DrSlump\Spec\Matcher\Truthy::truthyValue';
$matchers['be a truly value'] = '\DrSlump\Spec\Matcher\Truthy::truthyValue';

$matchers['be a false'] = '\DrSlump\Spec\Matcher\False::falseValue';
$matchers['be a false value'] = '\DrSlump\Spec\Matcher\False::falseValue';

$matchers['be falsy'] = '\DrSlump\Spec\Matcher\Falsy::falsyValue';
$matchers['be a falsy value'] = '\DrSlump\Spec\Matcher\Falsy::falsyValue';

$matchers['be empty'] = '\DrSlump\Spec\Matcher\IsEmpty::emptyValue';
$matchers['be an empty value'] = '\DrSlump\Spec\Matcher\IsEmpty::emptyValue';

$matchers['contain'] = '\Hamcrest\Matchers::hasItemInArray';
$matchers['have an item'] = '\Hamcrest\Matchers::hasItemInArray';
$matchers['have an item like'] = '\Hamcrest\Matchers::hasItemInArray';

$matchers['contain the key'] = '\Hamcrest\Matchers::hasKeyInArray';
$matchers['have the key'] = '\Hamcrest\Matchers::hasKeyInArray';

$matchers['have a length of'] = '\Hamcrest\Matchers::arrayWithSize';
$matchers['have a count of'] = '\Hamcrest\Matchers::arrayWithSize';
$matchers['count'] = '\Hamcrest\Matchers::arrayWithSize';

// TODO: Define the rest of Hamcrest's collection related matchers



// Example matcher with callback
$matchers->register(
    array('be odd', 'be an odd value'),
    function(){
        $matcher = new DrSlump\Spec\Matcher\Callback();
        $matcher->setDescription('an odd number');
        $matcher->setCallback(function($v){
            return $v % 2;
        });
        return $matcher;
    }
);

// Example matcher with expected value and callback
$matchers->register(
    array('be case insensitive equal', 'be nocase equal', 'be equal nocase', 'be nocase eq', 'be eq nocase'),
    function($expected){
        $matcher = new DrSlump\Spec\Matcher\Callback($expected);
        $matcher->setDescription('equal (case insensitive) to ' . $expected);
        $matcher->setCallback(function($v, $expected){
            return strcasecmp($v, $expected) === 0;
        });
        return $matcher;
    }
);
