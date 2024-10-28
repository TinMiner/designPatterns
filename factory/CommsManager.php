<?php

class CommsManager {
    const BLOGGS = 1;
    const MEGA = 2;
    private $mode;

    function  __construct( $mode ) {
        $this->mode;
    }

    function getHeaderText() {
        switch ( $this->mode ) {
            case ( self::MEGA ):
                return "MegaCal header\n";
            default:
                return "BloggsCal header\n";
        }
    }

    function getAppEncoder() {
        switch ( $this->mode ) {
            case ( self::MEGA ):
                return "MegaApptEncoder header\n";
            default:
                return "BloggsApptEncoder header\n";
        }
    }
}