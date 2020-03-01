<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Faktura;
use App\Nabywca;
use App\Sprzedawca;
use App\User;
use Auth;
class CreateInvoiceController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function create()
  {
    return view('createinvoice');
    }
   public function store(Request $request)
   {
        $this -> validate($request, [
            'typ_faktury' =>'required|max:255',           
        ]);
        $create_sprzedawca = new Sprzedawca();
        $create_sprzedawca ->sprzedawca=$request->sprzedawca;
        $create_sprzedawca ->nip_sprzedawca=$request->nip_sprzedawca;
        $create_sprzedawca ->ulica_sprzedawca=$request->ulica_sprzedawca;
        $create_sprzedawca ->miasto_spzedawca=$request->miasto_spzedawca;
        $create_sprzedawca ->kod_pocztowy_sprzedawca=$request->kod_pocztowy_sprzedawca;    
        
        $create_nabywca = new Nabywca();
        $create_nabywca ->nabywca=$request->nabywca;
        $create_nabywca ->nip_nabywca=$request->nip_nabywca;
        $create_nabywca ->ulica_nabywca=$request->ulica_nabywca;
        $create_nabywca ->miasto_nabywca=$request->miasto_nabywca;
        $create_nabywca ->kod_pocztowy_nabywca=$request->kod_pocztowy_nabywca;

        $create_invoice = new Faktura();
        $invoice_id_sprzedawca = new Sprzedawca();
        $invoice_id_nabywca = new Nabywca();
        $create_invoice->typ_faktury=$request->typ_faktury;
        $create_invoice->data_wystawienia=$request->data_wystawienia;
        $create_invoice->mejsce_wystawienia=$request->mejsce_wystawienia;
        $create_invoice->data_sprzedazy=$request->data_sprzedazy;
        $create_invoice->towar_usluga=$request->towar_usluga;
        $create_invoice->jm=$request->jm;
        $create_invoice->ilosc=$request->ilosc;
        $create_invoice->cena_netto=$request->cena_netto;
        $create_invoice->watosc_netto=$request->watosc_netto;
        $create_invoice->stawka_vat=$request->stawka_vat;
        $create_invoice->kwota_vat=$request->kwota_vat;
        $create_invoice->wartosc_brutto=$request->wartosc_brutto;
        $create_invoice->status=$request->status;    
        $create_invoice->sposob_platnosci=$request->sposob_platnosci;
        $create_invoice->numer_konta=$request->numer_konta;
        $create_invoice->termin_platnosci=$request->termin_platnosci;        
        $create_invoice->user()->associate(Auth::id());  
        DB::transaction(function () use ($create_sprzedawca, $create_nabywca, $create_invoice) {
          $create_sprzedawca->save();
          $create_nabywca->save();
          $create_invoice->nabywca()->associate($create_nabywca);
          $create_invoice->sprzedawca()->associate($create_sprzedawca);
          $create_invoice->save();
      }, 5);
            return redirect('showinvoice');
                  
    } 

public function show($id_faktury='id',$typ_faktury='typ_faktury',$data_wystawienia='data_wystawienia',$wartosc_brutto='wartosc_brutto',$status='status',$sposob_platnosci='sposob_platnosci', $data_sprzedazy='data_sprzedazy' )
{
  $fakturas =  Faktura::all($id_faktury,$typ_faktury,$data_wystawienia,$data_sprzedazy,$wartosc_brutto,$status,$sposob_platnosci);
  return view('showinvoice')->with(['fakturas' => $fakturas]);
}
public function destroy($id_faktury='id',$id='user_id')
{
  $fakturas = Faktura::findOrFail($id);
  if($fakturas->user->id != Auth::id()){
    return abort(403);
  }else{
    $faktura = Faktura::findOrFail($id_faktury)->delete();
        return redirect('/showinvoice');
  }
}
public function edit($id = 'user_id'){
  $faktura = Faktura::findOrFail($id);
  if($faktura->user->id != Auth::id()){
    return abort(403);
  }else{
  $fakturas = Faktura::all();
  $sprzedawca = Faktura::with('sprzedawca')->get();
  $nabywca = Faktura::with('nabywca')->get();
  return view('editinvoice')->with('fakturas',$fakturas, 'sprzedawca',$sprzedawca, 'nabywca', $nabywca);
  }
}
public function update(Request $request, $id='id'){

  $update_invoice = Faktura::find($id);
  $update_sprzedawca = Faktura::with('sprzedawca')->get();
  $update_nabywca = Faktura::with('nabywca')->get();

$update_sprzedawca ->sprzedawca=$request->input('sprzedawca');
$update_sprzedawca ->nip_sprzedawca=$request->input('nip_sprzedawca');
$update_sprzedawca ->ulica_sprzedawca=$request->input('ulica_sprzedawca');
$update_sprzedawca ->miasto_spzedawca=$request->input('miasto_sprzedawca');
$update_sprzedawca ->kod_pocztowy_sprzedawca=$request->input('kod_pocztowy_sprzedawca');    


$update_nabywca ->nabywca=$request->input('nabywca');
$update_nabywca ->nip_nabywca=$request->input('nip_nabywca');
$update_nabywca ->ulica_nabywca=$request->input('ulica_nabywca');
$update_nabywca ->miasto_nabywca=$request->input ('miasto_nabywca');
$update_nabywca ->kod_pocztowy_nabywca=$request->input('kod_pocztowy_nabywca');

$update_invoice->typ_faktury=$request->input('typ_faktury');
$update_invoice->data_wystawienia=$request->input('data_wystawienia');
$update_invoice->mejsce_wystawienia=$request-> input('mejsce_wystawienia');
$update_invoice->data_sprzedazy=$request->input('data_sprzedazy');
$update_invoice->towar_usluga=$request-> input('towar_usluga');
$update_invoice->jm=$request->input('jm');
$update_invoice->ilosc=$request->input('ilosc');
$update_invoice->cena_netto=$request->input('cena_netto');
$update_invoice->watosc_netto=$request-> input('watosc_netto');
$update_invoice->stawka_vat=$request-> input('stawka_vat');
$update_invoice->kwota_vat=$request->input ('kwota_vat');
$update_invoice->wartosc_brutto=$request-> input('wartosc_brutto');
$update_invoice->status=$request->input('status');    
$update_invoice->sposob_platnosci=$request->input('sposob_platnosci');
$update_invoice->numer_konta=$request->input('numer_konta');
$update_invoice->termin_platnosci=$request->input('termin_platnosci');        
$update_invoice->save();
$update_sprzedawca->save();
$update_invoice->nabywca()->associate($update_nabywca);
$update_invoice->sprzedawca()->associate($update_sprzedawca);
$update_nabywca->save();

    return redirect('showinvoice');
          
} 
  }

