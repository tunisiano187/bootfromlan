#!ipxe

set boot-url http://ipxe.bowlman.pxe

set bootstrap-url ${boot-url}/bootstrap
set menu-url ${boot-url}/menu.ipxe

chain --replace --autofree ${menu-url} ||
<?php
	
?>