<?php
namespace Social\Share\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\ObjectManager;
class PlaceOrderEvent implements \Magento\Framework\Event\ObserverInterface
{
	// public function execute(\Magento\Framework\Event\Observer $observer)
	// {
        // echo "Order Deatails"; //Get customer 
        // //$this->_redirect('contact');
        // //$block = $this->layout->createBlock('Magento\Checkout\Block\Onepage\Success')
        // //->setTemplate('checkout/view/frontend/templates/onepage.phtml')->toHtml();
        // echo getOrderIds();
        // exit;
        // }
        
        protected $_order;
        public function __construct(
                \Magento\Sales\Api\Data\OrderInterface $order
        ) {
                $this->_order = $order;    
        }
        public function execute(\Magento\Framework\Event\Observer $observer)
        {
        $orderids = $observer->getEvent()->getOrderIds();

                $order = $this->_order->load($orderids);
                echo "<h1>Your Order Details</h1>";
                // Fetch specific order information
                echo "<br>  Order Id : ";
                echo $order->getIncrementId();
                echo "<br>  Order total : ";
                echo $order->getGrandTotal();
                echo "<br>  Order Sub-total : ";
                echo $order->getSubtotal();
                echo "<br>";
                
                // Fetch order customer information
                echo "<br>  Customer Id : ";
                echo $order->getCustomerId();
                echo "<br>  Customer Email : ";
                echo $order->getCustomerEmail();
                echo "<br>  Customer Name : ";
                echo $order->getCustomerFirstname();
                echo "<br>";

                // Fetch order items information
                foreach ($order->getAllItems() as $item)
                {
                echo "<br>  Product Id : ";
                echo $item->getId();
                echo "<br>  Product type : ";
                echo $item->getProductType();
                echo "<br>  Quantity ordered : ";
                echo $item->getQtyOrdered();
                echo "<br>  Product Price : ";
                echo $item->getPrice();
                echo "<br>  Product Name : ";
                echo $item->getName();
                echo "<br>  Product SKU : ";
                echo $item->getSku();
                echo "<br>";
                echo "<h3>Thanks for your purchase with us !!!</h3>";
                }
                exit;
        }
}