<div class="row">

	<div class="col-md-12">

	<div class="box box-default">
			<div class="box-header with-border">
					<h3 class="box-title"> Area wise report</h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
					</div>
			</div> 

			<div class="box-body">
 			 <form target="_blank" class="form-horizontal" method="post" action="">

 			 	<div class="col-sm-6">
	             	<div class="form-group">
	                      <label for="account_number" class="col-sm-4 control-label">Report type</label>
	                      <div class="col-sm-8">
	                        <select class="form-control" name="report_type"  id="report_type" required="true">		                        	
		                           	<option value="collection"> Monthly area wise Collection report </option>
		                           	<option value="overall"> Monthly area wise overall report </option>
		                           		<option value="distribution"> Monthly area wise loan distribution report </option>
		                        	
		                        	 
		                        </select>
	                      </div>
	                    </div>
	             </div> 
	
				<div class="col-sm-2">
                  	
                  		<div class="form-group">
	                      <label for="account_number" class="col-sm-4 control-label"> date</label>
	                      <div class="col-sm-8">
	                        <input type="text" class="form-control" id="collection_date" name="collection_date" required="true" value="<?php echo set_value('collection_date')?set_value('collection_date'): date('d-m-Y') ;?>">
	                      </div>
	                    </div>
	             </div>      

	             

	             


	             <div class="col-sm-2">
	             	<input class="primari btn" type="submit" name="Search" value="Print report">
	             </div> 
	          </form>   

	         </div>
	</div>    

	</div>         

</div>


<script type="text/javascript">
	
	$("#collection_date").datepicker({ dateFormat: 'dd-mm-yy' });

	$(document).on('change',"#area",function(){

		$(".all").hide();
		var area = $(this).val();

		$("."+area).show();
	})


</script>