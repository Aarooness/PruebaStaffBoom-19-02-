<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\customers;
use Illuminate\Http\Request;

class invoiceController extends Controller
{
    public function index()
    {
        
        $tasks = Task::with('customers')->get(); //  tareas de la base de datos
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:id_cliente,productos,total',
            
        ]);

        Task::create([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Factura creada correctamente.');
    }


    public function create(){
        $customers=Customers::all();
        return view('tasks.create',compact('customers'));
        //$customer=customer::all();
        //return view('tasks.create',compact('customers'));
    }

    


    public function show(Task $task)
    {
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return response()->json($task, 200);
    }

    //public function filter(Request $request){

        //$customerName= $request ->input('name');
      //  $task=<Invoice:wherehas></Invoice:wherehas>
    //}    

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204);
    }
}