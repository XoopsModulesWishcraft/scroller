<?php

	function edit_scroller_form()
	{
	
		if (isset($_REQUEST['id']))
		{
			$id = intval($_REQUEST['id']);				
			$scrollerhandler = xoops_getmodulehandler('scroller','scroller');
			$scroller = $scrollerhandler->get($id);	
			$content = $scroller->getVar('content');
			$expires = $scroller->getVar('expires');
			$weight = $scroller->getVar('weight');			
			$title = 'Edit Scroller Item';
		} else {
			$id = 0;
			$weight = 0;
			$expires = time()+ (3600*12);
			$title = 'New Scroller Item';
		}
		
		include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";
		$form = new XoopsThemeForm($title, "edititem", "", "post");

		$form->addElement(new XoopsFormTextArea('Content:', "content", $content, 15, 45));
		$form->addElement(new XoopsFormText('Weight:', "weight", 5, 3, $weight));
		$form->addElement(new XoopsFormDateTime('Expires:', "expires", 15, $expires));

		$form->addElement(new XoopsFormHidden("id", $id));
		$form->addElement(new XoopsFormHidden("op", "save"));		
		$form->addElement(new XoopsFormButton('', 'contents_submit', _SUBMIT, "submit"));
		$form->display();
	}
	
	function sel_scroller_form()
	{
	
		include_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";

		$form = new XoopsThemeForm('Current Scrollers', "current", "", "post");

		$scrollerhandler = xoops_getmodulehandler('scroller','scroller');
		$criteria = new Criteria('expires', time(), '>=');
		$criteria->setSort('weight ASC, id');
		$criteria->setOrder('DESC');		
		$scroller = $scrollerhandler->getObjects($criteria);	
		$element = array();
		foreach($scroller as $key => $item)
		{
			$element[$key] = new XoopsFormElementTray('Scroller Item '.$item->getVar('id').':');
			$element[$key]->addElement(new XoopsFormLabel('', '<a href="index.php?op=edit&id='.$item->getVar('id').'">Edit</a>&nbsp;<a href="index.php?op=delete&id='.$item->getVar('id').'">Delete</a>'));
			$element[$key]->addElement(new XoopsFormLabel('Weight:', ''.$item->getVar('weight').''));			
			$element[$key]->addElement(new XoopsFormLabel('Expires:', ''.date(_DATESTRING, $item->getVar('expires')).''));
			$element[$key]->addElement(new XoopsFormLabel('Content:', ''.$item->getVar('content').''));
			$form->addElement($element[$key]);
		}
		$form->display();
		
		$formb = new XoopsThemeForm('Expired Scrollers', "expired", "", "post");

		$criteria = new Criteria('expires', time(), '<=');
		$criteria->setSort('weight ASC, expires, id');
		$criteria->setOrder('DESC');		
		$scroller = $scrollerhandler->getObjects($criteria);	
		$element = array();
		foreach($scroller as $key => $item)
		{
			$element[$key] = new XoopsFormElementTray('Scroller Item '.$key.':');
			$element[$key]->addElement(new XoopsFormLabel('', '<a href="index.php?op=edit&id='.$item->getVar('id').'">Edit</a>&nbsp;<a href="index.php?op=delete&id='.$item->getVar('id').'">Delete</a>'));
			$element[$key]->addElement(new XoopsFormLabel('Expires:', ''.date(_DATESTRING, $item->getVar('expires')).''));
			$element[$key]->addElement(new XoopsFormLabel('Content:', ''.$item->getVar('content').''));
			$formb->addElement($element[$key]);
		}
		$formb->display();
		
	}
		
?>