<?php
/**
 * Created by PhpStorm.
 * User: cathy
 * Date: 10/1/18
 * Time: 3:31 PM
 */

main::start();
class main {

    static public function start() {
        $records = csv::getRecords();
        $table = html::generateTable($records);
        system::printPage($table);
    }

}


class csv {

    static public function getRecords() {
        $make = 'Ford';
        $model = 'Tarus';
        $car = AutomobileFactory::create($make, $model);

        $records[] = $car;

        print_r($records);

        return $records;
    }

}

class html {

    static public function generateTable($records) {
        $table = $records;
        return $table;

    }
}

class system {

    static public function printPage($page) {
        echo $page;

    }
}