

@extends('layouts.master')

@section('content')

    <div class="table-currency">
        <div class="container">
            <div class="row" id="message">

            </div>

            <div class="row">
                <div class="col-xl-12">
                    <table id="table">
                        <thead>
                        <tr>
                            <td><b class="name">Base Currency</b><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="15" viewBox="0 0 8 15"><defs><path id="b3tqa" d="M226.14 444.68l3.43-4.86a.17.17 0 0 0 .02-.18.17.17 0 0 0-.16-.09h-6.86a.17.17 0 0 0-.15.1.17.17 0 0 0 0 .17l3.44 4.86c.03.05.08.08.14.08.06 0 .11-.03.14-.08z"/><path id="b3tqb" d="M225.86 430.82l-3.43 4.86a.17.17 0 0 0-.02.18c.03.05.1.09.16.09h6.86c.07 0 .12-.04.15-.1a.17.17 0 0 0 0-.17l-3.44-4.86a.17.17 0 0 0-.28 0z"/></defs><g><g transform="translate(-222 -430)"><g><use fill="#20add0" xlink:href="#b3tqa"/></g><g><use fill="#20add0" xlink:href="#b3tqb"/></g></g></g></svg></td>
                            <td><b class="name">Currency</b><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="15" viewBox="0 0 8 15"><defs><path id="b3tqa" d="M226.14 444.68l3.43-4.86a.17.17 0 0 0 .02-.18.17.17 0 0 0-.16-.09h-6.86a.17.17 0 0 0-.15.1.17.17 0 0 0 0 .17l3.44 4.86c.03.05.08.08.14.08.06 0 .11-.03.14-.08z"/><path id="b3tqb" d="M225.86 430.82l-3.43 4.86a.17.17 0 0 0-.02.18c.03.05.1.09.16.09h6.86c.07 0 .12-.04.15-.1a.17.17 0 0 0 0-.17l-3.44-4.86a.17.17 0 0 0-.28 0z"/></defs><g><g transform="translate(-222 -430)"><g><use fill="#20add0" xlink:href="#b3tqa"/></g><g><use fill="#20add0" xlink:href="#b3tqb"/></g></g></g></svg></td>
                            <td><b class="name asc">Exchange Rate</b><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="15" viewBox="0 0 8 15"><defs><path id="b3tqa2" d="M226.14 444.68l3.43-4.86a.17.17 0 0 0 .02-.18.17.17 0 0 0-.16-.09h-6.86a.17.17 0 0 0-.15.1.17.17 0 0 0 0 .17l3.44 4.86c.03.05.08.08.14.08.06 0 .11-.03.14-.08z"/><path id="b3tqb2" d="M225.86 430.82l-3.43 4.86a.17.17 0 0 0-.02.18c.03.05.1.09.16.09h6.86c.07 0 .12-.04.15-.1a.17.17 0 0 0 0-.17l-3.44-4.86a.17.17 0 0 0-.28 0z"/></defs><g><g transform="translate(-222 -430)"><g><use fill="#20add0" xlink:href="#b3tqa2"/></g><g><use fill="#20add0" xlink:href="#b3tqb2"/></g></g></g></svg></td>

                        </tr>
                        </thead>
{{--                        checking if at least one currency exists in array--}}

                     @if(isset($zar))
                            <tbody>
                        <tr>
                            <td><img src="assets/img/site/dollar.png"  width="20px" alt="rand"><b>USD</b></td>
                            <td><img src="assets/img/site/rand.png" width="20px" alt="rand"><b>South African Rand</b></td>
                            <td><b id="zar">ZAR {{$zar}}</b></td>
                        </tr>
                        <tr>
                            <td><img src="assets/img/site/dollar.png"  width="20px" alt="rand"><b>USD</b></td>
                            <td><img src="assets/img/site/rupee.png" width="20px" alt="rupee"><b> Pakistani Rupee</b></td>
                            <td><b id="pkr">PKR {{$pkr}}</b></td>

                        </tr>
                        <tr>
                            <td><img src="assets/img/site/dollar.png"  width="20px" alt="usd"><b>USD</b></td>
                            <td><img src="assets/img/site/taka.png" width="20px" alt="taka"><b>Bangladeshi Taka</b></td>
                            <td><b id="bdt">BDT {{$bdt}}</b></td>

                        </tr>
                        <tr>
                            <td><img src="assets/img/site/dollar.png"  width="20px" alt="rand"><b>USD</b></td>
                            <td><img src="assets/img/site/indian.png"  width="20px" alt="bitcoin"><b>Indian Rupee</b></td>
                            <td><b id="inr">INR {{$inr}}</b></td>
                        </tr>

                        </tbody>
                        @else

                            <tbody>
                            <tr>

                                <td colspan="3" class="text text-center">No USD Exchange rates found.</td>

                            </tr>

                            </tbody>
                    @endif

                        <tfoot>

                        <tr>
<td></td>
                            <td  class="text text-center">
                                @if(isset($zar))<button class="btn btn-success btn-block" onclick="Refresh()">Refresh</button>@endif

                            </td>

                            <td></td>
                        </tr>

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <script>
        function Refresh() {
            var opts = {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            };
            fetch('/refresh',opts).then(function (response) {
                return response.json();
            })
                .then(function (body) {
                    console.log(body);
                    if(body) {
                        document.getElementById("zar").innerHTML="ZAR "+body.zar;
                        document.getElementById("pkr").innerHTML="PKR "+body.pkr;
                        document.getElementById("inr").innerHTML="INR "+body.inr;
                        document.getElementById("bdt").innerHTML="BDT "+body.bdt;

                        document.getElementById("last_update").innerHTML="Last Refresh: "+body.last_updated;

                        addedSuccess('success');
                    }

                    else{

                    }

                });
        }

        function addedSuccess(status) {

            if(status=='success'){
                document.getElementById("message").innerHTML = `   <div class="col-xl-12 alert alert-warning text text-center">
Exchange Rates Reshreshed

                </div>`;
            }

            else{
                document.getElementById("message").innerHTML = `   <div class="col-xl-12 alert danger text text-center">

Failed To Refresh Exchange rates
                </div>`;

            }
            setTimeout(function() {
                $('#message').html('');
            }, 3000);
        }
    </script>


@endsection
