<?php namespace Edcas\Presenters;

/**
 * Class PresentableTrait
 * @author Eduard Castro
 * @package Edcas\Presenters
 */
trait PresentableTrait {

    protected $presenterInstance;

    /**
     * Method to access the presenter entity for each Class
     * @return mixed
     * @throws PresenterException
     */
    public function present(){
        if(!$this->presenter || !class_exists($this->presenter)){
            throw new PresenterException("A presenter class implementation has not been declared.");
        }
        if(!isset($this->presenterInstance)){
            $this->presenterInstance = new $this->presenter($this);
        }
        return $this->presenterInstance;
    }

}