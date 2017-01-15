<?php

class Army extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $army_id;

    /**
     *
     * @var string
     */
    public $theather;

    /**
     *
     * @var string
     */
    public $army_name;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'army';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Army[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Army
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
