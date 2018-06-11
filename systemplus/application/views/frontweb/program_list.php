<link href="<?php echo LTE; ?>plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
<script src="<?php echo LTE; ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo LTE; ?>plugins/datatables/dataTables.bootstrap.min.js"></script>

<div class="right_col" role="main">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-5 successMessage">
<?php
			$message = '';
			if($this->input->get('success') == 'add')
				$message = str_replace('**module**' , 'Program' , $this->lang->line('add_success_message'));
			elseif($this->input->get('success') == 'edit')
				$message = str_replace('**module**' , 'Program' , $this->lang->line('edit_success_message'));
			elseif($this->input->get('success') == 'delete')
				$message = str_replace('**module**' , 'Program' , $this->lang->line('delete_success_message'));
			echo $message;
?>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>
						Program Banner List
						<div class="buttons pull-right">
							<a class="btn btn-primary" href="<?php echo base_url(); ?>admin/program/add"><i class="fa fa-plus" aria-hidden="true"></i> Add Program Banner</a>
						</div>
					</h2>
					<br>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>SI No.</th>
								<th>Image</th>
								<th>Program Name</th>
								<th>Short Description</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!---------------------Status Modal Start--------------------->
<div class="modal fade" id="programStatus" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Update Program</h4>
			</div>
			<div class="modal-body">
				<p id = "statusUpdateMessage"></p>
			</div>
			<div class="modal-footer">
				<button type="button" id="updateStatusBtn" class="btn btn-info">Update</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!---------------------Status Modal End--------------------->

<script type = "text/javascript">
	$(document).ready(function(){
		var table = $("#datatable").DataTable({
			processing : true,
			stateSave : true,
			serverSide : true,
			ajax : {
				url : '<?php echo base_url(); ?>index.php/frontweb/program/get_program',
				type : 'POST'
			},
			aoColumnDefs: [
				{"bSortable" : false , "aTargets" : [1,4,5]}
			]
		});

		$(document).on('click' , '.global-list-status-icon' , function(e){
			var message = ($(this).data('status_type') == 1) ? '<?php echo str_replace("**module**" , "Program" , $this->lang->line("inactive_confirmation")); ?>' : '<?php echo str_replace("**module**" , "Program" , $this->lang->line("active_confirmation")); ?>';
			$('#statusUpdateMessage').text(message);
			$('#statusUpdateMessage').append('<input type="hidden" id="program_id" value="'+$(this).data('program_id')+'"><input type="hidden" id="program_status" value="'+$(this).data('status_type')+'">');
			$('#programStatus').modal();
		});

		$(document).on('click' , '#updateStatusBtn' , function(){
			$.ajax({
				url : '<?php echo base_url(); ?>index.php/frontweb/program/update_status',
				type : 'POST',
				data : {'program_id' : $('#program_id').val() , 'program_status' : $('#program_status').val()},
				success : function(){
					$('#programStatus').modal('hide');
					table.ajax.reload();
				}
			});
		});
	});

	function confirm_delete()
	{
		if(confirm('Are you sure to delete ?'))
			return true;
		else
			return false;
	}
</script>
