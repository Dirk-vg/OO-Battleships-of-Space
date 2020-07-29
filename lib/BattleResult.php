<?php


class BattleResult
{
    private bool $usedJediPowers;

    private Ship $winningShip;

    private Ship $losingShip;

    public function __construct($usedJediPowers, Ship $winningShip = null, Ship $losingShip = null)
    {
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * @return bool
     */
    public function wereJediPowersUsed(): bool
    {
        return $this->usedJediPowers;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip(): \Ship
    {
        return $this->winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip(): \Ship
    {
        return $this->losingShip;
    }

    public function isThereAWinner(): bool
    {
        return $this->getWinningShip() !== null;
    }


}