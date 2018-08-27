<?php

/**
 * This class contains all that is common to every product
 */
class ShopProduct{
    /**
     *
     * @var type
     * Because defining property type is considered a good practice
     */
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price=0;
    
    /**
     * 
     * @param type $title
     * @param type $firstName
     * @param type $mainName
     * @param type $price
     * This construct will set each property with the respective value
     */
    public function __Construct($title,$firstName,$mainName,$price){
        $this->title=$title;
        $this->producerFirstName=$firstName;
        $this->producerMainName=$mainName;
        $this->price=$price;
    }
    /**
     * 
     * @return type
     * This function will fetch producer's first and main name
     */
    public function getProducer(){
        return $this->producerFirstName.' '.$this->producerMainName;
    }
}
/**
 * Instantiation of class ShopProduct
 */
$product1=new ShopProduct("My Antonia", "Willa", "Cather", "5.99");

/**
 * This class will be used for product's details
 */
class ShopProductWriter{
    /**
     * 
     * @param type $shopProduct
     * Using it for showing the product's title and producer's name with its price it only confirms ShopProduct's Object
     */
    public function write(ShopProduct $shopProduct){
        $str=$shopProduct->title.': '.$shopProduct->getProducer().' ('.$shopProduct->price . ')'."\n";
        print $str;
    }
}
/**
 * Instantiation of ShopProductWriter
 */

/**
 * Using this class to check how a function reacts to another class's object being inserted as a param
 */
class Wrong{}
$writer = new ShopProductWriter();
$writer->write(new Wrong());
