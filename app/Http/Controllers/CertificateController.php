<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\EmailCertificate;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PDF;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('certificate.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificate.create');
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

        // Vérification des données
        $images = ($request->has('images')) ? $this->uploadFiles($request->images) : '';
        // $qrcode = ($request->has('qrcode')) ? true : false ;
        // $send_by_email_certificat = ($request->has('send-by-email')) ? true : false;

        // Creation du certificat
        $certificate = Certificate::create([
            'customer_id' => $request->customer_id,
            'images' => json_encode($images),
            'data' => json_encode($request->except(['_token', 'images', 'customer_id', 'send-by-email', 'qrcode'])),
            // 'qrcode' => $qrcode,
            'qrcode' => true,
        ]);

        // Envoi du mail au client si envoi par mail demandé
        // if($send_by_email_certificat) {
        //     Mail::to($certificate->customer->email)->send(new EmailCertificate($certificate));
        // }

        return redirect()->route('certificates.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificate = Certificate::find($id);
        return view('certificate.show');
    }

    
    /**
     * Display Label with data per certficate
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showLabel($id)
    {
        $certificate = Certificate::find($id);

        // inch (convert millimeter to inch)
        $print_size = array(0,0,2000,3500);
        $qrcode = QrCode::size(50)->generate(route('certificates.showLabel', $certificate->id));
        // view()->share('certificate', $certificate);
        $pdf = PDF::loadView('certificate.pdf.label', compact('certificate', 'qrcode'))->setPaper($print_size, 'landscape');
        // download PDF file with download method
        return $pdf->download('CGL-C-000'.$certificate->id.'.pdf');
    }

    /**
     * Display Label with data per certficate
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCertficate($id)
    {
        $certificate = Certificate::find($id);
        $dataCertificate = json_decode($certificate->data);
        $imageCertificate = json_decode($certificate->images);

        // inch (convert millimeter to inch)
        $print_size = array(0,0,210,400);
        // view()->share('certificate', $certificate);
        $pdf = PDF::loadView('certificate.pdf.certificate', compact('certificate', 'dataCertificate', 'imageCertificate'))->setPaper($print_size, 'landscape');
        // download PDF file with download method
        return $pdf->download('CGL-C-000'.$certificate->id.'.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('certificate.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certificate = Certificate::find($id);
        
        $certificate->delete();

        return redirect()->route('certificates.index');
    }

    
    /**
     * uploadFiles in public path
     *
     * @param  mixed $data
     * @return void
     */
    private function uploadFiles($data)
    {

        $files = [];

        foreach ($data as $key => $image) {
            $filename = time() . '-'. $key . '.'. $image->extension();
    
            $image->move(public_path('uploaded_images'), $filename);
            $files[$key] = $filename;
        }

        return $files;
    }
}
