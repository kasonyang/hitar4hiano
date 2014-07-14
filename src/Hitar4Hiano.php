<?php

/**
 * 
 * @author kasonyang <i@kasonyang.com>
 */

namespace Hitar4Hiano;

class Hitar4Hiano{
    static function init(){
        $dbs = \Hiano\App\App::getConfig()->get('hitar:database');
        $first = NULL;
        foreach($dbs as $dk => $dv){
            if($first === NULL){
                $first = $dk;
            }
            \Hitar\DatabaseManager::addDatabase($dk, $dv);
        }
        if($first){
            \Hitar\DatabaseManager::selectDatabase($first);
        }
    }
}

Hitar4Hiano::init();