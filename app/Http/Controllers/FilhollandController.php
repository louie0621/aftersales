<?php

namespace App\Http\Controllers;

use App\Models\Filholland;
use Illuminate\Http\Request;

class FilhollandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutus()
    {
        //
        return view('aboutus');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function branches()
    {
        //
        return view('branches');
    }
    public function products()
    {
        //
        return view('products');
    }
    
    public function agproducts()
    {
        //
        return view('agproducts.agproducts');
    }
    public function agproductTT335()
    {
        //
        return view('agproducts.ag-product-TT3-35');
    }
    public function agproductTT350()
    {
        //
        return view('agproducts.ag-product-TT3-50');
    }
    public function agproductE9010()
    {
        //
        return view('agproducts.ag-product-E9010');
    }
    public function agproductTT475()
    {
        //
        return view('agproducts.ag-product-TT4-75');
    }
    public function agproductTS6120()
    {
        //
        return view('agproducts.ag-product-TS6-120');
    }
    public function agproductTS6125()
    {
        //
        return view('agproducts.ag-product-TS6-125');
    }
    public function agproductTS6140()
    {
        //
        return view('agproducts.ag-product-TS6-140');
    }
    public function agproductMAXXUM140()
    {
        //
        return view('agproducts.ag-product-MAXXUM140');
    }
    public function agproductPUMA155()
    {
        //
        return view('agproducts.ag-product-PUMA155');
    }
    public function agproductA4000()
    {
        //
        return view('agproducts.ag-product-A4000');
    }
    public function agproductA8010andA8810()
    {
        //
        return view('agproducts.ag-product-A8010-and-A8810');
    }
    public function agproductJXSeries()
    {
        //
        return view('agproducts.ag-product-JX_Series');
    }
    

    public function ceproducts()
    {
        //
        return view('ceproducts.ce-products');
    }
    public function ceproductSV185()
    {
        //
        return view('ceproducts.ce-product-SV185');
    }
    public function ceproductSR200()
    {
        //
        return view('ceproducts.ce-product-SR200');
    }
    public function ceproductSR130()
    {
        //
        return view('ceproducts.ce-product-SR130');
    }
    public function ceproductCX210C()
    {
        //
        return view('ceproducts.ce-product-CX210C');
    }
    public function ceproductCX130C()
    {
        //
        return view('ceproducts.ce-product-CX130C');
    }
    public function ceproductCX75SR()
    {
        //
        return view('ceproducts.ce-product-CX75SR');
    }
    public function ceproduct2050M()
    {
        //
        return view('ceproducts.ce-product-2050M');
    }
    public function ceproduct1150L()
    {
        //
        return view('ceproducts.ce-product-1150L');
    }
    public function ceproduct1107EXD()
    {
        //
        return view('ceproducts.ce-product-1107EX-D');
    }
    public function ceproduct845B()
    {
        //
        return view('ceproducts.ce-product-845B');
    }
    public function ceproduct821F()
    {
        //
        return view('ceproducts.ce-product-821F');
    }
    public function ceproduct752EX()
    {
        //
        return view('ceproducts.ce-product-752EX');
    }
    public function ceproduct570ST()
    {
        //
        return view('ceproducts.ce-product-570ST');
    }
    public function ceproduct521F()
    {
        //
        return view('ceproducts.ce-product-521F');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactus()
    {
        //
        return view('contacts');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filholland  $filholland
     * @return \Illuminate\Http\Response
     */
    public function show(Filholland $filholland)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filholland  $filholland
     * @return \Illuminate\Http\Response
     */
    public function edit(Filholland $filholland)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filholland  $filholland
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filholland $filholland)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filholland  $filholland
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filholland $filholland)
    {
        //
    }
}
