<?php
namespace PhpAirbrakeBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

require_once __DIR__.'/vendor/php-airbrake/src/Airbrake/Client.php';

/**
 * The PhpAirbrakeBundle Client Loader.
 *
 * This class assists in the loading of the php-airbrake Client class.
 *
 * @package		Airbrake
 * @author		Drew Butler <drew@abstracting.me>
 * @copyright	(c) 2011 Drew Butler
 * @license		http://www.opensource.org/licenses/mit-license.php
 */
class PhpAirbrakeBundle extends Bundle 
{
    
}