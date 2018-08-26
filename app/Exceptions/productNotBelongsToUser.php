<?php

namespace App\Exceptions;

use Exception;

class productNotBelongsToUser extends Exception
{
    public function render(){
    	return['error'=>'Product Not Belongs To User'];
    }
}
