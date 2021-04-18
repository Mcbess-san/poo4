<?php

class Car 

{

    private bool $hasParkBrake = true;

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getParkbrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function start()
    {
        try{
            if ($this->hasParkBrake === true){
                throw new Exception("The handbreak is on homer !");
            }
        } catch(Exception $e){
            echo " An execption has been found : ". $e->getMessage(). "<br>";
            $this->setParkBrake() === false;
        }  finally {
            echo " My car roll like a donuts i gonna go at moe's bar";
        }
        
    }
}