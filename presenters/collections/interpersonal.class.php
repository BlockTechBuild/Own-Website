<?php

namespace Presenters\Collections;

use \Libraries\ORM as ORM;

/* LOAD DEPENDECIES */
require_once('models/interpersonal.class.php');

/**
 * Interpersonal Skills Collection Class which contains the interpersonal skills information.
 */
class Interpersonal
{
    private $iaInterpersonal = array();

    /* CONSTRUCTOR */

    public function __construct()
    {
        $this->collect();
    }

    /* PUBLIC METHODS */

    public function all()
    {
        return $this->iaInterpersonal;
    }

    public function sortByLevel()
    {
        usort($this->iaInterpersonal, function ($a, $b)
        {
            if ($a->level == $b->level)
            {
                return $a->title > $b->title ? 1 : -1;
            }

            return ($a->level > $b->level) ? -1 : 1;
        });
    }

    /* PRIVATE METHODS */

    private function collect()
    {
        $laInterpersonals = ORM::factory('interpersonal');

        foreach ($laInterpersonals as $laInterpersonal)
        {
            $laInterpersonal = new \Models\Interpersonal($laInterpersonal);

            $this->iaInterpersonal[] = $laInterpersonal->get();
        }
    }
}