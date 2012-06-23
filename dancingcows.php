<?php

//phpinfo();

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);

if(isset($_POST['spork']))
{
	// Parse Message
	$msg = "Timestamp:\t".date('r', time() )."\n\rSource:\t\t".gethostbyaddr($_SERVER['REMOTE_ADDR']) . "(". $_SERVER['REMOTE_ADDR'] .")\n\r\n\r".$_POST['msg']."\n\r\n\rEOF\n\r";
	
	// Set public key to use.
	$OsakaPub = "-----BEGIN PGP PUBLIC KEY BLOCK-----
	Version: GnuPG v1.4.10 (GNU/Linux)

	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
	=SMBx
	-----END PGP PUBLIC KEY BLOCK-----"; 

	// Kick off GPG...
	$gpg = new gnupg();
	$gpg -> seterrormode(gnupg::ERROR_EXCEPTION); 

	try {
		// Import Public Key to use.
		$info = $gpg -> import($OsakaPub);
		
		// Add the key
		$gpg -> addencryptkey($info['fingerprint']);
		
		// Encrypt the message with the public key.
		$msg = $gpg -> encrypt($msg);
		echo "<pre>".$msg."</pre>";

		mail('pgm987@gmail.com', 'Port 22 - Contact Osaka', $msg);
	}
	catch(Exception $e) 
	{
		die('ERROR: ' . $e->getMessage());
	}
}
else
{ ?>
<body bgcolor=black>
<center>
<iframe width="420" height="315" src="http://www.youtube.com/apiplayer?video_id=kEpKdaptKao&autoplay=1&version=3" frameborder="0" ></iframe>
</center>
</body>
<?php } ?>
