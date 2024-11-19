<?php

namespace App\Livewire;
use App\Models\HcForm;
use Livewire\Component;

// use Illuminate\Http\Request;
class HeatcoreForm extends Component
{
    public $first_name, $last_name, $address, $phone_number, $email;
    public $place, $benefits_received, $residential_status, $boiler_installed_before_2005;
    public $gas_meter_installed_before_2022, $heating_method;
    public $show_message = false;

    public function submit()
    {
        // $this->validate();
        HcForm::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'address' => $this->address,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'place' => $this->place,
            'benefits_received' => $this->benefits_received,
            'residential_status' => $this->residential_status,
            'boiler_installed_before_2005' => $this->boiler_installed_before_2005,
            'gas_meter_installed_before_2022' => $this->gas_meter_installed_before_2022,
            'heating_method' => $this->heating_method,
        ]);
        session()->flash('message', 'Thank you for Applying');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.heatcore-form');
    }
}


// {
//     public function render()
//     {
//         return view('livewire.heatcore-form');
//     }
// }
