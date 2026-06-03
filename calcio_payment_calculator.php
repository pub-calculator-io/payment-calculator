<?php
/*
Plugin Name: Payment Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/payment-calculator/
Description: Easily calculate monthly loan payments, payoff terms, and total interest with our free Payment Calculator. Ideal for mortgages, auto, and personal loans.
Version: 1.0.0
Author: www.calculator.io / Payment Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_payment_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Payment Calculator by www.calculator.io";

function calcio_payment_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Payment Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_payment_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_payment_calculator', 'calcio_payment_calculator_shortcode' );