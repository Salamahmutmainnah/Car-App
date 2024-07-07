<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::all();
        return view('loans.index', compact('loans'));
    }


    public function create()
    {
        $cars = Car::all();
        return view('loans.create', compact('cars'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'car_id' => 'required',
            'user' => 'required',
            'loan_date' => 'required',
            'return_date' => 'required',
            'total_cost' => 'required',
            'status' => 'required',
        ]);

        Loan::create($validatedData);

        return redirect('/loans')->with('success', 'Loan added successfully!');
    }





    public function edit(Loan $loan)
    {
        $cars = Car::all();
        return view('loans.edit', compact('loan', 'cars'));
    }

    public function update(Request $request, Loan $loan)
{
    $validatedData = $request->validate([
        'car_id' => 'required',
        'user' => 'required',
        'loan_date' => 'required',
        'return_date' => 'required',
        'total_cost' => 'required',
        'status' => 'required',

    ]);

    $loan->update($validatedData);

    return redirect('/loans')->with('success', 'Loan updated successfully!');
}

    public function destroy(Loan $loan)
    {
        $loan->delete();
        return redirect('/loans')->with('success', 'Loan deleted successfully!');
    }
}
