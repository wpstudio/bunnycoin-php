bunnycoin-php
=============

A basic PHP library for interacting with bunnycoind - http://api.bunnyco.in

I plan to expand upon the end points of the API.  Right now accounts and movement of coins is working.

*Notes:* You can follow along (and suggest... please do) which API endpoints I work on next.  Head to the [issues area](https://github.com/wpstudio/bunnycoin-php/issues) to contribute or to see what upcoming endpoints will be added to this api.


## Requirements

Requires **bunnycoind** to already be installed and running on your local server or reachable by your server.  

Get leafcoin source from: https://github.com/bunnycoin/bunnycoin


## Usage:

Example use, see examples.php for more

```
require "./Bunny.php";

$config = array(
    'user' => 'bunnycoinrpc',
    'pass' => '--password--',
    'host' => '127.0.0.1',
    'port' => '48444' );

// create client conncetion
$bunny = new Bunny( $config );

// create a new address
$address = $bunny->get_address( 'name' );
print( $address );

// check balance 
print( "name: " . $bunny->get_balance( 'name' ) );

// send money externally (withdrawl?)
$bunny->send( 'name', 'BaKQWQep1j6aDKoraMrGBSzxTjxcuBcqSi', 100 );

```


