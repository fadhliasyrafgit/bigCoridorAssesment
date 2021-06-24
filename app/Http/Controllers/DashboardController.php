<?php

namespace App\Http\Controllers;

//use App\Models\User;
use App\Models\companies;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $companies = DB::table('companies')->simplePaginate(10);
        return view('home', [
            'companies' => $companies,
        ]);
    }
    public function showCompanyForm()
    {

        return view('newcompany');
    }
    public function newcompany()
    {
        $data = request()->validate([
            'Name' => 'required',
            'Email' => 'nullable|sometimes|email:filter',
            'Logo' => 'nullable|sometimes|image',
            'Website_URL' => 'nullable|sometimes|url',

        ]);

        if (request()->hasFile('Logo')) {

            request('Logo')->store('logo', 'public');

            $data['Logo'] = request('Logo')->hashName();
        }

        companies::create($data);
        return redirect('/home');
    }

    public function destroyCompany($id)
    {
        companies::where('ID', $id)->delete();
        return redirect('/home');
    }
}
