@extends('layouts.guest')
@section('content')

<!-- give section starts here -->
<div class="hero-header">
    <h1>Give Online</h1>
</div>

<div class="row col-md-12 col-sm-6 margin: 10px;">
    <h3> "So let each one give as he purposes in his heart,
        not grudgingly or of necessity; for God loves a cheerful giver".
        2 Cor. 9:7
    </h3>
</div>

<!-- New row starts here -->
<div class="row">
    <div class="col col-lg-6 col-sm-2 bg-light">
        <div class="account-card" style="padding: 20px; margin: 10px; ">

            <button style="
                background-color: #E5D8E9FF; /* Gold color */
                color: white; /* Text color */
                border: none; /* Removes border */
                padding: 12px 24px; /* Adds padding */
                font-size: 16px; /* Text size */
                font-weight: bold; /* Bold text */
                border-radius: 8px; /* Rounded corners */
                box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3); /* Subtle shadow */
                cursor: pointer; /* Pointer cursor on hover */
                transition: transform 0.2s, box-shadow 0.2s; /* Animation on hover */
"               onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='4px 4px 12px rgba(0, 0, 0, 0.4)';"
                onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='2px 2px 8px rgba(0, 0, 0, 0.3)';">
                <a href="/bank"> Bank Transfer </a>
            </button>

        </div>
    </div>

    <!-- Card 2 -->
    <div class="col col-lg-6 col-sm-2 bg-lilac">
        <div class="account-card" style="padding: 20px; margin: 10px;">
        <button style="
                background-color: #E5D8E9FF; /* Gold color */
                color: white; /* Text color */
                border: none; /* Removes border */
                padding: 12px 24px; /* Adds padding */
                font-size: 16px; /* Text size */
                font-weight: bold; /* Bold text */
                border-radius: 8px; /* Rounded corners */
                box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3); /* Subtle shadow */
                cursor: pointer; /* Pointer cursor on hover */
                transition: transform 0.2s, box-shadow 0.2s; /* Animation on hover */
"               onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='4px 4px 12px rgba(0, 0, 0, 0.4)';"
                onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='2px 2px 8px rgba(0, 0, 0, 0.3)';">
                <a href="/bank"> Paystack </a>
            </button>

        </div>
    </div>
</div>

</div>

@endsection
