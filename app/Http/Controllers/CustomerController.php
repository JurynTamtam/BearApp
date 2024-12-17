<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
  
class CustomerController extends Controller
{
    public function index()
    {
        // Retrieves all customer records ordered alphabetically by 'name' in ascending order.
        $customer = Customer::orderBy('name', 'ASC')->get();

        // Passes the retrieved customer data to the 'customers.index' view using compact().
        return view('customers.index', compact('customer'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Finds a specific customer record by its ID or throws a 404 error if not found.
        $customer = Customer::findOrFail($id);

        // Passes the retrieved customer data to the 'customers.show' view using compact().
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Finds the specific customer record by its ID or throws a 404 error if not found.
        $customer = Customer::findOrFail($id);

        // Passes the retrieved customer data to the 'customers.edit' view for editing.
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Finds the specific customer record by its ID or throws a 404 error if not found.
        $customer = Customer::findOrFail($id);

        // Validates the input fields: name, address, and contact (all required).
        $request->validate([
            'name' => 'required',       // Name field is required.
            'address' => 'required',    // Address field is required.
            'contact' => 'required'     // Contact field is required.
        ]);

        // Updates the customer record with the validated data.
        $customer->update([
            'name' => $request->input('name'),       // Updates the 'name' field.
            'address' => $request->input('address'), // Updates the 'address' field.
            'contact' => $request->input('contact')  // Updates the 'contact' field.
        ]);

        // Redirects back to the 'customers' route with a success message.
        return redirect()->route('customers')->with('success', 'Customer updated successfully');
    }
    
}