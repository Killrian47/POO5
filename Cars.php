<?php

require_once 'Vehicle.php';

class Cars extends Vehicle implements LightableInterface
{
    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn(): bool
    {
        // TODO: Implement switchOn() method.
        return true;
    }

    public function switchOff(): bool
    {
        // TODO: Implement switchOff() method.
        return false;
    }
}