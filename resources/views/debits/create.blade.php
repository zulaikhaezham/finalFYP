@extends('layouts.app3')

@section('content')
@if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    
    @csrf
   <center> <div class="w3ls-main">
        <!--/tabs-->
        <div class="responsive_tabs w3ls_tab">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>Credit/Debit</li>
                    <li>Upload receipt</li>
                </ul>
                <div class="resp-tabs-container">
                    <!--tab_one-->
                    <div class="tab1">
                        <div class="agile_pay">
                        <form action="{{route('debits.store')}}" method="POST" class="creditly-card-form shopf-sear-headinfo_form">
                                <section class="creditly-wrapper payf_wrapper">
                                    <div class="credit-card-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">
                                                <label class="control-label">Name on Card</label>
                                                <input class="billing-address-name form-control" type="text" name="name" placeholder="zulaikhaezham">
                                            </div>
                                            <div class="paymntf_card_number_grids">
                                                <div class="fpay_card_number_grid_left">
                                                    <div class="controls">
                                                        <label class="control-label">Card Number</label>
                                                        <input class="number credit-card-number form-control" type="text" name="card_no" inputmode="numeric" autocomplete="cc-number"
                                                            autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                    </div>
                                                </div>
                                                <div class="fpay_card_number_grid_right">
                                                    <div class="controls">
                                                        <label class="control-label">CVV</label>
                                                        <input class="security-code form-control" Â· inputmode="numeric" type="text" name="cvv" placeholder="&#149;&#149;&#149;">
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">
                                                <label class="control-label">Expiration Date</label>
                                                <input class="expiration-month-and-year form-control" type="text" name="expiration_date" placeholder="MM / YY">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" >Proceed Payment</button>
                                    </div>
                                </section>
                            </form>

                        </div>
                    </div>
                    <!-- //tab one -->
                    
                    <!-- tab two -->
                    <div class="tab3">
                        <div class="agile_pay">
                            <div class=" tab-grid">
                                <p>Important: Upload your receipt here.</p>
                            </div>
                            <div class="paypal_agile">
                            <form action="{{route('payments.store')}}" method="POST" enctype="multipart/form-data" class="creditly-card-form shopf-sear-headinfo_form">
                                    <section class="creditly-wrapper payf_wrapper">
                                        <div class="credit-card-wrapper">
                                            <div class="first-row form-group">
                                                <div class="controls">
                                                    <label class="control-label">Amount of sticker paid </label>
                                                    <input class="billing-address-name form-control" type="text" name="amount" placeholder="Amount">
                                                </div>
                                                <div class="paymntf_card_number_grids">
                                                    <div class="fpay_card_number_grid_left">
                                                        <div class="controls">
                                                            <label class="control-label">Uploads your receipt here</label>
                                                            <input class="number credit-card-number form-control" type="file" class="form-control" name="upload_receipt" placeholder="Document Uploads">
                                                        </div>
                                                    </div>
                                                </div>
                                            <button type="submit" class="btn btn-primary" >Proceed Payment</button>
                                        </div>
                                    </section>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <!-- //tab three -->
                </div>
            </div>
        </div>
        <!--//tabs-->
    </div>
    <!-- //payment --></center>
    @endsection