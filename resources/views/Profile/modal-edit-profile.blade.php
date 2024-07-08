<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit your profile here</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <form class="row g-3 needs-validation" novalidate action="/updateProfile" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3 col-md-6">
                            <label for="nameInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameInput" name="name" placeholder="Input your name here" value={{ old("name",$user->name) }} required>
                            <div class="invalid-feedback">
                                Please input your name.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="phoneNumberInput" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="phoneNumberInput" placeholder="Input your number here" value={{ old("phone",$user->phone) }} required>
                            <div class="invalid-feedback">
                                Please input your phone number.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="emailInput" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="emailInput" placeholder="Input your email here" value={{ old("email",$user->email) }} required>
                            <div class="invalid-feedback">
                                Please input your email.
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="dateOfBirthInput" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dateOfBirthInput" placeholder="Input your email here" value={{ old("dob",$user->dob) }} required>
                            <div class="invalid-feedback">
                                Please input your date of birth.
                              </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="genderInput" class="form-label">Gender</label>
                            <select class="form-select" aria-label="Default select example" id="genderInput" name="gender" required>
                                {{-- <option selected>Select your gender</option> --}}
                                <option value="Male" {{$user->gender == "Male" ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{$user->gender == "Female" ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{$user->gender == "Other" ? 'selected' : '' }}>Other</option>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a gender.
                              </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="addressInput" class="form-label">Address</label>
                            <textarea type="text" name="address" class="form-control" id="addressInput" placeholder="Input your address here" required>{{ old("address",$user->address) }}</textarea>
                            <div class="invalid-feedback">
                                Please input your address.
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
    // Example starter JavaScript for disabling form submissions if there are invalid fields
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
