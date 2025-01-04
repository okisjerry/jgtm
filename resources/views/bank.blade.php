@extends('layouts.guest')
@section('content')

<div class="hero-header">
    <h1>Bank Transfer</h1>
</div>
<h3 text-align="center  margin: 10px;">Naira Bank Transfer Details</h3>

<!-- give section starts here -->
<div class="row">
    <!-- Card 1 -->
    <div class="container padding: 10px; margin: 10px;">
        <div class="col col-lg-6 col-sm-2 bg-light ">
            <div class="account-card padding: 20px; margin: 10px;">
                <h3>Account Details</h3>
                <div class="account-info">
                    <img class="" src="../assets/images/jgtm/access.svg" style="border-radius: 50px;" height="50"
                        width="50" alt="Zenith Bank">
                    <p><strong>Account Holder:</strong> Just God Triumphant Ministry</p>
                    <p><strong>Bank Name:</strong> Access Bank</p>
                    <p><strong>Account Number:</strong> 0105921139</p>

                    <i></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Card 2 -->
<div class="row">
    <div class="container padding: 10px; margin: 10px;">
        <div class="col col-lg-6 col-sm-2 bg-lilac">
            <div class="account-card">
                <h3>Account Details</h3>
                <div class="account-info">
                    <img class="" src="../assets/images/jgtm/zenith.svg" height="50" width="50" alt="Access Bank">
                    <p><strong>Account Holder:</strong> Just God Triumphant Ministry</p>
                    <p><strong>Bank Name:</strong> Access Bank</p>
                    <p><strong>Account Number:</strong> 0105921139</p>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
