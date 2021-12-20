<?php
namespace Payment;
use Omnipay\Omnipay;
class Payment
{
   /**
    * @return mixed
    */
   public function gateway()
   {
       $gateway = Omnipay::create('PayPal_Express');
       $gateway->setUsername("sb-4map09142562_api1.business.example.com");
       $gateway->setPassword("CVXUWPJQTYY5J35N");
       $gateway->setSignature("A8znKPYMGV24ksLxTljA7C27tZNWApPHcA5.jR3dYgeIeKwEngHDHDIw");
       $gateway->setTestMode(true);
       return $gateway;
   }
   /**
    * @param array $parameters
    * @return mixed
    */
   public function purchase(array $parameters)
   {
       $response = $this->gateway()
           ->purchase($parameters)
           ->send();
       return $response;
   }
   /**
    * @param array $parameters
    */
   public function complete(array $parameters)
   {
       $response = $this->gateway()
           ->completePurchase($parameters)
           ->send();
       return $response;
   }
   /**
    * @param $amount
    */
   public function formatAmount($amount)
   {
       return number_format($amount, 2, '.', '');
   }
   /**
    * @param $order
    */
   public function getCancelUrl($order = "")
   {
       return $this->route('http://localhost/pecanland/cancel.php', $order);
   }
   /**
    * @param $order
    */
   public function getReturnUrl($order = "")
   {
       return $this->route('http://localhost/pecanland/return.php', $order);
   }
   public function route($name, $params)
   {
       return $name; // ya change hua hai
   }
}