<?php

namespace App\Livewire\Admin\Issues;

use App\Models\Customer_issue;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EngineerReport extends Component
{
    public $id;

    public $edit_id;

    public $customer_issue;

    public $engineer_report;

    public $engineer_solution;

    public $engineer_first_name;

    public $engineer_details;

    public $Edit;
    public $modal = false;

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

    public function closeModal()
    {
        $this->modal = false;
    }

    public function edit($id)
    {
        $report = Customer_issue::findOrFail($id);
        $this->edit_id = $id;
        $this->customer_issue = $report->customer_issue;
        $this->engineer_report = $report->engineer_report;
        $this->engineer_solution = $report->engineer_solution;
        $this->modal = true;
    }


    public function update()
    {
        Customer_issue::find($this->edit_id)->update([
            'engineer_report' => $this->engineer_report,
            'engineer_solution' => $this->engineer_solution,
            'engineer_details' => Auth::user()->id,
        ]);

        $this->resetFrom();
        session()->flash('message', 'Your report has been uploaded');
        sleep(2);
        $this->modal = false;

    }


    public function render()
    {


        $datas = Customer_issue::where('engineer_first_name', Auth::user()->email)->get();
        return view('livewire.admin.issues.engineer-report', compact('datas'));
    }
}
