<div wire:submit.prevent="submit">
    <div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform">


				<div class="form-right">

					<h2>Property Details</h2>
                    <div class="form-row form-row-2" style="margin-bottom:40px" >
                        <select wire:model="place" name="place">
                            <option value="">Select your grant</option>
                            <option value="Street">Free Boiler Grant</option>
                            <option value="District">FTCH Grant</option>
                            <option value="City">Free Isulation Grant</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row form-row-2 " style="margin-bottom:40px" >
                        <select wire:model="benefits_received" name="place">
                            <option value="">Do you receive benefits?</option>
                            <option value="0">yes</option>
                            <option value="1">No</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>

                    <div class="form-row form-row-2" style="margin-bottom:40px">
                        <select wire:model="residential_status" name="place">
                            <option value="place">What is your residential status?</option>
                            <option value="Owner">Home Owner</option>
                            <option value="Renter">Private Tennnat</option>
                            <option value="Other">Council Tennat</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row form-row-2" style="margin-bottom:40px">
                        <select wire:model="boiler_installed_before_2005" name="place">
                            <option value="place">Was your boiler installed before 2005?</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row form-row-2" style="margin-bottom:40px">
                        <select wire:model="gas_meter_installed_before_2022" name="place">
                            <option value="place">Do you have gas meter installed before 2022</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row form-row-2" style="margin-bottom:60px">
                        <select wire:model="heating_method" name="place">
                            <option value="place">How do you keep your home warm?</option>
                            <option value="Gas">Gas</option>
                            <option value="Electric">Electric</option>
                            <option value="Oil">Oil</option>
                            <option value="Other">Other</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
				</div>

                <div class="form-left">
					<h2>Personal Infomation</h2>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" wire:model="first_name" id="first_name" class="input-text" placeholder="Your full name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" wire:model="last_name" id="last_name" class="input-text" placeholder="Your postcode" required>
						</div>
					</div>
                    <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" wire:model="address" id="first_name" class="input-text" placeholder="Your address" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" wire:model="phone_number" id="last_name" class="input-text" placeholder="Your phone number?" required>
						</div>
					</div>
                    <div class="form-row form-row-2">
                        <input type="text" name="last_name" wire:model="email" id="last_name" class="input-text" placeholder="Your Email?" required>
                    </div>
                    {{-- <button class="submit-button" > Submit</button> --}}
                    <button type="submit" class="submit-button">Submit</button>

				</div>
            </form>
		</div>
	</div>

</div>
