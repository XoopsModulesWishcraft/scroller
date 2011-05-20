<?php

	global $xoopsTpl;
	
	$config_handler = xoops_gethandler('config');
	$module_handler =& xoops_gethandler('module');
	$xModule = $module_handler->getByDirname('scroller');	

	$xModuleConfig = $config_handler->getConfigsByCat(0, $xModule->getVar('mid'));
	
	$xoopsTpl->assign('scroll_delay', $xModuleConfig['scroll_delay']);
	$xoopsTpl->assign('scroll_maxstep', $xModuleConfig['scroll_maxstep']);
	$xoopsTpl->assign('scroll_stepdelay', $xModuleConfig['scroll_stepdelay']);
	$xoopsTpl->assign('scroll_sc_red', $xModuleConfig['scroll_sc_red']);
	$xoopsTpl->assign('scroll_sc_green', $xModuleConfig['scroll_sc_green']);
	$xoopsTpl->assign('scroll_sc_blue', $xModuleConfig['scroll_sc_blue']);
	$xoopsTpl->assign('scroll_ec_red', $xModuleConfig['scroll_ec_red']);
	$xoopsTpl->assign('scroll_ec_green', $xModuleConfig['scroll_ec_green']);
	$xoopsTpl->assign('scroll_ec_blue', $xModuleConfig['scroll_ec_blue']);
	$xoopsTpl->assign('scroll_opentag', $xModuleConfig['scroll_opentag']);
	$xoopsTpl->assign('scroll_closstag', $xModuleConfig['scroll_closstag']);
	$xoopsTpl->assign('scroll_width', $xModuleConfig['scroll_width']);	
	$xoopsTpl->assign('scroll_height', $xModuleConfig['scroll_height']);									
			
	$scrollerhandler = xoops_getmodulehandler('scroller','scroller');
	$criteria = new Criteria('expires', time(), '>=');
	$criteria->setSort('weight ASC, id');
	$criteria->setOrder('DESC');	
	$scroller = $scrollerhandler->getObjects($criteria);	
	
	foreach ($scroller as $item)
		$xoopsTpl->append('scroll_content', $item->getVar('content'));

?>
