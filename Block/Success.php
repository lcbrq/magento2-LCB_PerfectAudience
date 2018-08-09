<?php

/**
 * Basic PerfectAudience integration module 
 *
 * @category   LCB
 * @package    LCB_PerfectAudience
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */

namespace LCB\PerfectAudience\Block;

class Success extends \Magento\Framework\View\Element\Template
{

    /**
     * @var \Magento\Checkout\Model\Session 
     */
    protected $checkoutSession;

    /**
     * Constructor
     * 
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Checkout\Model\Session $checkoutSession
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context, 
        \Magento\Checkout\Model\Session $checkoutSession
    )
    {
        $this->_checkoutSession = $checkoutSession;
        parent::__construct($context);
    }

    /**
     * Return order object from session
     * 
     * @return \Magento\Sales\Model\Order
     */
    public function getOrder()
    {
        return $this->_checkoutSession->getLastRealOrder();
    }

}
