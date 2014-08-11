<?php
define('STATE_INITIAL', 0);
define('STATE_READY', 1);
define('STATE_PAID', 2);
define('STATE_POT_REFILL', 3);
define('STATE_CASH_OUT', 4);
// those do not display
define('STATE_SENTBACK_READY', 5);
define('STATE_SENTBACK', 6);
define('STATE_ARCHIVED', 7);
define('STATE_CASH_OUT_READY', 8);
define('STATE_CASH_OUT_INITIAL', 9);

define('COIN_DECIMAL_PLACES', 8);

define('ALGO_VERSION', 2);

define('CURRENT_VERSION', 2);

// audit error codes
$audit_errors = array(
	'SUCCESS' => "Success",
	'ALG_UNKNOWN' => "Unknown Algorithm", 
	'NO_RECEIVE_TX' => "Transaction not found or is not of 'receive' type.", 
	'AMOUNT_DOES_NOT_MATCH_TX' => "Amount recorded in the database does match the amount reported by coind.",
);

?>