<?php
    class Vehicle{
        protected $name;
        protected $with_engine;
        protected $identify_myself;


        //identify
        function setIdentify($identify_myself){
            $this->identify = $identify_myself;
        }
        function getIdentify(){
            echo "Hi I'm ".$this->identify;
        }

        //name
        function setName($name){
            $this->name = $name;
        }
        function getName(){
            echo ", My name is ".$this->name;
        }

        //with_engine
        function setEngine($with_engine){
            $this->engine = $with_engine;
        }
        function getEngine(){
            if ($this->engine == FALSE) {
                echo ", My engine status is 'no engine'";
            } else {
                echo ", My engine status is 'with engine'";
            }
            
        }
    }

    $identify_myself = new Vehicle();
    $identify_myself->setIdentify("Parent of All Vehicles");
    $name= new Vehicle();
    $name->setName("Gerobak");
    $with_engine= new Vehicle();
    $with_engine->setEngine(FALSE); 
    echo $identify_myself->getIdentify().$name->getName().$with_engine->getEngine()."<br><br>";
?>