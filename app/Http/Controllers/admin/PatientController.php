<?php

namespace   ucare\Http\Controllers\admin;

use ucare\patient;
use ucare\patientDetails;
use ucare\uniqueVoucher;
use ucare\product;
use ucare\PatientProduct;
use ucare\voucher;
use Auth;

use \Datetime;
use Illuminate\Http\Request;
use ucare\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = patient::all();
        return view('admin.patients.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=patient::create($request->all());
        $request->session()->put('PatientID',$data->id);
        return redirect('/patientDetails/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \ucare\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(patient $patient)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ucare\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $patient = patient::findOrFail($id);   
 
        //return $patient;
        return view('admin.patients.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ucare\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $patient = patient::findOrFail($id); 


        $patient->update($request->all());

       echo  $patient."\n";

        return  $request;

        //return redirect('/patient/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ucare\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(patient $patient)
    {
        //
    }


    public function viewVouchers($id){



       // $patient_vouchers = uniqueVoucher::findOrFail();

        $benefits = DB::table('unique_vouchers')->where('patientId', '=', $id)->get();
      
        $patient_vouchers =  $benefits->all();

 
        
        //return $benefits;

        return view('admin.uniqueVoucher.index',compact('patient_vouchers'));
        
        //$benefits = DB::table('benefits')->where('ProductID', '=', $id)->get();
      
        //return view('admin.products.vouchers',compact('benefits','product'));

          /*
        echo $patient->created_at ."\n";

        $dateTime = new DateTime(date("Y-m-d"));

        $result = $dateTime->format('Y-m-d');

        $num = 5;
        echo $result . "\n";

        echo "Adding 2 months \n";

        $newdate =   $dateTime->modify('+'.$num.' month');   

        echo   $newdate->format('Y-m-d') ."\n";

        */
      }


      public function addProduct( $patient_id)
      {
          $products = product::all();

          return view('admin.patients.addProduct',compact('products','patient_id'));
      }

      

      
      public function storeProduct( Request $request, $patient_id)
      {
          
            //createa patient product

            $product_id =  $request->get('product_id');


            
            $interval = 0;


            $patientProduct = new PatientProduct();
            $patient_vouchers = new uniqueVoucher();

            $patientProduct->product_id = $product_id;
            $patientProduct->patient_id = $patient_id;
            //$patientProduct->save();

            
            $benefits = DB::table('benefits')->where('ProductID', '=', $product_id)->get();

            
            //return $benefits ;
            
            $currentDateTime = new DateTime(date("Y-m-d H:i:s"));

            $currentDate = $currentDateTime->format('Y-m-d');

           // $voucherStartDate = $currentDate->modify('+'.$num.' month');   
    
       

            foreach($benefits as $b){
                $patient_vouchers->productID = $product_id;
                $patient_vouchers->patientId = $patient_id;
                $patient_vouchers->voucherStartDate = $currentDateTime->modify('+'.(12 / $b->intervals).' month')->format('Y-m-d');
                $patient_vouchers->voucherNumber  = $b->VoucherID;
               // $patient_vouchers->employeeId = Auth::user()->id;
                $patient_vouchers->voucherName = voucher::findOrFail($b->VoucherID)->Name;

                if($patient_vouchers->voucherStartDate <=   $currentDate ){

                    $patient_vouchers->active = 1; 
                }else{
                    $patient_vouchers->active = 0; 
                }
                
                echo  $patient_vouchers;


                $patient_vouchers->save();
            }           

            $patient_vouchers = $patient_vouchers->all();          


          return view('admin.uniqueVoucher.index',compact('patient_vouchers'));

          

      }

      
}
