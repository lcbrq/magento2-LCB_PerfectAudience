<?php
/**
 * Basic PerfectAudience integration module 
 *
 * @category   LCB
 * @package    LCB_PerfectAudience
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */

namespace LCB\PerfectAudience\Block;

class Base extends \Magento\Framework\View\Element\Template
{
 
    /**
     * Render block HTML
     *
     * @return string
     */
    public function _toHtml()
    {
        if (!$this->_scopeConfig->getValue('perfectaudience/general/enabled', \Magento\Store\Model\ScopeInterface::SCOPE_STORE) || !$this->getId()) {
            return '';
        }
        return parent::_toHtml();
    }
    
    /**
     * Get tracking id
     * 
     * @return string
     */
    public function getId()
    {
        return $this->_scopeConfig->getValue('perfectaudience/general/id', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

}
