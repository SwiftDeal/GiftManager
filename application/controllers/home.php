<?php

/**
 * The Default Example Controller Class
 *
 * @author Faizan Ayubi
 */
use Shared\Controller as Controller;

class Home extends Controller {

    public function index() {
        $view = $this->getActionView();
        
        $gifts = Gift::all(array("live = ?" => TRUE));
        $view->set("gifts", $gifts);
    }
    
    public function support() {
        
    }
    
    public function register() {
        
    }

}
