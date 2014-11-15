<?php
class Developmint_Slideshow_Block_Slide extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{

    /**
     * A model to serialize attributes
     * @var Varien_Object
     */
    protected $_serializer = null;

    /**
     * Initialization
     */
    protected function _construct()
    {
        $this->_serializer = new Varien_Object();
        parent::_construct();
    }

    /**
     * Produces the output for a buy now affiliate
     *
     * @return string
     */
    protected function _toHtml()
    {
        $this->assign('headline', $this->getData('slide_headline'));
        $this->assign('content', $this->getData('slide_content'));

        $this->assign('med_img', $this->getData('slide_image_medium'));
        $this->assign('small_img', $this->getData('slide_image_small'));
        $this->assign('large_img', $this->getData('slide_image_large'));

        return parent::_toHtml();
    }

}