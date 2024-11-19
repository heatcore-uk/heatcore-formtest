{{-- <div>
    <div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform">


				<div class="form-right">

					<h2>Property Details</h2>
                    <div class="form-row form-row-2" style="margin-bottom:40px" >
                        <select name="place">
                            <option value="place">Select your grant</option>
                            <option value="Street">Street</option>
                            <option value="District">District</option>
                            <option value="City">City</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row form-row-2 " style="margin-bottom:40px" >
                        <select name="place">
                            <option value="place">Do you receive benefits?</option>
                            <option value="Street">Street</option>
                            <option value="District">District</option>
                            <option value="City">City</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>

                    <div class="form-row form-row-2" style="margin-bottom:40px">
                        <select name="place">
                            <option value="place">What is your residential status?</option>
                            <option value="Street">Street</option>
                            <option value="District">District</option>
                            <option value="City">City</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row form-row-2" style="margin-bottom:40px">
                        <select name="place">
                            <option value="place">Was your boiler installed before 2005?</option>
                            <option value="Street">Street</option>
                            <option value="District">District</option>
                            <option value="City">City</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row form-row-2" style="margin-bottom:40px">
                        <select name="place">
                            <option value="place">Do you have gas meter installed before 2022</option>
                            <option value="Street">Street</option>
                            <option value="District">District</option>
                            <option value="City">City</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row form-row-2" style="margin-bottom:60px">
                        <select name="place">
                            <option value="place">How do you keep your home warm?</option>
                            <option value="Street">Street</option>
                            <option value="District">District</option>
                            <option value="City">City</option>
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
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="Your full name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Your postcode" required>
						</div>
					</div>
                    <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="Your address" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Your phone number?" required>
						</div>
					</div>
                    <div class="form-row form-row-2">
                        <input type="text" name="last_name" id="last_name" class="input-text" placeholder="Your Email?" required>
                    </div>
                    <button class="submit-button" > Submit</button>

				</div>
            </form>
		</div>
	</div>

</div> --}}
{{-- <div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="form-left">
            <h2>Personal Information</h2>
            <div class="form-group">
                <div class="form-row form-row-1">
                    <input type="text" wire:model="first_name" class="input-text" placeholder="Your full name" required>
                    @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-row form-row-2">
                    <input type="text" wire:model="last_name" class="input-text" placeholder="Your postcode" required>
                    @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-row form-row-1">
                    <input type="text" wire:model="address" class="input-text" placeholder="Your address" required>
                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-row form-row-2">
                    <input type="text" wire:model="phone_number" class="input-text" placeholder="Your phone number" required>
                    @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="form-row form-row-2">
                <input type="text" wire:model="email" class="input-text" placeholder="Your Email" required>
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="form-right">
            <h2>Property Details</h2>
            <div class="form-row form-row-2">
                <select wire:model="place" class="form-control">
                    <option value="">Select your grant</option>
                    <option value="Street">Street</option>
                    <option value="District">District</option>
                    <option value="City">City</option>
                </select>
                @error('place') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-row form-row-2">
                <select wire:model="benefits_received" class="form-control">
                    <option value="">Do you receive benefits?</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                @error('benefits_received') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-row form-row-2">
                <select wire:model="residential_status" class="form-control">
                    <option value="">What is your residential status?</option>
                    <option value="Owner">Owner</option>
                    <option value="Renter">Renter</option>
                    <option value="Other">Other</option>
                </select>
                @error('residential_status') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-row form-row-2">
                <select wire:model="boiler_installed_before_2005" class="form-control">
                    <option value="">Was your boiler installed before 2005?</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                @error('boiler_installed_before_2005') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-row form-row-2">
                <select wire:model="gas_meter_installed_before_2022" class="form-control">
                    <option value="">Do you have a gas meter installed before 2022?</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                @error('gas_meter_installed_before_2022') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-row form-row-2">
                <select wire:model="heating_method" class="form-control">
                    <option value="">How do you keep your home warm?</option>
                    <option value="Gas">Gas</option>
                    <option value="Electric">Electric</option>
                    <option value="Oil">Oil</option>
                    <option value="Other">Other</option>
                </select>
                @error('heating_method') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <button type="submit" class="submit-button">Submit</button>
    </form>
</div> --}}
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
                            <option value="">What is your residential status?</option>
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
                            <option value="">Was your boiler installed before 2005?</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row form-row-2" style="margin-bottom:40px">
                        <select wire:model="gas_meter_installed_before_2022" name="place">
                            <option value="">Do you have gas meter installed before 2022</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        <span class="select-btn">
                              <i class="zmdi zmdi-chevron-down"></i>
                        </span>
                    </div>
                    <div class="form-row form-row-2" style="margin-bottom:60px">
                        <select wire:model="heating_method" name="place">
                            <option value="">How do you keep your home warm?</option>
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
                    @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show mr-5 ml-5" role="alert">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                    {{-- <button class="submit-button" > Submit</button> --}}
                    <button type="submit" class="submit-button">Submit</button>

				</div>
            </form>
		</div>
	</div>
</div>
