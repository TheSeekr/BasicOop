<?php
/**
 * Super Class of all which contains common info
 * 
 * @version 0.01
 * @since 28-08-2018
 * @author Nilesh Soni
 * 
 */
class ShopProduct{
    /**
     *
     * @var string 
     */
    private $title;
    /**
     *
     * @var string 
     */
    private $producerMainName;
    /**
     *
     * @var string 
     */
    private $producerFirstName;
    /**
     *
     * @var float 
     */
    protected $price;
    /**
     *
     * @var int 
     */
    private $discount =0;
    
    /**
     * 
     * @param string $title
     * @param string $firstName
     * @param string $mainName
     * @param float $price
     */
    public function __construct(string $title,string $firstName,string $mainName,float $price) {
        $this->title=$title;
        $this->producerMainName=$mainName;
        $this->producerFirstName=$firstName;
        $this->price=$price;
    }
    /**
     * 
     * @return string
     */
    public function getProducerFirstName(){
        return $this->producerFirstName;
    }
    /**
     * 
     * @return type
     */
    public function getProducerMainName(){
        return $this->producerMainName;
    }
    /**
     * 
     * @param int $num
     */
    public function setDiscount($num){
        $this->discount=$num;
    }
    /**
     * 
     * @return int
     */
    public function getDiscount(){
        return $this->discount;
    }
    /**
     * 
     * @return string
     */
    public function getTitle(){
        return $this->title;
    }
    /**
     * 
     * @return int
     */
    public function getPrice(){
        return ($this->price - $this->discount);
    }
    /**
     * 
     * @return string 
     * Producer's complete name
     */
    public function getProducer(){
        return $this->producerFirstName.' '.$this->producerMainName;
    }
    /**
     * 
     * @return string
     * Title and name of producer
     */
    public function getSummaryLine(){
        $base ="{$this->getTitle()}({$this->getProducer()}, ";
        return $base;
    }
}

class CdProduct extends ShopProduct{
    private $playLength;
    
    public function __construct(string $title, string $firstName, string $mainName, float $price,int $playLength) {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength=$playLength;
    }
    
    public function getPlayLength()
    {
        return $this->playLength;
    }
    public function getSummaryLine() {
        $base = parent::getSummaryLine();
        $base .=": Playing Time - {$this->playLength})";
        return $base;
    }
}

class BookProduct extends ShopProduct{
    private $numPages;
    
    public function __construct(string $title, string $firstName, string $mainName, float $price,int $numPages) {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages=$numPages;
    }
    
    public function getNumberOfPages()
    {
        return $this->numPages;
    }
    
    public function getSummaryLine() {
        $base =parent::getSummaryLine();
        $base .=": Page Count - {$this->getNumberOfPages()})";
        return $base;
    }
}
