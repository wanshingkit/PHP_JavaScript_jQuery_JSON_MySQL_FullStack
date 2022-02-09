<?php
/**
 *  * Name:Shing Kit WAN, no:000826521
 * Date:4 Dec 2020
 * this is a file to state the database connection account content
 *
 */
try {
    $dbh = new PDO(
        "mysql:host=localhost;dbname=000826521",//database name
        "000826521",//database login
        "19850709"
    );
} catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
}
