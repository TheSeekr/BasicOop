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
     * @param string $title
     * @param string $firstName
     * @param string $mainName
     * @param float $price
     * This construct will set each property with the respective value
     * Scalar Type declaration for function param being of specific types
     */
    public function __Construct(string $title,string $firstName,string $mainName,float $price){
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
    /**
     * 
     * @return type
     * Getting the common details of a product
     */
    public function getSummaryLine(){
        $base = "{$this->title} ({$this->producerMainName}, ";
        $base .="{$this->producerFirstName})";
        return $base;
    }
}
/**
 * Instantiation of class ShopProduct
 */
$product1=new ShopProduct("My Antonia", "Willa", "Cather", 5.99);

class cdProduct extends ShopProduct{
    
    /**
     *
     * @var type 
     * Getting the playlength of Cd
     */
    public $playLength;
    /**
     * 
     * @param string $title
     * @param string $firstName
     * @param string $mainName
     * @param float $price
     * @param int $playLength
     * Addded one more param $playLength in this overridden construct
     */
    public function __construct(string $title,string $firstName,string $mainName,float $price,int $playLength) {
        parent::__Construct($title, $firstName, $mainName, $price);
        $this->playLength=$playLength;
    }
    /**
     * 
     * @return type
     * This method will show the playlength of a cd
     */
    public function getPlayLength(){
        return $this->playLength;
    }
    /**
     * 
     * @return type
     * Overriding this method from base class shopProduct
     * Showing the CD info with it's playlength
     */
    public function getSummaryLine() {
        parent::getSummaryLine();
        $base .=": playing time - {$this->playLength}";
        return $base;        
    }
}
class bookProduct extends ShopProduct{
    /**
     *
     * @var type 
     * Counting the number of pages in a book
     */
    public $numPages;
    /**
     * 
     * @param string $title
     * @param string $firstName
     * @param string $mainName
     * @param float $price
     * @param int $numPages
     * Addded one more param $numPages in this overridden construct
     */
    public function __construct(string $title,string $firstName,string $mainName,float $price,int $numPages){
        parent::__Construct($title, $firstName, $mainName, $price);
        $this->numPages=$numPages;
    }
    public function getNumberOfPages()
    {
        return $this->numPages;
    }
    /**
     * 
     * @return type
     * Overriding this method from base class shopProduct
     * Showing the Book info with it's Pages Numbers
     */
    public function getSummaryLine() {
        parent::getSummaryLine();
        $base .=": Page Count - {$this->numPages}";
        return $base;
    }
}
/**
 * Instantiation of CdProduct
 */
$product2=new cdProduct("Exile on Coldharbour Lane", "The", "Albama 3", 10.99, 0, 60.33);
print "Artist: {$product2->getProducer()}\n";
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
$writer = new ShopProductWriter();
$writer->write($product1);
