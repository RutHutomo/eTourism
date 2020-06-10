							<div class="contact_form_section">
								<div class="container">
									<div class="row">
										<div class="col">

											<!-- Contact Form -->
											<div class="contact_form_container">
												<div class="contact_title text-center">Form Complaint</div>
												<form action="<?=base_url('simpan_complaint')?>" method="POST" id="form_pengaduan" class="contact_form text-center">
													<input type="hidden" name="id" id="id" value="<?=$this->uri->segment(3)?>" id="contact_form_name" class="contact_form_name input_field" placeholder="Fullname" required="required" data-error="Name is required.">
													<input type="text" name="fullname" id="contact_form_name" class="contact_form_name input_field" placeholder="Fullname" required="required" data-error="Name is required.">
													<input type="email" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" name="email" required="required" data-error="Email is required.">
													<input type="text" name="subject" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject Complaint" required="required" data-error="Subject is required.">
													<textarea id="contact_form_message" name="isi" class="text_field contact_form_message" name="message" rows="4" placeholder="Complaint Message" required="required" data-error="Please, write us a message."></textarea>


													<button type="submit" class="form_submit_button button trans_200">send complaint <i class="fa fa-arrow-right"></i></button>
												</form>
											</div>

										</div>
									</div>
								</div>
							</div>