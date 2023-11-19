<?php
/*
Plugin Name: Payment Calculator by www.calculator.io
Plugin URI: https://www.calculator.io/payment-calculator/
Description: Define the monthly payment amount or time period to pay off a loan with a set term or fixed payment with our free payment calculator.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_payment_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Payment Calculator by Calculator.iO";

function display_ci_payment_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Payment Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_payment_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_payment_calculator', 'display_ci_payment_calculator' );