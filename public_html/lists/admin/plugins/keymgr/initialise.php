<?php

$plugin = $GLOBALS["plugins"]['keymanager'];
if (!is_object($plugin)) {
  print $GLOBALS['I18N']->get('Error initialising key manager');
  return;
}

print $GLOBALS['I18N']->get('Initialising Key Manager').'<br/>';
$plugin->initialise();

print $GLOBALS['I18N']->get('OK').'<br/>';

$testkey = '
-----BEGIN PGP PUBLIC KEY BLOCK-----
Version: GnuPG v1.4.5 (GNU/Linux)

mQGiBEVShPIRBACLNQBiluQCLCy0Tl59lOJA2URY3eVQU9cYPyVbbav6hFxokbVp
5QlCz44ni5Eq9N6zSUJjmm98wmnEL2u4xImmosoax3oxhjOEhTE1GIr5vGKD/e4u
fVpWEsW/8F+HAuy8RC/vdWAL1yV1qnv8Xf6E5YPm0FoAClMJLWIe8yH8pwCghIv1
/8F9i+l/xdPXXpasxZupnmsD+gKYimX2+/qK1x7b8MG96Slgw9Zud8bsNMm/7JNj
yWZDOjhhb5Q4Iup76dPADlq5BvOJmJNo27JqgNTfySTKN5ff7UV4DU1hlM343kVt
shqWxNSfOfgHI4Y1+49q1kGpMnGwyrK69G8Z7xJs28f4CZQB2D11EGlISxQLtDrI
nAC/A/4rVUYhClUijXphYOh8kBpo2Atvb6gRsQz/CUSosifYWulICq/xKCTNuXUB
tDlRzZ9sWv2IIlh+NBq1X+4UVpeH58GqOeJnu7ozaRtmFWatGXmaj3BQlS7LsbRP
3k9Mvi6zlRAPkhmPFjjY+bPUujqP7mwvuqWpZtPMk8BJKuYbXLRBS2V5IEZvciBU
ZXN0aW5nIChETyBOT1QgVVNFIEZPUiBSRUFMKSA8c29tZS51c2VyQHNvbWUuZG9t
YWluLnRsZD6IZgQTEQIAJgUCRVKE8gIbIwUJAESiwAYLCQgHAwIEFQIIAwQWAgMB
Ah4BAheAAAoJEFRCDjPZsVNoMLMAoIJs0R3ACOKVi4ifVb8ywhTHgfUbAJ9uhCwL
vZEaRZhq3m/GXYBAM3y0BbkBDQRFUoTyEAQAoVg+dKVxHuDW28sMY1tHxUwxTSw5
6YPkCfzvJJQ0elEyQ9X02iM48hSJPqhImdVlANjEmcTUN3ipn5uhTF/vmrw47Fbk
wxJuKDOipkuscXc8mcvb19F16+BQkWG+0MzJfXgRCqGfrJm/JryHiN1vw/R8VOC5
hotochxkTlc0MEsAAwUD/Rey1pCd6zELU8UR2MMdn9Q2lsH/TGbPMKBMb/irWCnD
56H9Ce7LE955Iq/kslQ3hV4lcsqf6bPiKD1BrzEzxZ0e6wYXPM3KZOWUdn1bcd3X
8RjLTNTJlmXZBPc9p01feRTICy+Dm+6mBK7TqC4jmUD0fb/7UZdQCYWGPPmamIqf
iE8EGBECAA8FAkVShPICGwwFCQBEosAACgkQVEIOM9mxU2hMbQCeKXf/Ze3AEXf3
rshtRtKyvtoOP2kAni1wuI0zzEP286oCX30IcJT3zYBm
=gQwN
-----END PGP PUBLIC KEY BLOCK-----
-----BEGIN PGP PRIVATE KEY BLOCK-----
Version: GnuPG v1.4.5 (GNU/Linux)

lQHhBEVShPIRBACLNQBiluQCLCy0Tl59lOJA2URY3eVQU9cYPyVbbav6hFxokbVp
5QlCz44ni5Eq9N6zSUJjmm98wmnEL2u4xImmosoax3oxhjOEhTE1GIr5vGKD/e4u
fVpWEsW/8F+HAuy8RC/vdWAL1yV1qnv8Xf6E5YPm0FoAClMJLWIe8yH8pwCghIv1
/8F9i+l/xdPXXpasxZupnmsD+gKYimX2+/qK1x7b8MG96Slgw9Zud8bsNMm/7JNj
yWZDOjhhb5Q4Iup76dPADlq5BvOJmJNo27JqgNTfySTKN5ff7UV4DU1hlM343kVt
shqWxNSfOfgHI4Y1+49q1kGpMnGwyrK69G8Z7xJs28f4CZQB2D11EGlISxQLtDrI
nAC/A/4rVUYhClUijXphYOh8kBpo2Atvb6gRsQz/CUSosifYWulICq/xKCTNuXUB
tDlRzZ9sWv2IIlh+NBq1X+4UVpeH58GqOeJnu7ozaRtmFWatGXmaj3BQlS7LsbRP
3k9Mvi6zlRAPkhmPFjjY+bPUujqP7mwvuqWpZtPMk8BJKuYbXP4DAwIe440uyfoC
R2C7zTZZadvnshbKJH6UDEYUAg6iRIE4/6myApbudheorkoRjLOaTNS573n8/5+/
5vUaArRBS2V5IEZvciBUZXN0aW5nIChETyBOT1QgVVNFIEZPUiBSRUFMKSA8c29t
ZS51c2VyQHNvbWUuZG9tYWluLnRsZD6IZgQTEQIAJgUCRVKE8gIbIwUJAESiwAYL
CQgHAwIEFQIIAwQWAgMBAh4BAheAAAoJEFRCDjPZsVNoMLMAoIJs0R3ACOKVi4if
Vb8ywhTHgfUbAJ9uhCwLvZEaRZhq3m/GXYBAM3y0BZ0BVwRFUoTyEAQAoVg+dKVx
HuDW28sMY1tHxUwxTSw56YPkCfzvJJQ0elEyQ9X02iM48hSJPqhImdVlANjEmcTU
N3ipn5uhTF/vmrw47FbkwxJuKDOipkuscXc8mcvb19F16+BQkWG+0MzJfXgRCqGf
rJm/JryHiN1vw/R8VOC5hotochxkTlc0MEsAAwUD/Rey1pCd6zELU8UR2MMdn9Q2
lsH/TGbPMKBMb/irWCnD56H9Ce7LE955Iq/kslQ3hV4lcsqf6bPiKD1BrzEzxZ0e
6wYXPM3KZOWUdn1bcd3X8RjLTNTJlmXZBPc9p01feRTICy+Dm+6mBK7TqC4jmUD0
fb/7UZdQCYWGPPmamIqf/gMDAh7jjS7J+gJHYN2xXJpLKqyyIzZ9JDY1ruqTPjYY
HOwIyrTf/K5Ju0cgBxcGOejgX+e61VujZv5aI9n0tj4V+KhBrb6gqjeITwQYEQIA
DwUCRVKE8gIbDAUJAESiwAAKCRBUQg4z2bFTaExtAJ9+DmyJ2TXMqGE4tHM6yPVW
jrEWNgCeNPIx71KJ1FM2O8FAifazBIZyy5Q=
=MWOg
-----END PGP PRIVATE KEY BLOCK-----
';

$passphrase = 'Key For Testing';
$plugin->add_key($testkey);

print $plugin->menu();