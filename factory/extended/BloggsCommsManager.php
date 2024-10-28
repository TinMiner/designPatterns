<?php

class BloggsCommsManager extends CommsManager {
    function getHeaderText()
    {
        return "BlogsCal header\n";
    }

    function getApptEncoder(){
        return new BloggsApptEncoder();
    }

    function getFooterText() {
        return "BloggsCal footer\n";
    }
}