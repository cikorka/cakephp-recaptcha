<?php

/**
 * Recaptcha configuration
 *
 * global-key.cikorka.cz
 * Domain Name:	global-key.cikorka.cz
 * This is a global key. It will work across all domains.
 *
 * Public Key:	6LdWNtwSAAAAAOMvhLvKMhtPPwxVlbJ0_Vk66DaP
 * Use this in the JavaScript code that is served to your users
 *
 * Private Key:	6LdWNtwSAAAAACccwDnORPgDeKYbILV0-L9Z5DiY
 * Use this when communicating between your server and our server. Be sure to keep it a secret.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Petr Jeřábek : Irisys Management System
 * Copyright 2012-2013, Petr Jeřábek (http://cikorka.cz)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright	Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @copyright	Copyright 2012-2013,  (http://cikorka.cz)
 * @package		Irisys.Controller
 * @license		MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @file		bootstrap.php
 */


Configure::write('Recaptcha.publicKey', '6LdWNtwSAAAAAOMvhLvKMhtPPwxVlbJ0_Vk66DaP');
Configure::write('Recaptcha.privateKey', '6LdWNtwSAAAAACccwDnORPgDeKYbILV0-L9Z5DiY');