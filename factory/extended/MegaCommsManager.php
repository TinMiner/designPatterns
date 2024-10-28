<?php

class MegaCommsManager extends CommsManager {
    function getHeaderText()
    {
        return "MegaCal header\n";
    }

    function getApptEncoder(){
        return new MegaApptEncoder();
    }

    function getFooterText() {
        return "MegaCal footer\n";
    }
}