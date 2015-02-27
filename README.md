# UPC-Validator

#####UPC and EAN-13 Check Digit Validator
Original release Apr 24, 2009

(C) 2009 Marty Anstey
https://marty.anstey.ca/

###### Overview

This function has been optimized for speed fairly well. I tested this function against over one million EAN-13 codes from www.upcdatabase.com and all check digits were validated correctly. Only a few hand-typed UPC codes were tested however, so if you experience any problems please let me know (visit the contact page on my website) and please pass along the offending UPC code.

###### Error checking

No error checking is performed; expects a 12 or 13 digit code only. Returns TRUE if the check digit in the UPC or EAN-13 code is correct, FALSE otherwise.




If you end up using this function in your application, a note in the credits would be appreciated ;)
