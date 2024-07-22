<style>
.no_visa_message {
    font-size: 15px;
}
a.remove_button_specialities, a.remove_button_for_another {
    font-size: 13px;
    color: #fff;
    font-weight: 500;
    background: #a38242;
    padding: 13px 4px;
    border-radius: 3px;
    width: 94%;
    text-align: center;
    height: fit-content;
}

a.add_button_specialities, .add_button_specialities_for_another {
        text-align: left;
    font-size: 14px;
    color: #fff !important;
    font-weight: 500;
    background: #a38242;
    padding: 13px 20px;
    border-radius: 3px;
    height: 50px;
    display: flex;
    align-items: center;
    width: 28%;
    justify-content: center;
    margin-top: 10px;

}

a.add_button_specialities i, .add_button_specialities_for_another i {color: #fff;
        padding-right: 10px;
}
.destinationText h6 {
    font-size: 15px;
    text-align: left;
    text-transform: capitalize;
    color: #000;
    font-weight: 500;
    margin: 0;
    line-height: 1.5;
    letter-spacing: 0;
}
div#confirmationMessage ,.confirmationMessage2 {
    background: #a5823e;
    color: #fff;
    margin-top: 9px;
    border-radius: 10px;
    width: fit-content;
    padding: 6px 10px;
}
.radio_btn_div {
    display: flex;
    height: 28px;
}

div#main_div,div#main_div2,div#main_div3 {
    display: block !important;
}

.radio_btn_div div {
    display: flex;
}

.radio_btn_div div input {
    margin-top: 0 !important;
    height: auto;
}

.destinationText h6 {
    font-size: 14px !important;
    line-height: 1;
    margin: 0;
}


div.contact_check>div {
  
    align-items: center !important;
}

div.contact_check>div label {
    position: unset !important;
    float: unset !important;
    transform: translateY(0%);
    padding-left: 10px !important;
    line-height: 1;
    margin-right: 15px;
}

div.contact_check {
    
    height: 60px !important;
    padding: 8px 10px !important;
}
.fa.fa-trash {
    color: #bea367 !important;
    float: right !important;
}
	.another-applicant{
		border: 2px solid #C9B474;
		padding: 12px 25px;
		letter-spacing: 1px;
		border-radius: 30px;
		text-transform: uppercase;
		font-family: 'Proxima Nova';
		font-size: 14px;
		display: block;
		width: fit-content;
		color: #C9B474;
		background-color: transparent;
		transition: 0.3s;
		min-width: 250px;
		font-weight: 600;
		margin-left: 10px;
	}

	.remove-app {
		display: flex;
		justify-content: flex-end;
		position: relative;
		bottom: 80px;
	}
	}
	a.action-btn.btn-trash.remove-item {
		float: right;
		color:#bea367;
	}
	.empty-cart-message {
		text-align: center;
		background: #988853 !important;
		padding: 10px;
		color: #FFE;
		border-radius: 10px;
	}.get-countrrs .floating-field {
		 width: 39%;
		 margin: 0 9px;
	 }
.floating-field{
    height:60px;
}
	div#all_packages {
		display: flex;
	}
	div#all_packages .timeslot {
		margin-right: 10px;
	}

	.timeslots-container {
		display: flex;
		flex-direction: column;
	}

	/* Style for individual timeslot */
	.timeslot {
		margin-bottom: 10px;
	}

	/* Hide radio inputs */
	.timeslot input[type="checkbox"] {
		display: none;
	}

	/* Customize radio label appearance */
	.timeslot label {
		display: inline-block;
		padding: 10px 20px;
		border: 1px solid #ccc;
		border-radius: 8px;
		cursor: pointer;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add box shadow */
	}

	/* Style when radio input is checked */
	.timeslot input[type="checkbox"]:checked + label {
		background-color: #bea367 !important;
		color: #fff;
	}
	/* Style for timeslots container */
	.timeslots-container {
		display: flex;
		flex-direction: row;
		gap: 16px;
		margin-top: 10px;
	}

	/* Style for individual timeslot */
	.timeslot {
		margin-bottom: 10px;
	}
	.get-countrrs .row {
		align-items: center;
	}
	.get-countrrs{
		margin-top:5px;
	}
	.trvl-dest ,.trvl-dest2 {
		margin-bottom:5px;
	}
	.trvl-dest .row ,.trvl-dest2 .row {
		align-items: center !important;
		padding-left: 8px;
	}


	.trvl-dest
	.floating-field ,	.trvl-dest2
	.floating-field {
		/*width: 40%;*/
		margin: 0 6px;
	}
.trvl-dest .floating-field.floating-country label ,.trvl-dest2 .floating-field.floating-country label {
  font-size: 16px;
  line-height: 1.3;
  padding-right: 16px !important;
}
.trvl-dest .floating-field.floating-country ,.trvl-dest2 .floating-field.floating-country {
  height: 100px;
  /*width: 49%;*/
}
.checkout-sec .checkout-inner .contact-info .col-2 {
  /*width: auto;*/
}
.checkout-sec .checkout-inner .contact-info .trvl-dest .row  ,.checkout-sec .checkout-inner .contact-info .trvl2-dest .row {
  /*align-items: flex-start !important;*/
}
.checkout-sec .checkout-inner .contact-info .trvl-dest .row input,.checkout-sec .checkout-inner .contact-info .trvl2-dest .row input {
  margin-top: 4px;
}
</style>
<section class="checkout-sec">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-11 col-xxl-11">
				<div class="checkout-inner">
					<form method="POST" action="<?php echo site_url('checkout-step-2'); ?>">
						<div class="row">
							<div class="col-12 col-md-12 col-sm-12 col-lg-8 col-xl-8 col-xxl-8">
								<div class="data-wrapper">
									<div class="contact-info">
										<h3>Applicant Info</h3>
										<h5>Applicant 1</h5>
										<div class="row">
											<div class="col-12">
												<div class="floating-field">
													<select>
														<option value="USA" selected="">USA</option>

													</select>
													<label for="first-name">What is your current
														Citizenship?</label>
												</div>
											</div>
											<div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
												<div class="floating-field">
													<input type="date" id="travel-departure" placeholder="name" name="travel_departure">
													<label for="travel-departure">Travel Departure</label>
												</div>
											</div>
											<div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12 trvl-dest">
												<div class="row">
												    <div class="col-md-6 col-sm-12" style="padding-left:0;">
													    <div class="floating-field ">
														<?php
														$query = $this->db->query("SELECT * FROM rjr_countries");
														$country_names = $query->result_array();
														if (!empty($country_names)):
															?>
															<select name="countries_name[]" id="countries_name_id" class="form-control form-select">
																<option value="">Please Select</option>
																<?php foreach ($country_names as $country_name):
																	?>
																	<option value="<?php echo $country_name['country_name']; ?>" data-country-id="<?php echo  $country_name['id'] ;?>" data-visa-required="<?php echo $country_name['visa_required'];?>" class="flag-<?php echo strtolower($country_name['country_code']); ?>">
																		<?php
																		echo $country_name['country_name'];
																		?>
																	</option>
																<?php endforeach; ?>
															</select>
															<label for="visa_select">Travel Destination</label>
														<?php else: ?>
															<p>No Country available.</p>
														<?php endif; ?>

													</div>
                                                    </div>
													<div id="contactCheckbox" style="display: none;" class="m-0 floating-field floating-country col-6   contact_check">
													    <div id="main_div" class="option_cont_div">
													    <div class="destinationText"><h6>Visa is required for this destination. Do you need assistance?</h6></div>
														<div class="radio_btn_div">
														    <div>
														    
															<input type="radio" class="get_for_form" name="contact_me[]" id="contact_me">
																<label id="contact_me_label" for="contact_me"></label>
															</label>
															
														</div>
														<div>
															
																<input type="radio" name="contact_me[]" value="no" id="not_required">
																<label id="not_required_label" for="not_required_label">no</label>
														
														</div>
														</div>
													
														</div>
														
													</div>
													<div class="no_visa_message col-5" style="display: none;"></div>
													
														<div id="confirmationMessage" style="display: none;">
                                                            Thank you for your submission, our team will get back to you regarding visa facility.
                                                        </div>
												</div>
											</div>
											<div class="get-countrrs  col-12">
											</div>
											<div class="col-12">
												<a href="javascript:void(0);" class="add_button_specialities" title="Add field"><i class="fas fa-plus-circle"></i> Add Destination</a>
											</div>

										</div>
									</div>


									<div class="contact-info">
										<h3>Contact Information</h3>
										<div class="row">
											<div class="col-12">
												<p class="label-p">Are you one of the travelers? </p>
												<div class="custom-radio-input-container">
													<label for="traveler-no">
														<input id="traveler-no" name="traveler[]" type="radio">
														<div class="custom-radio">
															<span class="checkmark"></span>
															<span>no</span>
														</div>
													</label>
													<label for="traveler-yes">
														<input id="traveler-yes" name="traveler[]" type="radio">
														<div class="custom-radio">
															<span class="checkmark"></span>
															<span>yes</span>
														</div>
													</label>
												</div>
											</div>
											<div class="col-12 col-md-4 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
												<div class="floating-field">
													<input type="text" id="first-name" placeholder="name" name="firstname[]">
													<label for="first-name">First Name</label>
												</div>
											</div>
											<div class="col-12 col-md-4 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
												<div class="floating-field">
													<input type="text" id="middle-name" placeholder="name" name="middlename[]">
													<label for="middle-name">Middle Name</label>
												</div>
											</div>
											<div class="col-12 col-md-4 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
												<div class="floating-field">
													<input type="text" id="last-name" placeholder="name" name="lastname[]">
													<label for="last-name">Last Name</label>
												</div>
											</div>

											<div class="col-12">
												<div class="floating-field">
													<input type="text" id="company-name" placeholder="name" name="company_name[]">
													<label for="company-name">Company Name</label>
												</div>
											</div>
											<div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
												<div class="floating-field">
													<input type="date" id="DOB" placeholder="name" name="dob[]">
													<label for="DOB">Date of Birth (DOB)</label>
												</div>
											</div>
											<div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
												<div class="floating-field">
													<input type="number" id="contact-number" placeholder="name" name="contact_number[]">
													<label for="contact-number">Phone</label>
												</div>
											</div>
											<div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
												<div class="floating-field">
													<input type="email" id="email-address" placeholder="name" name="email_address[]">
													<label for="email-address">Email Address</label>
												</div>
											</div>
											<div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
												<div class="floating-field">
													<input type="email" id="confirm-email-address" placeholder="name" name="confirm_email[]">
													<label for="confirm-email-address">Confirm Email Address</label>
												</div>
											</div>
											<div class="col-12 col-md-4 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
												<div class="floating-field">
													<input type="text" id="city" placeholder="City" name="city" required>
													<label for="first-name">City</label>
												</div>
											</div>
											<div class="col-12 col-md-4 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
												<div class="floating-field">
													<input type="text" id="state" placeholder="state" name="state" required>
													<label for="middle-name">State</label>
												</div>
											</div>
											<div class="col-12 col-md-4 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
												<div class="floating-field">
													<input type="number"  id="zipcode" placeholder="zipcode" name="zipcode"  required>
													<label for="last-name">Zip Code</label>
												</div>
											</div>
											<div class="col-12">
												<div class="floating-field">
													<input type="text" id="shipping-address" placeholder="name" name="shipping_address" required>
													<label for="shipping-address">Shipping Address</label>
												</div>
											</div>
										</div>
									</div>

									<div id="get-another">
										<div class="contact-info" id="package-info" style="display: none;">
											<div class="row">
												<h3>Select Package</h3>
												<div class="col-12">
													<div class="floating-field">
													    	<!--<label for="first-name">Category</label>-->
														<?php 
														 $query = $this->db->query("SELECT * FROM category");
                                                         $categories_packages = $query->result_array();
														    if (!empty($categories_packages)):
															?>
															
															<select name="packages_cat" id="packages_cat" class="form-control form-select">
																<option value="">Please Select</option>
																<?php foreach ($categories_packages as $categories_package):
																	?>
																	<option value="<?php echo $categories_package['category_id']; ?>">
																		<?php
																		echo $categories_package['category_name'];
																		?>
																	</option>
																<?php endforeach; ?>
															</select>
															<label for="visa_select">Category</label>
														<?php else: ?>
															<p>No Package Category available.</p>
														<?php endif; ?>
													
													</div>
												</div>
												<div id="all_packages"></div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
								<div id="detail_cart">

								</div>
								<div class="order-summary">



								</div>
							</div>
						</div>
						<div class="btn-wrapper">
						     <input type="hidden" name="selected_values" id="selectedValuesInput" value="">
							<button type="submit" class="continue-btn">Continue</button>
							<button  class="submit-btn another-applicant">Add Another Applicant</button>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</section>

<div class="modal fade another-applicant-popup" id="anotherapplicant" tabindex="-1" aria-labelledby="anotherapplicantLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered-">
		<div class="modal-content">
			<button type="button" class="close-modal" data-bs-dismiss="modal" aria-label="Close"><i class="fal fa-times"></i></button>
			<h4>Add Applicant</h4>
			<div class="another-applicant-form">
				<form class="add-applicant-form" action="javascript:;">
					<div class="row">
						<div class="col-12">
							<p class="label-p">Are you one of the travelers? </p>
							<div class="custom-radio-input-container">
								<label for="traveler-no-1">
									<input id="traveler-no-1" name="traveler" type="radio">
									<div class="custom-radio">
										<span class="checkmark"></span>
										<span>no</span>
									</div>
								</label>
								<label for="traveler-yes-1">
									<input id="traveler-yes-1" name="traveler" type="radio">
									<div class="custom-radio">
										<span class="checkmark"></span>
										<span>yes</span>
									</div>
								</label>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
							<div class="floating-field">
								<input type="text" id="first-name" placeholder="name">
								<label for="first-name">First Name</label>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
							<div class="floating-field">
								<input type="text" id="middle-name" placeholder="name">
								<label for="middle-name">Middle Name</label>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
							<div class="floating-field">
								<input type="text" id="last-name" placeholder="name">
								<label for="last-name">Last Name</label>
							</div>
						</div>
						<div class="col-12">
							<div class="floating-field">
								<input type="text" id="company-name" placeholder="name">
								<label for="company-name">Company Name</label>
							</div>
						</div>
						<div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
							<div class="floating-field">
								<input type="date" id="DOB" placeholder="name">
								<label for="DOB">Date of Birth (DOB)</label>
							</div>
						</div>
						<div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
							<div class="floating-field">
								<input type="text" id="contact-number" placeholder="name">
								<label for="contact-number">Phone</label>
							</div>
						</div>
						<div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
							<div class="floating-field">
								<input type="email" id="email-address" placeholder="name">
								<label for="email-address">Email Address</label>
							</div>
						</div>
						<div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
							<div class="floating-field">
								<input type="email" id="confirm-email-address" placeholder="name">
								<label for="confirm-email-address">Confirm Email Address</label>
							</div>
						</div>
						<div class="col-12">
							<div class="floating-field">
								<input type="text" id="shipping-address" placeholder="name">
								<label for="shipping-address">Shipping Address</label>
							</div>
						</div>
					</div>
					
					<button type="submit" class="submit-btn">Add Applicant</button>
				</form>


			</div>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script>
	jQuery(document).ready(function() {
		jQuery('.remove-item').click(function(e) {
			e.preventDefault();
			var rowid = $(this).data('rowid');
			// alert(rowid);
			var clickedElement = $(this);
			jQuery.ajax({
				url: "<?php echo site_url('cart/remove_item_ajax'); ?>",
				type: "POST",
				data: { rowid: rowid },
				success: function(response) {
					var jsonResponse = typeof response === 'string' ? JSON.parse(response) : response;
					jQuery('#' + rowid).hide();
					var totalItems = jsonResponse.total_items;
					var totalAmount = jsonResponse.total_amount;
					jQuery('.order-summary h5').text('Order Summary');
					jQuery('.order-summary .total-amount h4').text('$' + totalAmount);

				// 	toastr.options = {
				// 		"closeButton": true,
				// 		"debug": false,
				// 		"newestOnTop": false,
				// 		"progressBar": true,
				// 		"positionClass": "toast-top-right",
				// 		"preventDuplicates": false,
				// 		"onclick": null,
				// 		"showDuration": "300",
				// 		"hideDuration": "1000",
				// 		"timeOut": "5000",
				// 		"extendedTimeOut": "1000",
				// 		"showEasing": "swing",
				// 		"hideEasing": "linear",
				// 		"showMethod": "fadeIn",
				// 		"hideMethod": "fadeOut"
				// 	}
				// 	toastr.success('Item Delete successfully.');
					getCsartAjaxData();

				},

				error: function(xhr, status, error) {
					console.log('AJAX error:', xhr.responseText);
				}
			});
		});
	});
</script>
<script type="text/javascript">

	$(document).ready(function(){
		var maxField = 10; // Maximum number of input fields
		var addButton = $('.add_button_specialities'); // Add button selector
		var wrapper = $('.trvl-dest'); // Input field wrapper
        var fieldCount =  1;
		// Function to fetch country data via AJAX
		function fetchCountryData() {
			$.ajax({
				url: '<?php echo base_url('get-all-countries') ;?>', // Replace with the actual path to your PHP script
				method: 'GET',
				dataType: 'json',
				success: function(response) {
					if (response && response.length > 0) {
						// Generate the select options based on the response data
						var selectOptions = '';
						var checkboxId; // Define checkboxId outside the loop

						$.each(response, function(index, country) {
						     var checkboxIndex = fieldCount;
							checkboxId = 'contact_me_' + checkboxIndex; 
							not_checkboxId = 'not_required_' + checkboxIndex; 
							selectOptions += '<option value="' + country.country_name + '" data-country-id="' + country.id + '" data-visa-required="' + country.visa_required + '" class="flag-' + country.country_code.toLowerCase() + '">' + country.country_name + '</option>';
						});

						var fieldHTML = `
							<div class="row mt-3 align-items-center">
							    <div class="col-4" style="padding-left:0;">
    								<div class="floating-field">
    									<select name="countries_name[]" id="countries_name_id_2" class="form-control form-select countries_name_id_2">
    										<option value="">Please Select</option>
    										${selectOptions}
    									</select>
    									<label for="visa_select">Travel Destination</label>
    								</div>
								</div>
								<div id="contactCheckbox_2" style="display: none;" class="m-0 floating-field floating-country col-5 contactCheckbox_2 contact_check">
								<div class="option_cont_div" id="main_div2">
								<div class="destinationText"><h6>Visa is required for this destination. Do you need assistance?</h6></div>
								<div class="radio_btn_div">
									<div>
										<input type="radio" name="${checkboxId}[]" id="${checkboxId}" class="contact_me_2 get_for_form">
										<label id="contact_me_label_2" for="${checkboxId}" class="contact_me_label_2"></label>
									</div>
									
									<div>
															
										<input type="radio" name="${checkboxId}[]" value="no" id="not_required">
								<label id="not_required_label" for="not_required_label">no</label>
												
								</div>
								</div>
								</div>
								
								</div>
									<div class="no_visa_message col-5" style="display: none;"></div>	
								<div class="col-3" style="">
									<a href="javascript:void(0);" class="remove_button_specialities" title="Remove field"><i class="fas fa-trash"></i> Remove Destination</a>
								</div>
								 <div class="confirmationMessage2" style="display: none;">
            Thank you for your submission, our team will get back to you regarding visa facility.
        </div>
							</div>
						`;


						$(wrapper).append(fieldHTML);
						document.addEventListener("change", function(event) {
							if (event.target.classList.contains("countries_name_id_2")) {
								var selectElement = event.target;
								var selectedOption = selectElement.options[selectElement.selectedIndex];
								var visaRequired = selectedOption.getAttribute("data-visa-required");
								var countryName = selectedOption.textContent;
                                var noVisaMessage = selectElement.closest(".row").querySelector(".no_visa_message");
								var contactCheckbox = selectElement.closest(".row").querySelector(".contactCheckbox_2");
								var contactCheckboxLabel = selectElement.closest(".row").querySelector(".contact_me_label_2");
								var contactmeCheckbox = contactCheckbox.querySelector(".contact_me_2");
								
                               
								if (visaRequired === "1") {
									contactCheckbox.style.display = "flex";
										noVisaMessage.style.display = "none";
									contactCheckboxLabel.textContent = `Yes`;
									contactmeCheckbox.value = `Visa is required for ${countryName}, let us know if you'd like to have personalized assistance with the visa requirements and application process.`;
									 

								} else if(visaRequired === "0") {
								    // noVisaMessage.style.width = "fit-content";
    
									contactCheckbox.style.display = "none";
									contactmeCheckbox.value = ""; 
									noVisaMessage.style.backgroundColor = "#bea367";
                                noVisaMessage.style.padding = "14px";
                                noVisaMessage.style.color = "#fff";
                                noVisaMessage.style.borderRadius = "6px";
                                noVisaMessage.style.display = "block";
                                noVisaMessage.textContent = `No visa is required for ${countryName}.`;
								}
							}
						});

                        fieldCount++;

					} else {
						console.log('No country data available.');
					}

				},
				error: function(xhr, status, error) {
					console.error('Error fetching country data:', error);
				}
			});
		}

		// Add button click event handler
		$(addButton).click(function(){
			// Check maximum number of input fields
			if ($(wrapper).find('.row').length < maxField) {
				// Call the fetchCountryData function to append another set of fields
				fetchCountryData();
			}
		});

		// Remove button click event handler
		$(wrapper).on('click', '.remove_button_specialities', function(e){
			e.preventDefault();
			$(this).closest('.row').remove(); // Remove the closest parent row
		});
		
		
		// Event listener for change on radio buttons with class 'contact_me_2'
    $(wrapper).on('change', '.contact_me_2', function() {
        
        var $confirmationMessage = $('.confirmationMessage2');

        // Toggle the display of the confirmation message based on radio button state
        if ($(this).is(':checked')) {
            $confirmationMessage.show();
        } else {
            $confirmationMessage.hide();
        }
    });

	});

	$(document).ready(function(){
	  


		$('.another-applicant').click(function (){

			$('#another-pack').toggle();

		});
		
	});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/html" id="field-template">
	<div class="row-another-app">
		<div class="contact-info">
			<h3>Applicant Info</h3>
			<h5>Applicant</h5>
			<div class="remove-app">
				<a href="javascript:void(0);" class="remove_button_another_app">
					<img src="<?php echo base_url("uploads/trash-can.png"); ?>"/>
				</a>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="floating-field">
						<select>
							<option value="USA" selected>USA</option>
						</select>
						<label for="current-citizenship">What is your current Citizenship?</label>
					</div>
				</div>
				<div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12 trvl-dest2">
					<div class="row">
					    <div class="col-md-6" style="padding-left:0;">
    						<div class="floating-field">
    							<?php
    							$query = $this->db->query("SELECT * FROM rjr_countries");
    							$country_names = $query->result_array();
    							if (!empty($country_names)):
    								?>
    								<select name="countries_name[]" id="countries_name_id_4" class="form-control form-select">
    									<option value="">Please Select</option>
    									<?php foreach ($country_names as $country_name):
    										?>
    										<option value="<?php echo $country_name['country_name']; ?>" data-country-id="<?php echo  $country_name['id'] ;?>" data-visa-required="<?php echo $country_name['visa_required'];?>" class="flag-<?php echo strtolower($country_name['country_code']); ?>"">
    										<?php
    										echo $country_name['country_name'];
    										?>
    										</option>
    									<?php endforeach; ?>
    								</select>
    								<label for="visa_select">Travel Destination</label>
    							<?php else: ?>
    								<p>No Country available.</p>
    							<?php endif; ?>
    
    						</div>
						</div>
						<div id="contactCheckbox4" style="display: none;" class="floating-field floating-country col-6 contact_check m-0">
							<div>
								<input type="radio" name="contact_me[]" id="contact_me4" class="contact_me4_msg">
								<label id="contact_me_label4" for="contact_me"></label>
								</label>

							</div>
							
							<div>
															
										<input type="radio" name="not_required" value="no" id="not_required">
								<label id="not_required_label" for="not_required_label">no</label>
														
								</div>
						</div>

						
					 <div class="confirmationMessage3" style="display: none;">
            Thank you for your submission, our team will get back to you regarding visa facility.
        </div>
					</div>
				</div>
				<div class="col-12 mb-3">
					<a href="javascript:void(0);" class="add_button_specialities_for_another" id="for_another" title="Add field"><i class="fas fa-plus-circle"></i> Add Destination</a>
				</div>
				<div class="row">
				<div class="col-12">
					<p class="label-p">Are you one of the travelers? </p>
					<div class="custom-radio-input-container">
						<label for="traveler-no">
							<input id="traveler-no" name="traveler[]" type="radio">
							<div class="custom-radio">
								<span class="checkmark"></span>
								<span>no</span>
							</div>
						</label>
						<label for="traveler-yes">
							<input id="traveler-yes" name="traveler[]" type="radio">
							<div class="custom-radio">
								<span class="checkmark"></span>
								<span>yes</span>
							</div>
						</label>
					</div>
				</div>
				<div class="col-12 col-md-4 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
					<div class="floating-field">
						<input type="text" id="first-name" placeholder="name" name="firstname[]">
						<label for="first-name">First Name</label>
					</div>
				</div>
				<div class="col-12 col-md-4 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
					<div class="floating-field">
						<input type="text" id="middle-name" placeholder="name" name="middlename[]">
						<label for="middle-name">Middle Name</label>
					</div>
				</div>
				<div class="col-12 col-md-4 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
					<div class="floating-field">
						<input type="text" id="last-name" placeholder="name" name="lastname[]">
						<label for="last-name">Last Name</label>
					</div>
				</div>

				<div class="col-12">
					<div class="floating-field">
						<input type="text" id="company-name" placeholder="name" name="company_name[]">
						<label for="company-name">Company Name</label>
					</div>
				</div>
				<div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
					<div class="floating-field">
						<input type="date" id="DOB" placeholder="name" name="dob[]">
						<label for="DOB">Date of Birth (DOB)</label>
					</div>
				</div>
				<div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
					<div class="floating-field">
						<input type="text" id="contact-number" placeholder="name" name="contact_number[]">
						<label for="contact-number">Phone</label>
					</div>
				</div>
				<div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
					<div class="floating-field">
						<input type="email" id="email-address" placeholder="name" name="email_address[]">
						<label for="email-address">Email Address</label>
					</div>
				</div>
				<div class="col-12 col-md-6 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
					<div class="floating-field">
						<input type="email" id="confirm-email-address" placeholder="name" name="confirm_email[]">
						<label for="confirm-email-address">Confirm Email Address</label>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</script>

<script>

	$(document).ready(function(){
		function get_all() {
			$.ajax({
				url: '<?php echo base_url('get-all-countries') ;?>', // Replace with the actual path to your PHP script
				method: 'GET',
				dataType: 'json',
				success: function(response) {
					if (response && response.length > 0) {
						var selectOptions = '';
						var checkboxId; // Define checkboxId outside the loop

						$.each(response, function(index, country) {
							var checkboxIndex = index + 1;
							checkboxId = 'contact_me_' + checkboxIndex; // Assign value to checkboxId
							selectOptions += '<option value="' + country.country_name + '" data-country-id="' + country.id + '" data-visa-required="' + country.visa_required + '" class="flag-' + country.country_code.toLowerCase() + '">' + country.country_name + '</option>';
						});

						var fieldHTML = `
							<div class="row mt-3">
							    <div class="col-4">
    								<div class="floating-field m-0">
    									<select name="countries_name[]" id="countries_name_id_2" class="form-control form-select countries_name_id_2">
    										<option value="">Please Select</option>
    										${selectOptions}
    									</select>
    									<label for="visa_select">Travel Destination</label>
    								</div>
								</div>
								<div id="contactCheckbox_2" style="display: none;" class="m-0 floating-field floating-country col-5 contactCheckbox_2 contact_check">
								<div id="main_div3">
								<div class="destinationText"  ><h6>Visa is required for this destination. Do you need assistance?</h6></div>
								<div class="radio_btn_div">
								    <div>
										<input type="radio" name="${checkboxId}[]" id="${checkboxId}" class="contact_me_2 get_for_form">
										<label id="contact_me_label_2" for="${checkboxId}" class="contact_me_label_2"></label>
									</div>
										<div>
															
										<input type="radio" name="not_required" value="no" id="not_required">
								<label id="not_required_label" for="not_required_label">no</label>
														
								</div>
								</div>
								</div>
									
								
								</div>
									<div class="no_visa_message col-5" style="display: none;"></div>	
								<div class="col-3">
									<a href="javascript:void(0);" class="remove_button_for_another" title="Remove field"><i class="fas fa-trash"></i> Remove Destination</a>
								</div>
							</div>
						`;

						var wrapper2 = $('.trvl-dest2');
						$(wrapper2).append(fieldHTML);
						document.addEventListener("change", function(event) {
							if (event.target.classList.contains("countries_name_id_2")) {
								var selectElement = event.target;
								var selectedOption = selectElement.options[selectElement.selectedIndex];
								var visaRequired = selectedOption.getAttribute("data-visa-required");
								var countryName = selectedOption.textContent;
  var noVisaMessage = selectElement.closest(".row").querySelector(".no_visa_message");
								var contactCheckbox = selectElement.closest(".row").querySelector(".contactCheckbox_2");
								var contactCheckboxLabel = selectElement.closest(".row").querySelector(".contact_me_label_2");
								var contactmeCheckbox = contactCheckbox.querySelector(".contact_me_2");

								if (visaRequired === "1") {
								    noVisaMessage.style.display = "none";
    contactCheckbox.style.display = "flex";
    // Use backticks (`) for template literals
    contactCheckboxLabel.textContent = `Yes`;
    contactmeCheckbox.value = `Visa is required for ${countryName}, let us know if you'd like to have personalized assistance with the visa requirements and application process.`;
} else if(visaRequired === "0") {
    contactCheckbox.style.display = "none";
    contactmeCheckbox.value = ""; // Clear the checkbox value if visa not required
    // noVisaMessage.style.width = "fit-content";
        noVisaMessage.style.backgroundColor = "#bea367";
        noVisaMessage.style.padding = "14px";
        noVisaMessage.style.color = "#fff";
        noVisaMessage.style.borderRadius = "6px";
        noVisaMessage.style.display = "block";
        noVisaMessage.textContent = `No visa is required for ${countryName}.`;
}

							}
						});



					} else {
						console.log('No country data available.');
					}

				},
				error: function(xhr, status, error) {
					console.error('Error fetching country data:', error);
				}
			});
		}
		var maxField = 10; // Maximum number of input fields
		var addButton = $('.another-applicant'); // Add button selector
		var wrapper = $('#get-another'); // Input field wrapper


		var fieldHTML = $('#field-template').html(); // Get HTML from template
		var x = 1;
		
// 			var addButton2 = document.querySelector('.add_button_specialities_for_another');
// 			if (addButton2) {
// 				addButton2.addEventListener('click', function() {
// 					get_all();
// 				});
// 			} else {
// 				console.error('Button not found.');
// 			}
		
		
		addButton.click(function(){
			$('#package-info').show();
			if(x < maxField){
				x++;
				var clonedField = $(fieldHTML).clone(); // Clone the HTML template
				wrapper.append(clonedField);
			}

		
		
		});
		
		  // Bind addButton2 click event using delegation
    $(document).on('click', '.add_button_specialities_for_another', function() {
        get_all();
    });
		
		wrapper.on('click', '.remove_button_another_app', function(e){
			e.preventDefault();
			$(this).closest('.row-another-app').remove(); 
			x--;
		});
		
		  $(wrapper).on('change', '.contact_me4_msg', function() {
        
        var $confirmationMessage3 = $('.confirmationMessage3');

        // Toggle the display of the confirmation message based on radio button state
        if ($(this).is(':checked')) {
            $confirmationMessage3.show();
        } else {
            $confirmationMessage3.hide();
        }
    });

         $(document).on('click', '.remove_button_for_another', function() {
        $(this).closest('.trvl-dest2 .row').remove();
    });
      function delayedFunction() {
    $("#countries_name_id_4").on("change", function() {
        var selectElement4 = this;
        var selectedOption4 = selectElement4.options[selectElement4.selectedIndex];
        var visaRequired4 = $(selectedOption4).attr("data-visa-required");
        var countryName4 = $(selectedOption4).text();
        var contactCheckbox4 = $("#contactCheckbox4");
        var contactMe4 = $("#contact_me4");
        var contactCheckboxLabel4 = $("#contact_me_label4");

       if (visaRequired4 === "1") {
        contactCheckbox4.show();
        // Concatenating strings to include the countryName4 variable
        contactCheckboxLabel4.text("Visa is required for " + countryName4 + ", let us know if you'd like to have personalized assistance with the visa requirements and application process.");
        contactCheckboxLabel4.val("Visa is required for " + countryName4 + ", let us know if you'd like to have personalized assistance with the visa requirements and application process.");
        contactMe4.val("Visa is required for " + countryName4 + ", let us know if you'd like to have personalized assistance with the visa requirements and application process.");
    } else {
        contactCheckbox4.hide();
    }
    });
}

setTimeout(delayedFunction, 2000); 
    
    
	});
	
	
</script>
<script>

	jQuery(document).ready(function() {
		// Event delegation for dynamically added elements
		jQuery(document).on('click', '#all_packages label', function() {

			var parentDiv = jQuery(this).parent();
			var value = parentDiv.find('input[type="checkbox"]').val();

			$.ajax({
				url: '<?php echo base_url('another-applicant');?>',
				method: 'post',
				data: {order_id: value},
				success: function(response) {
					getCsartAjaxData();
				},
				error: function (error) {
					console.error("Error in  AJAX request:", error);
				}
			});
		});

		getCsartAjaxData();
		function getCsartAjaxData(){
			$.ajax({
				url: '<?php echo base_url('get-cart-data');?>',
				method: 'get',
				success: function(response) {
					$('.order-summary').html(response);
				},
				error: function (error) {
					console.error("Error in  AJAX request:", error);
				}
			});
		}
	});

	jQuery(document).ready(function () {


		jQuery('#packages_cat').change(function () {
			var package_cat_id = $(this).val();
			var pckg_data = {
				package_cat_id: package_cat_id,
			};
			$.ajax({
				url: '<?php echo base_url('get-packages');?>',
				method: 'post',
				data: pckg_data,
				dataType: 'json',
				success: function(response) {
					$('#all_packages').empty();
					response.data.forEach(function(index, i) {
						var radioButton = $("<input type='checkbox'>")
							.attr("name", "package")
							.attr("id", "package_" + i)
							.attr("value", index.package_id)
							.data("name", index.plan_name)
							.data("price", index.package_price);
						var label = $("<label>")
							.attr("for", "package_" + i)
							.text(index.plan_name);
						var divContainer = $("<div>").addClass("timeslot");
						divContainer.append(radioButton).append(label);
						$('#all_packages').append(divContainer);
					});
				}
				,
				error: function (error) {
					console.error("Error in  AJAX request:", error);
				}
			});
		});
	});


</script>

<script>
document.getElementById("countries_name_id").addEventListener("change", function () {

    var selectElement = this;
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    var visaRequired = selectedOption.getAttribute("data-visa-required");
    var countryName = selectedOption.textContent;
    var contactCheckbox = document.getElementById("contactCheckbox");
    var contactMe =  document.getElementById("contact_me");
    var contactCheckboxLabel = document.getElementById("contact_me_label");
     var noVisaMessage = selectElement.closest(".row").querySelector(".no_visa_message");

    if (visaRequired === "1") {
        	noVisaMessage.style.display = "none";
        contactCheckbox.style.display = "flex";
        // Using template literals to include the value of countryName
        contactCheckboxLabel.textContent = `Yes`;
        contactCheckboxLabel.value = `Visa is required for ${countryName}, let us know if you'd like to have personalized assistance with the visa requirements and application process.`;
        contactMe.value = `Visa is required for ${countryName}, let us know if you'd like to have personalized assistance with the visa requirements and application process.`;
    } else if (visaRequired === "0") {
        contactCheckbox.style.display = "none";
// noVisaMessage.style.width = "fit-content";
noVisaMessage.style.backgroundColor = "#bea367";
noVisaMessage.style.padding = "14px";
noVisaMessage.style.color = "#fff";
noVisaMessage.style.borderRadius = "6px";
noVisaMessage.style.display = "block";
noVisaMessage.textContent = `No visa is required for ${countryName}.`;
    }
});
	


</script>
<script>
class RadioSelectionManager {
    constructor() {
        this.selectedValues = [];
        this.initializeRadioButtons();
        this.updateHiddenInput();
    }

    initializeRadioButtons() {
        document.addEventListener('change', (event) => {
            const target = event.target;
            if (target.classList.contains('get_for_form')) {
                this.updateSelectedValues();
                this.updateHiddenInput();
            }
        });
    }

    updateSelectedValues() {
        this.selectedValues = [];
        var radios = document.querySelectorAll('.get_for_form:checked');
        radios.forEach(radio => {
            this.selectedValues.push(radio.value);
        });
    }

    updateHiddenInput() {
        document.getElementById('selectedValuesInput').value = JSON.stringify(this.selectedValues);
    }
}

document.addEventListener("DOMContentLoaded", function() {
    const radioSelectionManager = new RadioSelectionManager();
});
</script>
<script>
    // Get the radio buttons and confirmation message div
    const contactMeRadio = document.getElementById('contact_me');
    const confirmationMessage = document.getElementById('confirmationMessage');

    // Add event listener to listen for changes in radio button selection
    contactMeRadio.addEventListener('change', function() {
        if (this.checked) {
            // If "Yes" is selected, show the confirmation message
            confirmationMessage.style.display = 'block';
        } else {
            // If "No" is selected, hide the confirmation message (optional)
            confirmationMessage.style.display = 'none';
        }
    });
</script>

<script>
$(document).ready(function() {
    // Event listener for change on radio buttons with class 'contact_me_2'
    $('.contact_me_2').change(function() {
       
        // Find the '.confirmationMessage' element within the current row
        var $confirmationMessage = $('.confirmationMessage2');
        
        // Toggle the display of the confirmation message based on radio button state
        if ($(this).is(':checked')) {
            $confirmationMessage.css('display', 'block');
        } else {
            $confirmationMessage.css('display', 'none');
        }
    });
});
</script>