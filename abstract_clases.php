<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 29.10.12
 * Time: 17:16
 * To change this template use File | Settings | File Templates.
 */
abstract class GpsClientCard
{
    private $ClientCard = array("Name","Contact_num","Fio","Park_size","Tarif","Date_con","Owner");

    public function __construct($Client_name="ООО МММ",$Contact_num="(xxx)xxx-xx-xx",$Fio="Африкан Свиридович",
                                $Tarif = "Standart", $Date = "xx.xx.xxxx"){
        $this->setClient_name($Client_name);
        $this->setContact_num($Contact_num);
        $this->setFio($Fio);
        $this->setTarif($Tarif);
        $this->setDate_con($Date);
    }

    public function setClient_name($Name){
        $this->ClientCard["Name"] = $Name;
    }

    public function getClient_name(){
        return $this->ClientCard["Name"];
    }
    public function setContact_num($Num){
        $this->ClientCard["Contact_num"] = $Num;
    }

    public function getContact_num(){
        return $this->ClientCard["Contact_num"];
    }

    public function setFio($Name){
        $this->ClientCard["Fio"] = $Name;
    }

    public function getFio(){
        return $this->ClientCard["Fio"];
    }

    public function getPark_size(){
        return $this->ClientCard["Park_size"];
    }
    public function setTarif($Tar){
        $this->ClientCard["Tarif"] = $Tar;
    }

    public function getTarif(){
        return $this->ClientCard["Tarif"];
    }
    public function setDate_con($Date){
        $this->ClientCard["Date_con"] = $Date;
    }

    public function getDate_con(){
        return $this->ClientCard["Date_con"];
    }
    public function setOwner(OwnLister $list){
        $this->ClientCard["Owner"] = $list->ownList();
    }

    public function getOwner(){
        return $this->ClientCard["Owner"];
    }

    public function setPark_size(parkSize $Size)
    {
        $this->ClientCard["Park_size"] = $Size->parkSize();
    }

    public function getParkSize(){
        return $this->ClientCard["Park_size"];
    }
}

abstract class GpsCarInfo
{
    private $Unit_card = array("Car_name","Car_number","Car_id","Date_cr","Owner","Park");

    public function __construct($Name = "Tavria",$Number = "848-67CA",$Id = "352866445",$Date = "30.10.2012",
                                $Owner = "Ctac",$Park = "Personal")
    {
        $this->setCarName($Name);
        $this->setCarNumber($Number);
        $this->setCarId($Id);
        $this->setDateCr($Date);
        $this->setOwner($Owner);
        $this->setPark($Park);
    }

    public function getPark()
    {
        return $this->Unit_card["Park"];
    }

    public function setPark($Park)
    {
        $this->Unit_card["Park"] = $Park;
    }

    public function getCarName()
    {
        return $this->Unit_card["Car_name"];
    }

    public function setCarName($Car_name)
    {
        $this->Unit_card["Car_name"] = $Car_name;
    }

    public function getCarNumber()
    {
        return $this->Unit_card["Car_number"];
    }

    public function setCarNumber($Car_number)
    {
        $this->Unit_card["Car_number"] = $Car_number;
    }

    public function getDateCr()
    {
        return $this->Unit_card["Date_cr"];
    }

    public function setDateCr($Date_cr)
    {
        $this->Unit_card["Date_cr"] = $Date_cr;
    }

    public function getCarId()
    {
        return $this->Unit_card["Car_id"];
    }

    public function setCarId($Car_id)
    {
        $this->Unit_card["Car_id"] = $Car_id;
    }

    public function getOwner()
    {
        return $this->Unit_card["Owner"];
    }

    public function setOwner($Owner)
    {
        $this->Unit_card["Owner"] = $Owner;
    }
}
