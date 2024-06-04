@extends('Structure.main')
@section('container')


<div class="container mt-5">
    <div class="card">
        <img src="{{ asset("/image/Promo1.png") }}" style="height: 400px"; width="500px" class="card-img-top" alt="Voucher Image">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title">50% Off - Limited Time Discount on Allergy Relief Medication</h4>
                <span class="badge bg-warning text-dark">50% off</span>
            </div>
            <hr>
            <ul class="list-unstyled">
                <li><i class="bi bi-calendar"></i>Promo Period: May 1, 2024 - July 1, 2024</li>
                <li><i class="bi bi-receipt"></i> Limited to 1 voucher per bill</li>
            </ul>
            <hr>

            <p><strong>Offer Description: </strong>Enjoy a 50% discount on all allergy relief medications during our special promotion.</p>

            <p><strong>How to Redeem:</strong> Enter promo code ALLERGY50 at checkout to apply the discount on eligible allergy relief medications.</p>

            <p><strong>Exclusions and Limitations:</strong></p>
            <ul>
                <li>Offer excludes prescription medications, over-the-counter supplements, and items already discounted.</li>
                <li>Limited to one use per customer.</li>
                <li>Not valid on bulk purchases exceeding three units of the same product.</li>
            </ul>

            <p><strong>Terms and Conditions:</strong></p>
            <ul>
                <li>The discount applies only to eligible allergy relief medications.</li>
                <li>This offer cannot be combined with any other promotions, discounts, or loyalty points.</li>
                <li>Standard return policy applies.</li>
                <li>The promotion is subject to availability and may be withdrawn or modified at any time without prior notice.</li>
                <li>Customers must adhere to the recommended dosage and guidelines for all medications.</li>
            </ul>

            <p><strong>Important Note:</strong> Always read the label and use only as directed. Consult your healthcare professional if symptoms persist.</p>
            <p><strong>Contact Information:</strong> For more details or assistance, please contact our customer service team at <a href="mailto:support@pharmahealth.com">support@medigo.com</a> or call (800) 123-4567.</p>

            <div class="d-flex justify-content-between align-items-center mt-3">
                <button class="btn" style="background-color: var(--main2-color); color: white;"">Apply offers</button>
            </div>
        </div>
    </div>
</div>
















@endsection
