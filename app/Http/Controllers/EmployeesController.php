<?php

namespace App\Http\Controllers;


use App\Models\companies;
use App\Models\employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($company)
    {
        $employees = employees::where('Company', $company)->simplePaginate(10);
        $companies = companies::find($company);
        return view('employees', [
            'companies' => $companies,
            'employees' => $employees,
        ]);
    }
    public function showEmployeeForm($id)
    {
        $companies = companies::find($id);
        return view('newemployee', [
            'companies' => $companies,
        ]);
    }
    public function newemployee()
    {
        $data = request()->validate([
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Company' => 'required',
            'Email' => 'nullable|sometimes|email:filter',
            'Phone' => 'nullable|sometimes|integer|',

        ]);

        employees::create($data);
        return redirect('/employees/'.$data['Company']);
    }
    public function destroyEmployee($id)
    {
        $employees = employees::where('ID', $id)->get();
        $companyID = $employees[0]['Company'];
        $companies = companies::find($companyID);
        employees::where('ID', $id)->delete();
        return redirect('/employees/'.$companies['ID']);
    }
}
