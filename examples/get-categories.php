#!/bin/bash
<?php
include __DIR__.'/config.php';
global $sdk;

$shop = $sdk->getShopScope();

dump(
    $shop->category->get()
);