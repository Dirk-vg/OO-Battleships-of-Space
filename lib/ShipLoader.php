<?php


class ShipLoader
{
    public function getShips()
    {
        $ships = array();

        $ship = new Ship('Jedi Star fighter');
        $ship->setWeaponPower(5);
        $ship->setJediFactor(15);
        try {
            $ship->setStrength(30);
        } catch (Exception $e) {
        }
        $ships['star fighter'] = $ship;

        $ship2 = new Ship('CloakShape Fighter');
        $ship2->setWeaponPower(2);
        $ship2->setJediFactor(2);
        try {
            $ship2->setStrength(70);
        } catch (Exception $e) {
        }
        $ships['cloakShape_fighter'] = $ship2;

        $ship3 = new Ship('Super Star Destroyer');
        $ship3->setWeaponPower(70);
        $ship3->setJediFactor(0);
        try {
            $ship3->setStrength(500);
        } catch (Exception $e) {
        }
        $ships['super_star_destroyer'] = $ship3;

        $ship4 = new Ship('RZ-1 A-wing interceptor');
        $ship4->setWeaponPower(4);
        $ship4->setJediFactor(4);
        try {
            $ship4->setStrength(50);
        } catch (Exception $e) {
        }
        $ships['rz1_a_wing_interceptor'] = $ship4;

        return $ships;
    }
}