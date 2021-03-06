<?php

/**
 Copyright 2013-2014 Amine Cherrai

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.

  @author Amine Cherrai
*/


/**

POST to this script these DATA:

MTC :
	$language 	: FR, ENG, AR
	$symbolCur 	: EUR, DH, USD

Oredr :
	$totalAmountTx

customer :
	$name
	$address
	$city
	$state
	$postCode
	$country
	$tel
	$email


EXAMPLE:
	Look at index.php


*/

require("mtc_class.php");

$MTC = new MTC_CLASS();

foreach ($_POST as $key => $value)
{
	$$key = $value;
}

$MTC->pay($language, $symbolCur, $totalAmountTx, $name, $address, $city, $state, $postCode, $country, $email, $tel);

//EOF