<?php 
class Eventitem 
{ 
    //class private fields
    private $eventName ;
    private $eventDate ;
    private $eventDesc ;
    private $eventPrice ;
 
    // Constructor 
    public function __construct($eventName,$eventDate,$eventDesc,$eventPrice){ 
       
        $this->eventName= $eventName ;
        $this->eventDate= $eventDate ;
        $this->eventDesc= $eventDesc;
        $this->eventPrice=$eventPrice ;
    } 
     // Destructor 
     public function __destruct(){ 
      
    } 

    //Getters
    public function getName(){
        return $this->eventName;
     }
     public function getDate(){
        return $this->eventDate;
     }
     public function getDesc(){
        return $this->eventDesc;
     }

     public function getPrice(){
        return $this->eventPrice;
     }

     //Setters
     public function setName($eventName){
        $this->eventName = $eventName;
     }
     public function setDate($eventDate){
        $this->eventDate = $eventDate;
     }
     public function setDesc($eventDesc){
        $this->eventDesc = $eventDesc;
     }
     public function setPrice($eventPrice){
        $this->eventPrice = $eventPrice;
     }
      
} 
   

 
?> 
