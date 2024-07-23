<!-- Modal -->
<div class="modal fade" id="staticBackdrop-{{$transaction->slug}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit transaction's status here</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <form method="post" action="/dashboard/transactions/{{ $transaction->slug }}/edit" class="row g-3">
                        @csrf
                        @method("put")
                        <div class="mb-3">
                            <label for="statusInput" class="form-label">Status</label>
                            <select class="form-select" aria-label="Default select example" id="statusInput" name="status" required>
                                <option value="Waiting for verification" {{ $transaction->status == 'Waiting for verification' ? 'selected' : '' }}>Waiting for verification</option>
                                <option value="Waiting for payment" {{ $transaction->status == 'Waiting for payment' ? 'selected' : '' }}>Waiting for payment</option>
                                <option value="In progress" {{ $transaction->status == 'In progress' ? 'selected' : '' }}>In progress</option>
                                <option value="Canceled" {{ $transaction->status == 'Canceled' ? 'selected' : '' }}>Canceled</option>
                                <option value="Completed" {{ $transaction->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a status.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="paymentMethodInput" class="form-label">Payment Method</label>
                            <select class="form-select" aria-label="Default select example" id="paymentMethodInput" name="paymentMethod">
                                <option value="-" {{ $transaction->payment_method == '-' ? 'selected' : '' }}>-</option>
                                <option value="BCA" {{ $transaction->payment_method == 'BCA' ? 'selected' : '' }}>BCA</option>
                                <option value="BRI" {{ $transaction->payment_method == 'BRI' ? 'selected' : '' }}>BRI</option>
                                <option value="Mandiri" {{ $transaction->payment_method == 'Mandiri' ? 'selected' : '' }}>Mandiri</option>
                                <option value="BNI" {{ $transaction->payment_method == 'BNI' ? 'selected' : '' }}>BNI</option>
                                <option value="Gopay" {{ $transaction->payment_method == 'GoPay' ? 'selected' : '' }}>GoPay</option>
                                <option value="GoPay Later" {{ $transaction->payment_method == 'GoPay Later' ? 'selected' : '' }}>GoPay Later</option>
                                <option value="DANA" {{ $transaction->payment_method == 'DANA' ? 'selected' : '' }}>DANA</option>
                                <option value="OVO" {{ $transaction->payment_method == 'OVO' ? 'selected' : '' }}>OVO</option>
                                <option value="LinkAja" {{ $transaction->payment_method == 'LinkAja' ? 'selected' : '' }}>LinkAja</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a payment method.
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn" id="btnselect" type="submit">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
