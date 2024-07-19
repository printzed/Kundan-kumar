<?php
// Set the content type and filename for the vCard download
header('Content-Type: text/vcard');
header('Content-Disposition: attachment; filename="Kundan_Kumar.vcf"');

// Define the vCard content
$vcard = <<<VCF
BEGIN:VCARD
VERSION:3.0
N:Kumar;Kundan
FN:Kundan Kumar
TITLE:Marketing Project Manager
ORG:Intellicon International Trading LLC
ADR:;;Al Barsha;Dubai;;U A E
TEL;WORK;VOICE:+971 44106972
TEL;CELL;VOICE:+971 522755807
EMAIL:kundan@intellicon-int.com
URL:https://intellicon-int.com/
END:VCARD
VCF;

// Output the vCard content
echo $vcard;
?>
