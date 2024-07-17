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
                                <option value="Waiting for payment" {{ $prescriptions->status == 'Waiting for payment' ? 'selected' : '' }}>Waiting for payment</option>
                                <option value="In progress" {{ $prescriptions->status == 'In progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="Canceled" {{ $prescriptions->status == 'Canceled' ? 'selected' : '' }}>Canceled</option>
                                <option value="Completed" {{ $prescriptions->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a status.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Save Changes</button>
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
