<?php

namespace App\Http\Controllers;

use App\Models\Label;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('label.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('label.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validation des données
         $validated = $request->validate([
            'customer_id' => 'required',
        ]);

        // Save to database
        $label = Label::create([
            'label_num' => '',
            'customer_id' => $request->customer_id,
            'data' => json_encode($request->except(['_token', 'customer_id'])),
        ]);
        
        $year = date('Y');
        $month = date('m');
        $day = date('d');
        // dd(intval($month));

        $label = Label::find($label->id);
        $label->label_num = $year.$month.$day.$label->id;
        $label->save();

        return redirect()->route('labels.index');
    }


    public function showLabel($id)
    {
        $label = Label::find($id);
        $dataLabel = json_decode($label->data);

        // inch (convert millimeter to pt)
        $print_size = array(0,0, 85.039370079, 198.42519685);
        // view()->share('certificate', $certificate);
        $pdf = PDF::loadView('label.pdf.label', compact('label', 'dataLabel'))->setPaper($print_size, 'landscape');
        // download PDF file with download method
        return $pdf->download('CGL-L-'.$label->label_num.'.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $label = Label::find($id);
        $labelData = json_decode($label->data);

        return view('label.edit', compact('label', 'labelData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $label = Label::find($id);
        $label->data = json_encode($request->except(['_token', 'customer_id']));
        $label->save();

        return redirect()->route('labels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $label = Label::find($id);
        $label->delete();

        return redirect()->route('labels.index');
    }
}
