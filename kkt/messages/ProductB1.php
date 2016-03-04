<?php
require_once ('AbstractProductB.php');

namespace Messages;



use Messages;
/**
 * This class (a) defines a product object to be created by the corresponding
 * concrete factory, and (b) implements the AbstractProduct interface.
 * @author Burt
 * @version 1.0
 * @created 03-三月-2016 0:07:42
 */
class ProductB1 extends AbstractProductB
{

	public function __construct()
	{
	}

	public function __destruct()
	{
	}

}
?>