<?php

class Bicycle extends Vehicle implements LightableInterface
{

    public function switchOn(): bool
    {
        // TODO: Implement switchOn() method.
        if ($this->getCurrentSpeed()>10) {
            return true;
        }
        return false;
    }

    public function switchOff(): bool
    {
        // TODO: Implement switchOff() method.
        return false;
    }
}