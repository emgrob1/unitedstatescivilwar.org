ph
<?php

class Battles extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name_union;

    /**
     *
     * @var string
     */
    public $name_confederate;

    /**
     *
     * @var string
     */
    public $location;

    /**
     *
     * @var string
     */
    public $date;

    /**
     *
     * @var string
     */
    public $generals_union;

    /**
     *
     * @var string
     */
    public $generals_confederate;

    /**
     *
     * @var string
     */
    public $troops_union;

    /**
     *
     * @var string
     */
    public $troops_confederate;

    /**
     *
     * @var string
     */
    public $length_of_battle;

    /**
     *
     * @var string
     */
    public $casualties_union;

    /**
     *
     * @var string
     */
    public $casualties_confederate;

    /**
     *
     * @var string
     */
    public $total_casualties;

    /**
     *
     * @var string
     */
    public $weapons_used;

    /**
     *
     * @var string
     */
    public $artillery_union;

    /**
     *
     * @var string
     */
    public $artillery_confederate;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'battles';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Battles[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Battles
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
