<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class CompanyController extends Controller
{
    public function getCompanies()
    {
        $companies = Company::all();

        if (REQ::is('api/*'))
            return response()->json(['Company' => $companies], 201);
        //for web route
        return view('welcome',);
    }

    public function getCompany($companyId)
    {
        $Company = Company::find($companyId);

        if (!$Company) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Company not found']);
        }

        if (REQ::is('api/*'))
            return response()->json(['Company' => $Company]);

        ///web route
        return view();
    }

    public function postCompany(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }
        $Company = new Company();
        $Company->name = $request->input('name');
        $Company->description = $request->input('description');
        $Company->save();
        if (REQ::is('api/*'))
            return response()->json(['Company' => $Company]);
        //for web route
        return view();
    }

    public function putCompany(Request $request, $companyId)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $Company = Company::find($companyId);

        if (!$Company) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Company not found']);
        }

        $Company->update([
            'description' => $request->input('description'),
        ]);

        if (REQ::is('api/*'))
            return response()->json(['Company' => $Company]);

        //for web route
        return view();
    }

    public function deleteCompany($companyId)
    {
        $Company = Company::find($companyId);

        if (!$Company) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Company not found']);
        }

        $Company->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Company deleted successfully']);

        ///web route
        return view();
    }
}
