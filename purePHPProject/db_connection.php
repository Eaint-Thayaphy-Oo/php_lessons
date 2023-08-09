<?php

$conn = mysqli_connect('localhost', 'root', '', 'purephpdb');

if(!$conn) {
    echo "connection fail..." . mysqli_connect_error();
}