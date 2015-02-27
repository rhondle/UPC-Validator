<?php
/*
UPC and EAN-13 check digit validator
Apr 24, 2009

This code is licensed for use under the LGPLv3

(C) 2009 Marty Anstey
https://marty.anstey.ca/

This function has been optimized for speed fairly well. I tested this function against over one million EAN-13 codes from www.upcdatabase.com and all check digits were validated correctly. Only a few hand-typed UPC codes were tested however, so if you experience any problems please let me know (visit the contact page on my website) and please pass along the offending UPC code.

If you end up using this function in your application, a note in the credits would be appreciated ;)

No error checking is performed; expects a 12 or 13 digit code only. Returns TRUE if the check digit in the UPC or EAN-13 code is correct, FALSE otherwise.
*/

function verifycheckdigit($val) {
	return ((((ceil(($a=((strlen($val)==12)?((($val[0]+$val[2]+$val[4]+$val[6]+$val[8]+$val[10])*3)+($val[1]+$val[3]+$val[5]+$val[7]+$val[9])):(($val[0]+$val[2]+$val[4]+$val[6]+$val[8]+$val[10])+(($val[1]+$val[3]+$val[5]+$val[7]+$val[9]+$val[11])*3))))/10))*10-$a)==substr($val,-1,1))?TRUE:FALSE);
}
