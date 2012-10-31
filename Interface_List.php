<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 29.10.12
 * Time: 18:50
 * To change this template use File | Settings | File Templates.
 */
interface AddNewClient
{
    public function addClient();
}

interface AddNewCar
{
    public function addCar();
}

interface ShowClientInfo
{
    public function showInfo();
}

interface ShowClientPark
{
    public function showPark();
}

interface ParkSize
{
    public function parkSize();
}

interface OwnLister
{
    public function ownList();
}