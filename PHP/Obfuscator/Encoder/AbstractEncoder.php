<?php
/**
 * PHP_Obfuscator_Encoder_AbstractEncoder class
 *
 * An implementation of PHP_Obfuscator_Encoder interface.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy
 * the PHP License and are unable to obtain it through the web,
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category  PHP
 * @package   PHP_Obfuscator
 * @author    Hideyuki Shimooka <shimooka@doyouphp.jp>
 * @copyright 2010 Hideyuki Shimooka
 * @license   http://www.php.net/license/3_01.txt The PHP License, version 3.01
 * @version   SVN: $Id$
 * @link      http://openpear.org/package/PHP_Obfuscator
 */

require_once 'PHP/Obfuscator/Encoder/Encoder.php';

/**
 * PHP_Obfuscator_Encoder_AbstractEncoder class
 *
 * An implementation of PHP_Obfuscator_Encoder interface.
 *
 * @category  PHP
 * @package   PHP_Obfuscator
 * @author    Hideyuki Shimooka <shimooka@doyouphp.jp>
 * @copyright 2010 Hideyuki Shimooka
 * @license   http://www.php.net/license/3_01.txt The PHP License, version 3.01
 * @version   Release: @package_version@
 * @link      http://openpear.org/package/PHP_Obfuscator
 */
abstract class PHP_Obfuscator_Encoder_AbstractEncoder implements PHP_Obfuscator_Encoder_Encoder
{

    /**
     * Previous code fragment
     * @var    string
     * @access protected
     */
    protected $str;

    /**
     * Arguments for code encoding
     * @var    array
     * @access protected
     */
    protected $args = array();

    /**
     * construcstor
     *
     * @param  array  $args Arguments for code encoding
     * @return void
     * @access public
     */
    public function __construct(array $args = array()) {
        $this->args = $args;
    }

    /**
     * Set previous code
     *
     * @param  string $str previous code
     * @return void
     * @access public
     */
    public function setStr($str) {
        $this->str = $str;
    }
}
