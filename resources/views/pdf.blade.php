<style>
table, tr, td, th{
  border: 1px solid black;
}
hr{
    color:black;
}
table{
    font-family:sans-serif;
    color:black;
    font-size:16px;
}
div{
    font-family:sans-serif;
    color:black;
    font-size:18px;
}
</style>
<!DOCTYPE html>
<html>

@foreach ($fakturas as $faktura)
<body>
    <div>Typ fakatury:<bold>{{$faktura->typ_faktury}}</bold></div>

    <div>Data wystawienia:<bold>{{$faktura->data_wystawienia}}</bold></div>

<div>Mejsce wystawienia:<bold>{{$faktura->sprzedawca->miasto_spzedawca}}</bold></div>
<br></br>
<hr>
<br></br>
<div>Sprzedawca:</div>
<div><bold>{{$faktura->sprzedawca->sprzedawca}}</bold></div>
<div>Nip: {{$faktura->sprzedawca->nip_sprzedawca}}</div>
<div>{{$faktura->sprzedawca->ulica_sprzedawca}}</div>
<div>  {{$faktura->sprzedawca->miasto_spzedawca}} {{$faktura->sprzedawca->kod_pocztowy_sprzedawca}} </div>
<br></br>
<div>Nabywca:</div>
<div><bold>{{$faktura->nabywca->nabywca}}</bold></div>
<div>Nip: {{$faktura->nabywca->nabywca}}</div>
<div>{{$faktura->nabywca->ulica_nabywca}}</div>
<div>  {{$faktura->nabywca->miasto_nabywca}} {{$faktura->nabywca->kod_pocztowy_nabywca}} </div>
<br></br>
<table>
<thead>
<tr>
<th>Nazwa towaru lub uslugi</th>
<th>Jm</th>
<th>Ilosc</th>
<th>Cena netto</th>
<th>Wartosc netto</th>
<th>Stawka vat</th>
<th>Kwota vat</th>
<th>Wartosc brutto</th>
</tr>
</thead>
<tbody>
<tr>
<td>{{$faktura->towar_usluga}}</td>
<td>{{$faktura->jm}}</td>
<td>{{$faktura->ilosc}}</td>
<td>{{$faktura->cena_netto}}</td>
<td>{{$faktura->watosc_netto}}</td>
<td>{{$faktura->stawka_vat}}</td>
<td>{{$faktura->kwota_vat}}</td>
<td>{{$faktura->wartosc_brutto}}</td>
</tr>
</tbody>
</table>

<br></br>
<div>Status faktury:{{$faktura->status}}</div>
<div>Sosob platnosci:{{$faktura->sposob_platnosci}}</div>
<div>Numer konta:{{$faktura->numer_konta}}</div>
<div>Termin platnosci:{{$faktura->termin_platnosci}} </div>





</div>
</div>


</body>
@endforeach
</html>
