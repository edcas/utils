<?php  namespace Edcas\Presenters;

use Exception;

/**
 * Class PresenterException
 * @author Eduard Castro
 * @package Edcas\Presenters
 */
class PresenterException extends Exception {

    function __construct($message) {
        parent::__construct($message);
    }

}