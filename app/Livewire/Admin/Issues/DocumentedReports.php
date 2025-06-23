<?php

namespace App\Livewire\Admin\Issues;

use App\Models\Customer_issue;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DocumentedReports extends Component
{

    public $edit_id;

    public $customer_issue;

    public $engineer_report;

    public $engineer_solution;

    public $engineer_first_name;

    public $user_id;

    public function render()
    {
        $datas = Customer_issue::latest()->paginate(10);

        return view('livewire.admin.issues.documented-reports', compact('datas'));

    }
}
