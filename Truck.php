<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var int
     */
    private $cargo = 0;

    /**
     * @var string
     */
    private $energy;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStoragecappacity($storageCapacity);
    }

    public function isFull()
    {
        $sentence = "";
        while ($this->cargo < $this->storageCapacity) {
            $this->cargo++;
            $sentence .= "is filling... ";
        }

        $sentence .= "full";
        return $sentence;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy)
    {
      $this->enegy = $energy;
    }
        public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }
        public function setStoragecappacity(int $storageCapacity)
        {
            $this->storageCapacity = $storageCapacity;
        }
    public function getCargo(): int
    {
        return $this->cargo;
    }
    public function setCargo(int $cargo)
    {
        $this->cargo = $cargo;
    }

}


