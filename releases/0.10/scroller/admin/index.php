<?php
	
	include('../../../mainfile.php');
	include('../../../include/cp_functions.php');
	include('../include/forms.php');
	include('../include/functions.php');	
	
	xoops_cp_header();
	
	switch ($_REQUEST['op'])
	{
		case "edit":
			adminMenu(0);
			edit_scroller_form();
			break;
		case "new":
			adminMenu(0);
			edit_scroller_form();
			break;
		case "delete":
			$id = intval($_REQUEST['id']);				
			$scrollerhandler = xoops_getmodulehandler('scroller','scroller');
			$scroller = $scrollerhandler->get($id);	
			if ($scrollerhandler->delete($scroller))			
				redirect_header('index.php', 3, 'Scroller Item Delete Successfully');
			else
				redirect_header('index.php', 3, 'Scroller Item Delete Unsuccessfully');
			break;
			exit;
		case "save":

			$id = intval($_REQUEST['id']);				
			$scrollerhandler = xoops_getmodulehandler('scroller','scroller');
			if ($id>0)
				$scroller = $scrollerhandler->get($id);	
			else
				$scroller = $scrollerhandler->create();	

			$scroller->setVar('content', $_REQUEST['content']);
			$scroller->setVar('weight', intval($_REQUEST['weight']));			
			$scroller->setVar('expires', strtotime($_REQUEST['expires']['date'])+$_REQUEST['expires']['time']);
			if ($scrollerhandler->insert($scroller))			
				redirect_header('index.php', 3, 'Scroller Item Updated Successfully');
			else
				redirect_header('index.php', 3, 'Scroller Item Updated Unsuccessfully');
				
			exit;
			break;
		default:
			adminMenu(0);
			sel_scroller_form();
			
	}

	footer_adminMenu();
	xoops_cp_footer();
?>