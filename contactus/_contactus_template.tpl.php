<?php
echo $obj_contactus->body[$obj_contactus->language][0]['value'];
?>
<?php  
	$arg = arg();	
	if($arg[1] == 'successful') echo '<div id="notice"><p style="color:red">'.t('Your email has been successfully sent.').'</p></div>';
?>
<div class="wrapForm">
	<form method="post" action="<?php print url('contact-us/save');?>" class="contactForm" id="contactForm">
		<div class="innerFrm">
	    	<div class="contactCont">
	        	<ul>
	            	<li>
	                	<label for="txtLastName"><?php echo t('Last Name');?>: <strong>*</strong></label>
	                    <input type="text" value="" name="txtLastName" id="txtLastName" />
	                </li>
	                <li>
	                	<label for="txtMiddleName"><?php echo t('Middle Name');?>:</label>
	                    <input type="text" value="" name="txtMiddleName" id="txtMiddleName" />
	                </li>
	                <li>
	                	<label for="txtFirstName"><?php echo t('First Name');?>: <strong>*</strong></label>
	                    <input type="text" value="" name="txtFirstName" id="txtFirstName" />
	                </li>
	                <li>
	                	<label for="txtCompany"><?php echo t('Company');?>: </label>
	                    <input type="text" value="" name="txtCompany" id="txtCompany" />
	                </li>
	                <li>
	                	<label for="txtAddress"><?php echo t('Address');?>: </label>
	                    <input type="text" value="" name="txtAddress" id="txtAddress" />
	                </li>
	                <li>
	                	<label for="txtCity"><?php echo t('City');?>: </label>
	                    <input type="text" value="" name="txtCity" id="txtCity" />
	                </li>
	                <li>
	                	<label for="txtNationaty"><?php echo t('Nationaty');?>: </label>
	                    <input type="text" value="" name="txtNationaty" id="txtNationaty" />
	                </li>
	                <li>
	                	<label for="txtEmail"><?php echo t('Email');?>: <strong>*</strong></label>
	                    <input type="text" value="" name="txtEmail" id="txtEmail" />
	                </li>
	                <li>
	                	<label for="txtPhone"><?php echo t('Phone');?>: </label>
	                    <input type="text" value="" name="txtPhone" id="txtPhone" />
	                </li>
	            </ul>
	            <ul class="last">
	            	<li>
	                	<label for="txtTitle"><?php echo t('Subject');?>: <strong>*</strong></label>
	                    <input type="text" value="" name="txtTitle" id="txtTitle" />
	                </li>
	                <li>
	                	<label for="txtContent"><?php echo t('Content');?>: <strong>*</strong></label>
	                   	<textarea rows="1" cols="1" name="txtContent" id="txtContent"></textarea>
	                </li>
	            </ul>
	            
	            <ul class="btnList">
	            	<li class="floatL"><span><?php echo t('Information');?> (<strong>*</strong>) <?php echo t('Required');?>.</span></li>
	            	<li>
	                	<button class="btn btnSubmit" type="submit" title="<?php echo t('Send');?>">
	                    	<span>
	                            <span>
	                                <strong class="uiTitle initTitle-13"><?php echo t('Send');?></strong>
	                            </span>
	                        </span>
	                    </button>
	                </li>
	                <li>
	                	<button class="btn btnReset" type="reset" title="<?php echo t('Reset');?>">
	                    	<span>
	                            <span>
	                                <strong class="uiTitle initTitle-14"><?php echo t('Reset');?></strong>
	                            </span>
	                        </span>
	                    </button>
	                </li>
	            </ul>
	        </div>
	    </div>
	</form>
</div>

