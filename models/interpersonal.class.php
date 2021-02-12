<?php

namespace Models;

/* LOAD DEPENDECIES */
require_once('presenters/interpersonal.class.php');

/**
 * Interpersonal Class which contains the interpersonal skill information.
 */
class Interpersonal extends BaseModel
{
    /* CONSTRUCTOR */

    public function __construct($poInterpersonal)
    {
        $this->extend($poInterpersonal);
    }

    /* PUBLIC METHODS */

    public function get()
    {
        return new \Presenters\Interpersonal($this);
    }
}