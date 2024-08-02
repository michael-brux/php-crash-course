<?php
$passedTheoryTest = true;
$monthsHeldLearnersLicence = 10;
$heldLearnersLicenseEnough = ($monthsHeldLearnersLicence >= 6);

if ($passedTheoryTest and $heldLearnersLicenseEnough) {
    print 'You may apply for a driving test.';
} else {
    print "Sorry, you don't meet all conditions to take a driver's test.";
}
