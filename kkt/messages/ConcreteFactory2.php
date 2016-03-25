<?php

namespace Messages;

/**
 * This class implements the operations to create concrete product objects.
 * @author Burt
 * @version 1.0
 * @created 03-三月-2016 0:07:42
 */
class ConcreteFactory2 extends MessFactory {

    public function __construct() {
        
    }

    public function __destruct() {
        
    }

    public function CreateProductA() {

        //return new ProductA2();
    }

    public function CreateProductB() {

        //return new ProductB2();
    }

}
