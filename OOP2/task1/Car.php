<?php

class Car
{
    protected $brand;
    protected $model;
    protected $productionYear;
    protected $VINCode;

    /**
     * Car constructor.
     * @param $brand
     * @param $model
     * @param $productionYear
     * @param $VINCode
     */
    public function __construct($brand, $model, $productionYear, $VINCode)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->productionYear = $productionYear;
        $this->VINCode = $VINCode;
    }

    public function printInf()
    {
        echo "Brand: $this->brand | ",
        "Model: $this->model | ",
        "Year: $this->productionYear | ",
        "VIN: $this->VINCode | ";
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getProductionYear()
    {
        return $this->productionYear;
    }

    /**
     * @param mixed $productionYear
     */
    public function setProductionYear($productionYear)
    {
        $this->productionYear = $productionYear;
    }

    /**
     * @return mixed
     */
    public function getVINCode()
    {
        return $this->VINCode;
    }

    /**
     * @param mixed $VINCode
     */
    public function setVINCode($VINCode)
    {
        $this->VINCode = $VINCode;
    }
}