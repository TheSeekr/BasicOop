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
     * Scalar Type declaration for function param being of specific types
     * Constraining $price if given, but it not, then it's not mandatory to provide this param
     */
    public function __Construct(string $title,string $firstName,string $mainName,float $price= null){
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
 * Instantiation of class ShopProduct providing [] in price intentionally to check scalar type declaration
 */
$product1=new ShopProduct("My Antonia", "Willa", "Cather", []);

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
