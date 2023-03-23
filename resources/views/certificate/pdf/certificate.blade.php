<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{margin:0;padding:1px}

        body {
            font-family: 'Nunito', sans-serif;
        }

        .logo {
            width: 100%;
        }

        .image-diams {
            width: 80%;
        }
        .qrcode {
            float: left;
        }

        td.data {
            font-weight: bold;
            width: 70%;
            font-size: 3px;
            border-bottom: 0.5px dotted #000;
        }

        td.info {
            width: 27%;
            font-size: 3px;
        }

        table.info {
            border-spacing: 0px;
        }

        .small-text {
            font-size: 3px;
            text-align: left;
        }

        table td, table td * {
            vertical-align: top;
        }

        p {
            font-size: 3px;
            font-weight: bold;
            padding-top: 4px;
        }

        .image-cert {
            float:left;
            display: inline-block;
            width: 30%;
        }
    </style>
</head>
<body>
    {{-- <table style="width: 100%;">
        <tbody>
        <tr style="">
            <td style="width: 10%;"><img src="{{ public_path('images/main_logo.png') }}" class="logo" alt=""></td>
            <td style="width: 40%;" align="center">
                <table style="width: 100%" class="info">
                    <tr width="100%">
                        <td class="info" align="left">Date</td>
                        <td class="data" align="right" >{{  Carbon\Carbon::parse($certificate->created_at)->format('D d M Y') }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">CGL Num</td>
                        <td class="data" align="right">CGL-C-00{{ $certificate->id }}</td>
                    </tr>
                    @if ($dataCertificate->jewel_weight_title != '')
                    <tr width="100%">
                        <td class="info" align="left">{{ $dataCertificate->jewel_weight_title }} Weight</td>
                        <td class="data" align="right">{{ $dataCertificate->jewel_weight }} Grs</td>
                    </tr>
                    @endif
                    @if ($dataCertificate->diamond_weight_title != '')
                    <tr width="100%">
                        <td class="info" align="left">{{ $dataCertificate->diamond_weight_title }} Weight</td>
                        <td class="data" align="right">{{ $dataCertificate->diamond_weight }} Ct.</td>
                    </tr>
                    @endif
                    @if ($dataCertificate->gemstone_weight_title != '')
                    <tr width="100%">
                        <td class="info" align="left">{{ $dataCertificate->gemstone_weight_title }} Weight</td>
                        <td class="data" align="right">{{ $dataCertificate->gemstone_weight }} Ct.</td>
                    </tr>
                    @endif
                </table>
                <table style="width: 100%; padding: 0; font-size: 4px; font-weight: bold;">
                    <tr width="100%" style="">
                        <td>{{ $dataCertificate->text_certificate }}</td>
                    </tr>
                </table>
            </td>
            <td style="width: 10%; text-align: left;">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::size(75)->generate(route('certificatepublic.show', $certificate->id))) !!} ">
            </td>
        </tr>
        <tr>
            <td style="width: 37.5%; background-color: #f0f0f0">
                <p>Center {{ $dataCertificate->center }}</p>
                <table style="width: 100%" class="info">
                    <tr width="100%">
                        <td class="info" align="left">Cut and Shape</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->center_cut_shape }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Total Weight</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->total_weight }} Ct.</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Quantity</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->quantity }} Pcs</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Cut/Pol/Sym</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->Cut }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Measurement</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->Measurement }} mm</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Color</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->Color }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Clarity</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->Clarity }}</td>
                    </tr>
                </table>
                
                @if ($dataCertificate->other_1 != '')
                <p>Other {{ $dataCertificate->other_1 }}</p>
                <table style="width: 100%" class="info">
                    <tr width="100%">
                        <td class="info" align="left">Cut and Shape</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_1_cut_and_shape }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Total Weight</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_1_total_weight }} Ct.</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Quantity</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_1_quantity }} Pcs</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Cut/Pol/Sym</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_1_Cut }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Color</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_1_Color }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Clarity</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_1_Clarity }}</td>
                    </tr>
                </table>
                @endif
            </td>
            <td style="width: 37.5%; background-color: #f0f0f0">
                @if ($dataCertificate->other_2 != '')
                <p>Other {{ $dataCertificate->other_2 }}</p>
                <table style="width: 100%" class="info">
                    <tr width="100%">
                        <td class="info" align="left">Cut and Shape</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_2_cut_and_shape }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Total Weight</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_2_total_weight }} Ct.</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Quantity</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_2_quantity }} Pcs</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Cut/Pol/Sym</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_2_Cut }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Color</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_2_Color }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Clarity</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_2_Clarity }}</td>
                    </tr>
                </table>
                @endif
                @if ($dataCertificate->other_3 != '')
                <p>Other {{ $dataCertificate->other_3 }}</p>
                <table style="width: 100%" class="info">
                    <tr width="100%">
                        <td class="info" align="left">Cut and Shape</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_3_cut_and_shape }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Total Weight</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_3_total_weight }} Ct.</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Quantity</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_3_quantity }} Pcs</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Cut/Pol/Sym</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_3_Cut }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Color</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_3_Color }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">Clarity</td>
                        
                        <td class="data" align="right" >{{ $dataCertificate->other_3_Clarity }}</td>
                    </tr>
                </table>
                @endif
            </td>
            <td style="widht: 25%; vertical-align: middle; backgroud-color: #ffffff">
                <img src="{{ public_path('uploaded_images/'. $imageCertificate[0]) }}" class="logo" alt="">
                @if ($dataCertificate->est_price != '')
                <span class="small-text">{{ $dataCertificate->est_price }}</span>
                @endif
            </td>
        </tr>
        </tbody>
    </table> --}}

    
    <table style="width: 100%;">
        <tbody>
        <tr style="">
            <td style="width: 0%;"><img style="width: 0%;" src="{{ public_path('images/main_logo.png') }}" class="logo" alt=""></td>
            <td style="width: 50%;" align="center">
                <table style="width: 100%" class="info">
                    <tr width="100%">
                        <td class="info" align="left">Date</td>
                        <td class="data" align="right" >{{  Carbon\Carbon::parse($certificate->created_at)->format('D d M Y') }}</td>
                    </tr>
                    <tr width="100%">
                        <td class="info" align="left">CGL Num</td>
                        <td class="data" align="right">CGL-C-00{{ $certificate->id }}</td>
                    </tr>
                    @if ($dataCertificate->jewel_weight_title != '')
                    <tr width="100%">
                        <td class="info" align="left">{{ $dataCertificate->jewel_weight_title }} Weight</td>
                        <td class="data" align="right">{{ $dataCertificate->jewel_weight }} Grs</td>
                    </tr>
                    @endif
                    @if ($dataCertificate->diamond_weight_title != '')
                    <tr width="100%">
                        <td class="info" align="left">{{ $dataCertificate->diamond_weight_title }} Weight</td>
                        <td class="data" align="right">{{ $dataCertificate->diamond_weight }} Ct.</td>
                    </tr>
                    @endif
                    @if ($dataCertificate->gemstone_weight_title != '')
                    <tr width="100%">
                        <td class="info" align="left">{{ $dataCertificate->gemstone_weight_title }} Weight</td>
                        <td class="data" align="right">{{ $dataCertificate->gemstone_weight }} Ct.</td>
                    </tr>
                    @endif
                </table>
                <table style="width: 100%; padding: 0; font-size: 4px; font-weight: bold;">
                    <tr width="100%" style="">
                        <td>{{ $dataCertificate->text_certificate }}</td>
                    </tr>
                </table>
            </td>
            <td style="width: 20%; text-align: left;">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::size(40)->generate(route('certificatepublic.show', $certificate->id))) !!} ">
            </td>
        </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <td style="width: 37.5%; background-color: #f0f0f0">
                    <p>Center {{ $dataCertificate->center }}</p>
                    <table style="width: 100%" class="info">
                        <tr width="100%">
                            <td class="info" align="left">Cut and Shape</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->center_cut_shape }}</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Total Weight</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->total_weight }} Ct.</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Quantity</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->quantity }} Pcs</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Cut/Pol/Sym</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->Cut }}</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Measurement</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->Measurement }} mm</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Color</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->Color }}</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Clarity</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->Clarity }}</td>
                        </tr>
                    </table>
                    
                    @if ($dataCertificate->other_1 != '')
                    <p>Other {{ $dataCertificate->other_1 }}</p>
                    <table style="width: 100%" class="info">
                        <tr width="100%">
                            <td class="info" align="left">Cut and Shape</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_1_cut_and_shape }}</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Total Weight</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_1_total_weight }} Ct.</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Quantity</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_1_quantity }} Pcs</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Cut/Pol/Sym</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_1_Cut }}</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Color</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_1_Color }}</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Clarity</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_1_Clarity }}</td>
                        </tr>
                    </table>
                    @endif
                </td>
                <td style="width: 37.5%; background-color: #f0f0f0">
                    @if ($dataCertificate->other_2 != '')
                    <p>Other {{ $dataCertificate->other_2 }}</p>
                    <table style="width: 100%" class="info">
                        <tr width="100%">
                            <td class="info" align="left">Cut and Shape</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_2_cut_and_shape }}</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Total Weight</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_2_total_weight }} Ct.</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Quantity</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_2_quantity }} Pcs</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Cut/Pol/Sym</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_2_Cut }}</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Color</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_2_Color }}</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Clarity</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_2_Clarity }}</td>
                        </tr>
                    </table>
                    @endif
                    @if ($dataCertificate->other_3 != '')
                    <p>Other {{ $dataCertificate->other_3 }}</p>
                    <table style="width: 100%" class="info">
                        <tr width="100%">
                            <td class="info" align="left">Cut and Shape</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_3_cut_and_shape }}</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Total Weight</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_3_total_weight }} Ct.</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Quantity</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_3_quantity }} Pcs</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Cut/Pol/Sym</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_3_Cut }}</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Color</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_3_Color }}</td>
                        </tr>
                        <tr width="100%">
                            <td class="info" align="left">Clarity</td>
                            
                            <td class="data" align="right" >{{ $dataCertificate->other_3_Clarity }}</td>
                        </tr>
                    </table>
                    @endif
                </td>
                <td style="widht: 25%; vertical-align: middle; backgroud-color: #ffffff">
                    <img src="{{ public_path('uploaded_images/'. $imageCertificate[0]) }}" class="image-diams" alt="">
                    @if ($dataCertificate->est_price != '')
                    <span class="small-text">{{ $dataCertificate->est_price }}</span>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>