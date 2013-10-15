<?php
session_start();
// store session data
$_SESSION['ANIMAL_FARM_ID']='976565';

?>
<!DOCTYPE html>
<html>
<head>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/global/define.php'); ?>
<?php require_once($DOCUMENTROOT.'/parts/head_res_inc.php'); ?>
		
</head>

<body>

	<?php require_once($DOCUMENTROOT.'/parts/header_inc.php'); ?>
		<div class="container">
		<div class="row">
				
		<?php require_once($DOCUMENTROOT.'/parts/navmenu_inc.php'); ?>	
						
			<!-- start: Content -->
			<div id="content" class="col-lg-10 col-sm-11">
				<?php

					$module = $_GET["module"];
		            if(!$module){
		                $module = 'dashboard';
		            }

					require_once($DOCUMENTROOT.'/parts/content/'.$module.'.php'); 

				?>
			</div>
			<!-- end: Content -->
				
				</div><!--/row-->		
		
	</div><!--/container-->
	
		
		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						<p>Here settings can be configured...</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	



	
<?php require_once($DOCUMENTROOT.'/parts/footer_inc.php'); ?>
	
<?php require_once($DOCUMENTROOT.'/parts/foot_res_inc.php'); ?>


	
</body>
</html>