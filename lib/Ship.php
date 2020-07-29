<?php
class Ship
{
    public $name;

    public $weaponPower = 0;

    private int $jediFactor = 0;

    public int $strength = 0;

    private bool $underRepair;

    public function __construct($name)
    {
        $this->name = $name;
        try {
            $this->underRepair = random_int(1, 100) < 30;
        } catch (Exception $e) {
        }
    }

    public function isFunctional(): bool
    {
        return !$this->underRepair;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat = false): ?string
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    public function doesGivenShipHaveMoreStrength($givenShip): bool
    {
        return $givenShip->strength > $this->strength;
    }

    public function setStrength($strength): void
    {
        if (!is_numeric($strength)) {
            throw new \RuntimeException('Invalid strength passed'.$strength);
        }

        $this->strength = $strength;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * @return int
     */
    public function getWeaponPower(): int
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower(int $weaponPower): void
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @return int
     */
    public function getJediFactor(): int
    {
        return $this->jediFactor;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor(int $jediFactor): void
    {
        $this->jediFactor = $jediFactor;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }


}
