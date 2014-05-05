<?php

## Simple command-line script to show examples

require "./Bunny.php";

$config = array(
    'user' => 'bunnycoinrpc',
    'pass' => '--password--',
    'host' => '127.0.0.1',
    'port' => '48445' );

// create client conncetion
$bunny = new Bunny( $config );


// create a new address
$address = $bunny->get_address( 'name' );
print( "Address: $address \n" );

// list accounts in wallet
print_r( $bunny->list_accounts() );

// get balance in wallet
print( "name: " . $bunny->get_balance( 'name' ) );

// move money from accounts in wallet
// moves from 'name2' to account 'name'
$bunny->move( 'name2', 'name', 10000 );

// send money externally (withdrawl?)
// send from account to external address
$bunny->send( 'name', 'BaKQWQep1j6aDKoraMrGBSzxTjxcuBcqSi', 100 );

