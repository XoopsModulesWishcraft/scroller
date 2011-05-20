<?php
if (!defined('XOOPS_ROOT_PATH')) {
	exit();
}
/**
 * Class for Scroller
 * @author Simon Roberts (simon@chronolabs.org.au)
 * @copyright copyright (c) 2000-2009 XOOPS.org
 * @package kernel
 */
class ScrollerScroller extends XoopsObject
{

    function ScrollerScroller($fid = null)
    {
        $this->initVar('id', XOBJ_DTYPE_INT, null, false);
        $this->initVar('content', XOBJ_DTYPE_OTHER, null, true);		
        $this->initVar('expires', XOBJ_DTYPE_INT, null, false);		
        $this->initVar('weight', XOBJ_DTYPE_INT, null, false);				
    }

    function id()
    {
        return $this->getVar("id");
    }

    function content()
    {
        return $this->getVar("content");
    }
	
    function expires()
    {
        return $this->getVar("expires");
    }
	
	function weight()
    {
        return $this->getVar("weight");
    }

}


/**
* XOOPS Scroller handler class.
* This class is responsible for providing data access mechanisms to the data source
* of XOOPS user class objects.
*
* @author  Simon Roberts <simon@chronolabs.org.au>
* @package kernel
*/
class ScrollerScrollerHandler extends XoopsPersistableObjectHandler
{
    function __construct(&$db) 
    {
        parent::__construct($db, "scroller", 'ScrollerScroller', "id", "content");
    }
	
}
?>