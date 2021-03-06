<?php
/**
 * File containing the eztexthandler class.
 *
 * @copyright Copyright (C) 1999 - 2012 Brookins Consulting. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2 (or any later version)
 * @version //autogentag//
 * @package bccie
 */

include_once('extension/bccie/modules/bccie/basehandler.php');

class eZTextHandler extends BaseHandler{
    function exportAttribute(&$attribute, $seperationChar) {
        $content=&$attribute->content();

	return $this->escape($content, $seperationChar);
        //return $this->escape($content);
        //return utf8_decode($content);
    }
}
?>
