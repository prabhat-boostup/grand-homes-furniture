<?php

if (isset($_GET['location'])) {
    $loc = $_GET['location'];
    if (in_array($loc, ['India', 'America'])) {
        setcookie('user_location', $loc, time() + (86400 * 30), "/");
        $_COOKIE['user_location'] = $loc;
    }
}

function getLocation() {
    $location = $_COOKIE['user_location'] ?? 'India';

    $allowed = ['India', 'America'];
    if (!in_array($location, $allowed)) {
        $location = 'India';
    }

    return $location;
}

function isIndia() {
    return getLocation() === 'India';
}

function isAmerica() {
    return getLocation() === 'America';
}
