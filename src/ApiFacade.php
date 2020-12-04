<?php

namespace Atozpw\Whatsapp;

use Illuminate\Support\Facades\Facade;

class ApiFacade extends Facade {
	protected static function getFacadeAccessor() { return 'whatsapp'; }
}