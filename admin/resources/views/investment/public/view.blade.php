<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('User Id', (isset($fields['user_id']['language'])? $fields['user_id']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->user_id,'user_id','1:tb_users:id:first_name|last_name|username') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Startup Name', (isset($fields['startup_name']['language'])? $fields['startup_name']['language'] : array())) }}</td>
						<td>{{ $row->startup_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Registration No', (isset($fields['registration_no']['language'])? $fields['registration_no']['language'] : array())) }}</td>
						<td>{{ $row->registration_no}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Video Link', (isset($fields['video_link']['language'])? $fields['video_link']['language'] : array())) }}</td>
						<td>{{ $row->video_link}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mobile Number', (isset($fields['mobile_number']['language'])? $fields['mobile_number']['language'] : array())) }}</td>
						<td>{{ $row->mobile_number}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Address', (isset($fields['address']['language'])? $fields['address']['language'] : array())) }}</td>
						<td>{{ $row->address}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sector', (isset($fields['sector']['language'])? $fields['sector']['language'] : array())) }}</td>
						<td>{{ $row->sector}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Amount Requested', (isset($fields['amount_requested']['language'])? $fields['amount_requested']['language'] : array())) }}</td>
						<td>{{ $row->amount_requested}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product Stage', (isset($fields['product_stage']['language'])? $fields['product_stage']['language'] : array())) }}</td>
						<td>{{ $row->product_stage}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Attachment', (isset($fields['attachment']['language'])? $fields['attachment']['language'] : array())) }}</td>
						<td>{{ $row->attachment}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Website Url', (isset($fields['website_url']['language'])? $fields['website_url']['language'] : array())) }}</td>
						<td>{{ $row->website_url}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Add Info1', (isset($fields['add_info1']['language'])? $fields['add_info1']['language'] : array())) }}</td>
						<td>{{ $row->add_info1}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Add Info2', (isset($fields['add_info2']['language'])? $fields['add_info2']['language'] : array())) }}</td>
						<td>{{ $row->add_info2}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Updated At', (isset($fields['updated_at']['language'])? $fields['updated_at']['language'] : array())) }}</td>
						<td>{{ $row->updated_at}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	