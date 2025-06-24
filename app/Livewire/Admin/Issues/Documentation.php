<?php

namespace App\Livewire\Admin\Issues;

use App\Models\Customer_issue;
use App\Models\User;
use Livewire\Component;

class Documentation extends Component
{
    public $id;

    public $edit_id;

    public $customer_issue;

    public $engineer_report;

    public $engineer_solution;

    public $engineer_first_name;

    public $engineer_details;

    public $Edit;

    protected $rules = [
        'customer_issue' => 'required',
        //        'engineer_first_name' => 'required'
    ];

    public function resetFrom()
    {
        $this->customer_issue = '';
        $this->engineer_report = '';
        $this->engineer_solution = '';
        $this->engineer_first_name = '';
        $this->engineer_details = '';

    }

    public function create()
    {
        $this->validate();
        $create = Customer_issue::create([
            'customer_issue' => $this->customer_issue,
            'engineer_first_name' => $this->engineer_first_name,
        ]);
        $this->resetFrom();
        session()->flash('message', 'Complain uploaded');

    }

    public function delete($id)
    {
        Customer_issue::findOrFail($id)->delete();
        session()->flash('message', 'Complain deleted successfully');

    }

    public function render()
    {
        $datas = Customer_issue::get();
        $engineers = User::where('role', 'engineer')->Orwhere('role', 'admin')->Orwhere('role', 'super_admin')->get();

        return view('livewire.admin.issues.documentation', compact('datas', 'engineers'));
    }
}
