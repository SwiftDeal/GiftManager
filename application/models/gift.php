<?php

/**
 * The User Model
 *
 * @author Faizan Ayubi
 */
class Gift extends Shared\Model {
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 255
     * 
     * @validate required, min(3)
     * @label item
     */
    protected $_item;

    /**
     * @column
     * @readwrite
     * @type integer
     * 
     * @validate required, max(100)
     * @label credits
     */
    protected $_credits;

}
