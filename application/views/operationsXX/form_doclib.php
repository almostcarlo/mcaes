<?php
unset($doc_type['iprs picture']);
$current_tab = urldecode($current_tab);
// var_dump($current_tab);
// exit();
?>
<section role="main" class="content-body">
                  
	<header class="page-header">
		<h2>Document Library</h2>
	</header>

	<div class="row">
		<!-- APPLICANT INFORMATION -->
		<?php include APPPATH.'views/parts/applicant_information.php';?>

		<div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Document History</h2>
                </header>
                <div class="panel-body">
                    <table class="table table-striped table-condensed table-hover">
                        <thead>
                            <tr>
                                <th width="20%">Document Name</th>
                                <th width="20%">Attachment</th>
                                <th class="text-center" width="10%">Received Date</th>
                                <th class="text-center" width="10%">Released Date</th>
                                <th class="text-center" width="10%">Expiry Date</th>
                                <th width="30%">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                    		<?php if($all_docs):?>
                    			<?php foreach($all_docs as $doc_info):?>
                    				<tr>
                    					<td><?php echo $doc_info['description'];?></td>
                    					<td><a href="<?php echo BASE_URL."applicant/my_files/".base64_encode($doc_info['id']);?>" target="_blank"><?php echo $doc_info['filename'];?></a></td>
                    					<td class="text-center"><?php echo dateformat($doc_info['add_date']);?></td>
                    					<td class="text-center"><?php echo dateformat($doc_info['released_date']);?></td>
                    					<td class="text-center"><?php echo dateformat($doc_info['expiry_date']);?></td>
                    					<td><?php echo $doc_info['remarks'];?></td>
                    				</tr>
                    			<?php endforeach;?>
                    		<?php endif;?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
		
		<div class="col-md-12">
			<?php flashNotification(); ?>
		</div>

		<div class="col-md-12">
			<div class="tabs">
				<ul class="nav nav-tabs tabs-primary">
					<!-- <li class="profile_tab" aria-controls="reported_today"><a href="#reportedtoday" data-toggle="tab">Reported Today</a></li> -->
					<?php foreach ($doc_type as $k => $doc_name):?>
						<li class="doc_tab <?php echo ($current_tab == $k)?"active":""?>"  aria-controls="<?php echo $k;?>"><a href="<?php echo $k;?>" data-toggle="tab"><?php echo $doc_name;?></a></li>
					<?php endforeach;?>
				</ul>
				<div class="tab-content">
                    
                </div>
            </div>
		</div>
	</div>
</section>

<script>
	var applicant_id = '<?php echo $applicant_data['personal']->id;?>';
	var current_tab = '<?php echo $current_tab;?>';
</script>