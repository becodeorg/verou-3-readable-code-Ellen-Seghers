<?php

function orderPizza($pizzaType, $client) {

    $type = $pizzaType;
    print_r('Creating new order... <br>');
    $orderText = 'A';
    $orderText .= $pizzaType;
    $pizza = priceCalculator($type);
    $address = '';

    getAddress($client);

    $orderText .= ' pizza should be sent to ' . $client . ". <br>The address: {$address}.";
    print_r($orderText);
    print_r('<br>'.'the bill is €' . $pizza .'.<br>'.'Order finished.<br><br>');
}

function getAddress ($client) {

    if ($client == 'koen') {
        $address = 'a yacht in Antwerp';
    }

    elseif ($client == 'manuele') {
        $address = 'somewhere in Belgium';
    }

    elseif ($client == 'students') {
        $address = 'BeCode office';
    }
    return $address;
}

/**
 * @throws Exception
 */
function priceCalculator($pizza_type) {
    $cost = 0;

    if ($pizza_type == 'marguerita') {
        $cost = 5;
    }

    if ($pizza_type == 'golden') {
        $cost = 100;
    }

    if ($pizza_type == 'calzone') {
        $cost = 10;
    }

    if ($pizza_type == 'hawaii') {
        throw new Exception('Computer says no');
    }

    return $cost;
}

function orderAllPizzas() {
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

function makeEveryoneHappy($confirm) {
    if ($confirm) {
        orderAllPizzas();
    }
}

makeEveryoneHappy(true);
