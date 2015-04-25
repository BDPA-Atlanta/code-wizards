<?php

class Automobile
{
    public $name ="Model T";

    /**
     * The engine type
     * @var string
     */
    public $engine ="V8";


    public $wheels = 4;

    protected $stearingWheel;

    /**
     * Is our automobile a super car
     * @var boolean
     */
    public $isASuperCar = false;

    /**
     * Rating
     * @var float
     */
    public $rating = 5.0;


    public function start()
    {
        return "vroooom";
    }

    public function stop()
    {
        $this->move(NULL);
    }

    public function move($direction)
    {
        if($direction != Null) {
            return $this->stearingWheel = $direction;
        }

    }



}