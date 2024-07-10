@extends('Structure.main')

@section('container')
    <div>
        <div class="mb-5">
            <img src="{{ asset("image/faq_banner.png") }}" style="width:100%;" alt="a jumbotron">
        </div>

        <div class="container">
            <h3 class="text-center mb-5">Frequently Asked Questions</h3>
            <div>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item mb-3">
                      <h2 class="accordion-header">
                        <button class="accordion-button" style="background-color: rgba(224, 239, 246, 1)" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            What should I do if I experience side effects from a medication?
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                          If you experience any adverse effects from a medication, please discontinue use and consult with a healthcare professional immediately.
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item mb-3 border-top border border-top border">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" style="background-color: rgba(224, 239, 246, 1)" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            How do I place an order?
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          You can go to products page and click <strong>buy</strong> on items that you want to buy and go to <strong>Cart</strong> page to checkout and do the payment.
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item mb-3 border-top border border-top border">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" style="background-color: rgba(224, 239, 246, 1)" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            What payment methods do you accept?
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          We are accepting any kinds of payments such as <strong>Online Wallet</strong>, <strong>Debit Card</strong>, and <strong>Credit Card</strong>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item mb-3 border-top border border-top border">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" style="background-color: rgba(224, 239, 246, 1)" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                            Is it safe to order medicine online?
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, but there are requirements for you to do. Look for reputable pharmacies with a VIPPS seal (US) and licensed pharmacists available for consultation, like <strong>Medigo!</strong> We offer a secure platform to fulfill your prescriptions and ensure you receive legitimate medication. Avoid suspiciously cheap sites or those not requiring prescriptions, as they may sell dangerous counterfeits. By following these steps and choosing <strong>Medigo</strong>, you can experience the benefits of online medicine ordering with minimized risk.
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item mb-3 border-top border border-top border">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" style="background-color: rgba(224, 239, 246, 1)" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                            What is your return and refund policy?
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            At Medigo, we understand that situations may arise where you need to return medication. Here's a quick rundown of our return and refund policy: <br><br/>
                            <ul>
                                <li>Contact Us First: To initiate a return, please contact our customer service team within 24 hours of receiving your order. They'll guide you through the process and ensure a smooth return.</li><br>

                                <li>Eligible Returns: We generally accept unopened, undamaged medications in their original packaging for return. Prescription medications may have additional restrictions, so please confirm with our team.</li><br>
                                <li>Refunds: Once we receive your returned medication and verify it meets the return criteria, we'll process a full refund to your original payment method within 7 business days.</li><br>
                                <li>For more detailed information and any specific questions, don't hesitate to visit our dedicated Returns & Refunds policy page or contact our customer service team directly.</li>
                            </ul>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item mb-3 border-top border border-top border">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" style="background-color: rgba(224, 239, 246, 1)" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                            How do I track my order?
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          In Transaction History there are <strong>Track</strong> button, click it to track your order
                        </div>
                      </div>
                    </div>
                    
                    <div class="accordion-item mb-3 border-top border">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" style="background-color: rgba(224, 239, 246, 1)" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                            Do you require a prescription for certain medications?
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          Absolutely, when buying potent drugs, you have to upload prescription from a doctor to prevent any kinds of problems and health problems.
                        </div>
                      </div>
                    </div>
                    
                  </div>
            </div>
        </div>
    </div>
@endsection
