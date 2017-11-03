<?php

namespace Pesa\GaeSupportLaravel\Http\Controllers;

use Illuminate\Routing\Controller;
use Pesa\GaeSupportLaravel\Session\DataStoreSessionHandler;

/**
 * SessionGarbageCollectionController
 *
 * @uses     Controller
 *
 * @category  GaeSupportL5
 */
class SessionGarbageCollectionController extends Controller
{
    /**
     * run
     *
     * @access public
     *
     * @return void
     */
    public function run(){
        $s = new DataStoreSessionHandler();
        $s->googlegc();
    }
}
