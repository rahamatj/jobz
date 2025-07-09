<?php

namespace App\Livewire\JobListing;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\JobListing;

class CreateJobListing extends Component
{
    public $categories = [];
    public $category_id;
    public $title;
    public $company;
    public $email;
    public $phone_number;
    public $website;
    public $applicationDeadline;
    public $vacancy;
    public $experience;
    public $published;
    public $salary;
    public $requirements;
    public $responsibilities;
    public $skills;
    public $benefits;
    public $work_place;
    public $employment_status;
    public $company_address;


    public function mount()
    {
        $this->categories = Category::all();

        $this->applicationDeadline = now()->format("Y-m-d");
        $this->published = now()->format("Y-m-d");
    }

    protected $listeners = ['updateRequirements'];

    public function updateRequirements($value)
    {
        $this->requirements = $value;
    }

    public function render()
    {
        return view('livewire.job-listing.create-job-listing')
            ->layout('components.layouts.admin');
    }

    public function save(Request $request)
    {
        JobListing::create($this->all());
    }
}
