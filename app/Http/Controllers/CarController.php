<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Invoice;
use App\Models\Invoiceline;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // save the car to the database
        $car = new Car([
            'license_plate' => $request->get('license_plate'),
            'brand' => $request->get('brand'),
            'model' => $request->get('model'),
            'day_price' => $request->get('price'),
        ]);
        $car->save();

        // redirect to the cars page
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $car = Car::find($id)->update([
            'license_plate' => $request->get('license_plate'),
            'brand' => $request->get('brand'),
            'model' => $request->get('model'),
            'day_price' => $request->get('price'),
        ]);

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect()->route('cars.index');
    }

    public function getRentableCars()
    {
        $cars = Car::all();
        return view('cars.rentable', compact('cars'));
    }

    public function rent($id)
    {
        $car = Car::find($id);
        return view('cars.rent', compact('car'));
    }

    public function makeInvoice(Request $request)
    {
        $invoice = new Invoice([
            'customer_id' => $request->get('customer_id'),
            'employee_id' => $request->get('employee_id'),
            'date' => now(),
        ]);

        $invoice->save();

        $invoiceLine = new InvoiceLine([
            'car_id' => $request->get('car_id'),
            'invoice_id' => $invoice->id,
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date'),
        ]);

        $invoiceLine->save();

        $car = Car::find($request->get('car_id'));
        return view('invoice.customer', compact('car', 'invoice', 'invoiceLine'));
    }

    public function getPdf($carId, $invoiceId, $invoiceLineId)
    {
        $car = Car::find($carId);
        $invoice = Invoice::find($invoiceId);
        $invoiceLine = InvoiceLine::find($invoiceLineId);

        $pdf = PDF::loadView('invoice.example', compact('car', 'invoice', 'invoiceLine'));
        return $pdf->download('invoice.pdf');
    }

    public function getPdfAll()
    {
        $invoices = Invoice::all();
        $pdf = PDF::loadView('invoice.exampleEmployee', compact('invoices'));
        return $pdf->download('invoices.pdf');
    }

    public function getRented()
    {
        $invoices = Invoice::all();
        return view('invoice.employee', compact('invoices'));
    }

}
