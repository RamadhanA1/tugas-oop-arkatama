<?php

    include("vehicles2.php");
    //Pedal Bikes
    $identify_myself = new Bike();
    $identify_myself->setIdentify("Bike");
    $name= new Bike();
    $name->setName("Pedal Bikes");
    $with_engine= new Bike();
    $with_engine->setEngine(FALSE);
    $wheel_count= new Bike();
    $wheel_count->setWheel(2); 
    echo $identify_myself->getIdentify().$name->getName().$with_engine->getEngine().$wheel_count->getWheel()."<br>";

    //Motor Bikes
    $identify_myself = new Bike();
    $identify_myself->setIdentify("Bike");
    $name= new Bike();
    $name->setName("Motor Bikes");
    $with_engine= new Bike();
    $with_engine->setEngine(TRUE);
    $wheel_count= new Bike();
    $wheel_count->setWheel(2); 
    echo $identify_myself->getIdentify().$name->getName().$with_engine->getEngine().$wheel_count->getWheel()."<br><br>";

    //Sport Car
    $identify_myself = new Car();
    $identify_myself->setIdentify("Car");
    $name= new Car();
    $name->setName("Sport Car");
    $with_engine= new Car();
    $with_engine->setEngine(TRUE);
    $wheel_count= new Car();
    $wheel_count->setWheel(4);
    $engine_type= new Car();
    $engine_type->setType("V8");
    echo $identify_myself->getIdentify().$name->getName().$with_engine->getEngine().$wheel_count->getWheel().$engine_type->getType()."<br>";

    //Pickup Car
    $identify_myself = new Car();
    $identify_myself->setIdentify("Car");
    $name= new Car();
    $name->setName("Pickup Car");
    $with_engine= new Car();
    $with_engine->setEngine(TRUE);
    $wheel_count= new Car();
    $wheel_count->setWheel(4);
    $engine_type= new Car();
    $engine_type->setType("Solar");
    echo $identify_myself->getIdentify().$name->getName().$with_engine->getEngine().$wheel_count->getWheel().$engine_type->getType()."<br><br>";

    //Public Bus
    $identify_myself = new Buses();
    $identify_myself->setIdentify("Bus");
    $name= new Buses();
    $name->setName("Trans Jakarta");
    $with_engine= new Buses();
    $with_engine->setEngine(TRUE);
    $wheel_count= new Buses();
    $wheel_count->setWheel(4);
    $private= new Buses();
    $private->setPrivate(FALSE);
    echo $identify_myself->getIdentify().$private->getPrivate().$name->getName().$with_engine->getEngine().$wheel_count->getWheel()."<br>";

    //Private engine
    $identify_myself = new Buses();
    $identify_myself->setIdentify("Bus");
    $name= new Buses();
    $name->setName("School Bus");
    $with_engine= new Buses();
    $with_engine->setEngine(TRUE);
    $wheel_count= new Buses();
    $wheel_count->setWheel(4);
    $private= new Buses();
    $private->setPrivate(TRUE);
    echo $identify_myself->getIdentify().$private->getPrivate().$name->getName().$with_engine->getEngine().$wheel_count->getWheel()."<br><br>";

?>