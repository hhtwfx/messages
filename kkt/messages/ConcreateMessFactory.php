<?php

namespace Messages;

/**
 * 具体消息工厂
 * @author Burt
 * @version 1.0
 * @created 03-三月-2016 0:07:41
 */
class ConcreateMessFactory extends MessFactory {

    public function __construct() {
        
    }

    public function __destruct() {
        
    }

    public function CreateAppMess() {

        //return new ProductA1();
    }

    public function CreateSmsMess() {

        //return new ProductB1();
    }

    public function CreateWxMess() {
        return new WxMess();
    }

}
