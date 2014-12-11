<?php
/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package ROI
 * @version 1.0
 *
 * autoloaded.php used for autosload classed.
 *
 */
function my_loader($class)
{
    include 'classes/' . $class . '.php';
}

spl_autoload_register('my_loader');