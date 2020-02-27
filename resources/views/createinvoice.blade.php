
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
@include('_includes/nav')
<h1>HELLO lARAVEL</h1>
<form action ="{{route('createinvoice.store')}}" method="POST">
{{ csrf_field() }}
<label for="id"></label>
<input type="hidden" name="id" id="id" class="form-control"/>
<label for="id"></label>
<input type="hidden" name="sprzedawca_id" id="id" class="form-control"/>
<label for="id"></label>
<input type="hidden" name="nabywca_id" id="id" class="form-control"/>

<label for="typ_faktury">Typ fkatury</label>
<input type="text" name="typ_faktury" id="typ_faktury" class="form-control"/>

<label for="data_wystawienia">Data wystawienia</label>
<input type="text" name="data_wystawienia" id="data_wystawienia" class="form-control"/>

<label for="mejsce_wystawienia">Miejsce wystawienia</label>
<input type="text" name="mejsce_wystawienia" id="mejsce_wystawienia" class="form-control"/>

<label for="data_sprzedazy">Data sprzedazy</label>
<input type="text" name="data_sprzedazy" id="data_sprzedazy" class="form-control"/>

<label for="sprzedawca">Sprzedawca</label>
<input type="text" name="sprzedawca" id="sprzedawca" class="form-control"/>

<label for="nip_sprzedawca">NIP</label>
<input type="text" name="nip_sprzedawca" id="nip_sprzedawca" class="form-control"/>

<label for="ulica_sprzedawca">Ulica</label>
<input type="ulica_sprzedawca" name="ulica_sprzedawca" id="ulica_sprzedawca" class="form-control"/>

<label for="miasto_spzedawca">Miasto</label>
<input type="miasto_spzedawca" name="miasto_spzedawca" id="miasto_spzedawca" class="form-control"/>

<label for="kod_pocztowy_sprzedawca">Kod pocztowy</label>
<input type="text" name="kod_pocztowy_sprzedawca" id="kod_pocztowy_sprzedawca" class="form-control"/>

<label for="nabywca">Nabywca</label>
<input type="text" name="nabywca" id="nabywca" class="form-control"/>

<label for="nip_nabywca">NIP</label>
<input type="text" name="nip_nabywca" id="nip_nabywca" class="form-control"/>

<label for="ulica_nabywca">Ulica</label>
<input type="text" name="ulica_nabywca" id="ulica_nabywca" class="form-control"/>

<label for="miasto_nabywca">Miasto</label>
<input type="miasto_nabywca" name="miasto_nabywca" id="miasto_nabywca" class="form-control"/>

<label for="kod_pocztowy_nabywca">Kod pocztowy</label>
<input type="text" name="kod_pocztowy_nabywca" id="kod_pocztowy_nabywca" class="form-control"/>

<label for="towar_usluga">Nazwa towaru lub ulugi</label>
<input type="text" name="towar_usluga" id="towar_usluga" class="form-control"/>

<label for="jm">Jm.</label>
<input type="text" name="jm" id="jm" class="form-control"/>

<label for="ilosc">Ilosc</label>
<input type="text" name="ilosc" id="ilosc" class="form-control"/>

<label for="cena_netto">Cena netto</label>
<input type="text" name="cena_netto" id="cena_netto" class="form-control"/>

<label for="wartosc_netto">Wartosc netto</label>
<input type="text" name="watosc_netto" id="wartosc_netto" class="form-control"/>

<label for="stawka_vat">Stawka VAT</label>
<input type="stawka_vat" name="stawka_vat" id="stawka_vat" class="form-control"/>

<label for="kwota_vat">Kwota VAT</label>
<input type="text" name="kwota_vat" id="kwota_vat" class="form-control"/>

<label for="wartosc_brutto">Wartosc brutto</label>
<input type="text" name="wartosc_brutto" id="wartosc_brutto" class="form-control"/>

<label for="status">Status</label>
<input type="text" name="status" id="status" class="form-control"/>

<label for="sposob_platnosci">Sposob platnosci</label>
<input type="text" name="sposob_platnosci" id="sposob_platosci" class="form-control"/>

<label for="numer_konta">Numer konta</label>
<input type="text" name="numer_konta" id="numer_konta" class="form-control"/>

<label for="termin_platnosci">Termin platnosci</label>
<input type="text" name="termin_platnosci" id="termin_platnosci" class="form-control"/>

<button type="submit" class="btn btn-primary">Zatwierdz Fakture</button>
</form>
</body>

</html>
