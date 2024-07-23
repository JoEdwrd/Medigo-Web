<!-- Modal -->
<style>
    /*1st custom file upload button*/ 

    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
    }

    .profile {
        position: relative;
        width: 200px;
        height: 200px;
        transition: .3s ease-in-out;
    }

    .profile label {
        display: inline-block;
        width: 100%;
        height: 100%;
        text-align: center;
        /* line-height: 227px; */
        overflow: hidden;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .profile label img{
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensure the image covers the container */
        object-position: center;
    }

    .profile label:hover .camera {
        transform: translate(-146.5%, -123%)scale(3.9);
        background: rgba(255, 255, 255, 0.8);
        width: 51px;
        height: 51px;
    }

    .profile input[ type="file"] {
        display: none;
    }

    .profile .user {
        -webkit-background-clip: text;
    }

    .profile .camera {
        position: absolute;
        line-height: normal;
        bottom: 12px;
        right: 0px;

        padding: .5rem;
        background: rgb(255, 255, 255);
        width: 51px;
        height: 51px;
        border-radius: 50%;
        font-size: 1.5rem;
        border: 0.5px solid #888888;
        transition: .3s ease-in-out;
    }

    /*2nd file upload button*/

    .file_upload_button {
        width: 200px;
        transition: .3s ease-in-out;
    }

    .profile:hover,
    .file_upload_button:hover {
        transform: scale(1.06);
        /* filter: brightness(150%); */
    }

    .file_upload_button::-webkit-file-upload-button {
        width: 100%;
        padding: 1.5rem 2rem;
        background: linear-gradient(45deg, orangered, gold);
        border: none;
        border-radius: 2rem;
    }

    /*3rd File upload button*/

    .file_upload_button.v2::-webkit-file-upload-button {
        background: none;
        border: 3px solid orange;
        color: orange;
        background-size: contain;
    }

    /* Add styles for sticky modal footer */
    .modal-footer {
        position: sticky;
        bottom: 0;
        background-color: #fff;
        z-index: 1000;
        width: 100%;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
    }
    .modal-body {
        max-height: calc(100vh - 200px); /* Adjust according to your header and footer heights */
        overflow-y: auto;
    }
</style>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit your profile here</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="" novalidate action="/updateProfile" id="formEditProfile" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="modal-body">
                    <h4 class="mb-3">General Information</h4>
                    <div class="mb-3">
                        <div class="d-flex flex-column text-center mb-4">
                            <div class="profile">
                                <label class="border border-black text-center align-center">
                                    @if(isset($user->profile_picture))
                                        <img class="user" src="{{"storage/".$user->profile_picture}}" alt="">
                                    @else
                                        <img class="user" style="width: 15rem" src="/image/userTemp.png" alt="">
                                    @endif
                                    <span class="camera"><i class="bi bi-pencil-square"></i></span>
                                    <input type="file" name="profile_picture">
                                </label>
                            </div>
                        </div>
                        <div class="row g-3">
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
                                    Please input your phone number in proper format.
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="emailInput" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="emailInput" placeholder="Input your email here" value={{ old("email",$user->email) }} required>
                                <div class="invalid-feedback">
                                    Please input your email in proper format.
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="dateOfBirthInput" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" name="dob" id="dateOfBirthInput" placeholder="Input your date of birth here" value={{ old("dob",$user->dob) }} required>
                                <div class="invalid-feedback">
                                    Please input your date of birth.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="genderInput" class="form-label">Gender</label>
                                <select class="form-select" aria-label="Default select example" id="genderInput" name="gender" required>
                                    <option value="Male" {{$user->gender == "Male" ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{$user->gender == "Female" ? 'selected' : '' }}>Female</option>
                                    <option value="Other" {{$user->gender == "Other" ? 'selected' : '' }}>Other</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please choose a gender.
                                </div>
                            </div>

                        </div>
                    </div>

                    <h4 class="mb-4">Address</h4>
                    <div class="row g-3">

                        <div class="mb-3 col-md-6">
                            <label for="provinceInput" class="form-label">Province</label>
                            <input type="text" class="form-control" value="{{ old('province', explode(', ', $user->address)[3] ?? '') }}" id="provinceInput" name="province" placeholder="Input your province here" required>
                            <div class="invalid-feedback">
                                Edit profile failed, The province field must not contain symbols, numbers, or leading whitespaces. Please try again.
                            </div>
                        </div>



                        <div class="mb-3 col-md-6">
                            <label for="cityInput" class="form-label">City</label>
                            <input type="text" class="form-control" value="{{ old('city', explode(', ', $user->address)[2] ?? '') }}" id="cityInput" name="city" placeholder="Input your city here" required>
                            <div class="invalid-feedback">
                                Edit profile failed, The city field must not contain symbols, numbers, or leading whitespaces. Please try again.
                            </div>
                        </div>



                        <div class="mb-3 col-md-6">
                            <label for="districtInput" class="form-label">District</label>
                            <input type="text" class="form-control" value="{{ old('district', explode(', ', $user->address)[1] ?? '') }}" id="districtInput" name="district" placeholder="Input your district here" required>
                            <div class="invalid-feedback">
                                Edit profile failed, The district field must not contain symbols, numbers, or leading whitespaces. Please try again.
                            </div>
                        </div>



                        <div class="mb-3 col-md-6">
                            <label for="streetInput" class="form-label">Street</label>
                            <input type="text" class="form-control" value="{{ old('street', explode(', ', $user->address)[0] ?? '') }}" id="streetInput" name="street" placeholder="Input your street here" required>
                            <div class="invalid-feedback">
                                Edit profile failed, The street field must not contain symbols or leading whitespaces. Please try again.
                            </div>
                        </div>



                        <div class="mb-3 col-md-6">
                            <label for="postalCodeInput" class="form-label">Postal code</label>
                            <input type="text" class="form-control" value="{{ old('postalCode', explode(', ', $user->address)[4] ?? '') }}" id="postalCodeInput" name="postalCode" placeholder="Input your postal code here" required>
                            <div class="invalid-feedback">
                                Edit profile failed, The postal code must be a number with a maximum length of 5 digits. Please try again.
                            </div>
                        </div>



                        <div class="mb-3 col-md-6">
                            <label for="descriptionInput" class="form-label">Description (Optional)</label>
                            <textarea type="text" class="form-control" id="descriptionInput" name="description" placeholder="Input your description here">{{old('description', explode(', ', $user->address)[5] ?? '') }}</textarea>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" id="custombtn" onclick="validateAndSubmitForm()">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    // Function to check if email is valid
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Function to validate all form fields
    function validateAndSubmitForm() {
        const form = document.querySelector('#formEditProfile');
        let valid = true;

        // Name validation
        const nameInput = document.querySelector('#nameInput');
        if (nameInput.value.trim() === '' || nameInput.value.length > 255) {
            nameInput.setCustomValidity('Please enter a valid name (max 255 characters).');
            nameInput.classList.add('is-invalid');
            valid = false;
        } else {
            nameInput.setCustomValidity('');
            nameInput.classList.remove('is-invalid');
            nameInput.classList.add('is-valid');
        }

        // Email validation
        const emailInput = document.querySelector('#emailInput');
        if (!isValidEmail(emailInput.value) || emailInput.value.length > 255) {
            emailInput.setCustomValidity('Please enter a valid email (max 255 characters).');
            emailInput.classList.add('is-invalid');
            valid = false;
        } else {
            emailInput.setCustomValidity('');
            emailInput.classList.remove('is-invalid');
            emailInput.classList.add('is-valid');
        }

        // Phone number validation
        const phoneInput = document.querySelector('#phoneNumberInput');
        const phoneRegex = /^08[0-9]{8,11}$/; // regex for phone number validation
        if (!phoneRegex.test(phoneInput.value)) {
            phoneInput.setCustomValidity('Please enter a valid phone number (starts with 08 and 10-13 digits).');
            phoneInput.classList.add('is-invalid');
            valid = false;
        } else {
            phoneInput.setCustomValidity('');
            phoneInput.classList.remove('is-invalid');
            phoneInput.classList.add('is-valid');
        }

        // Date of Birth validation
        const dobInput = document.querySelector('#dateOfBirthInput');
        if (!dobInput.value) {
            dobInput.setCustomValidity('Please enter your date of birth.');
            dobInput.classList.add('is-invalid');
            valid = false;
        } else {
            dobInput.setCustomValidity('');
            dobInput.classList.remove('is-invalid');
            dobInput.classList.add('is-valid');
        }

        // Gender validation
        const genderInput = document.querySelector('#genderInput');
        if (!genderInput.value) {
            genderInput.setCustomValidity('Please select your gender.');
            genderInput.classList.add('is-invalid');
            valid = false;
        } else {
            genderInput.setCustomValidity('');
            genderInput.classList.remove('is-invalid');
            genderInput.classList.add('is-valid');
        }

         // Address validation
        const provinceInput = document.querySelector('#provinceInput');
        const provinceCityDistrictRegex = /^[a-zA-Z\s]+$/; // Only letters and spaces
        if (!provinceCityDistrictRegex.test(provinceInput.value) || provinceInput.value.trim() === '') {
            provinceInput.setCustomValidity('Please enter a valid province (only letters and spaces, no leading or trailing spaces).');
            provinceInput.classList.add('is-invalid');
            valid = false;
        } else {
            provinceInput.setCustomValidity('');
            provinceInput.classList.remove('is-invalid');
            provinceInput.classList.add('is-valid');
        }

        const cityInput = document.querySelector('#cityInput');
        if (!provinceCityDistrictRegex.test(cityInput.value) || cityInput.value.trim() === '') {
            cityInput.setCustomValidity('Please enter a valid city (only letters and spaces, no leading or trailing spaces).');
            cityInput.classList.add('is-invalid');
            valid = false;
        } else {
            cityInput.setCustomValidity('');
            cityInput.classList.remove('is-invalid');
            cityInput.classList.add('is-valid');
        }

        const districtInput = document.querySelector('#districtInput');
        if (!provinceCityDistrictRegex.test(districtInput.value) || districtInput.value.trim() === '') {
            districtInput.setCustomValidity('Please enter a valid district (only letters and spaces, no leading or trailing spaces).');
            districtInput.classList.add('is-invalid');
            valid = false;
        } else {
            districtInput.setCustomValidity('');
            districtInput.classList.remove('is-invalid');
            districtInput.classList.add('is-valid');
        }

        const postalCodeInput = document.querySelector('#postalCodeInput');
        const postalCodeRegex = /^\d{5}$/;
        if (!postalCodeRegex.test(postalCodeInput.value) || postalCodeInput.value.trim() === '') {
            postalCodeInput.setCustomValidity('Please enter a valid postal code (5 digits).');
            postalCodeInput.classList.add('is-invalid');
            valid = false;
        } else {
            postalCodeInput.setCustomValidity('');
            postalCodeInput.classList.remove('is-invalid');
            postalCodeInput.classList.add('is-valid');
        }

        const streetInput = document.querySelector('#streetInput');
        const streetRegex = /^[a-zA-Z\d\s\.]+$/; // Letters, digits, spaces, and dots
        const notRegex = /^\s/; // Checks for leading spaces
        if (!streetRegex.test(streetInput.value) || notRegex.test(streetInput.value) || streetInput.value.trim() === '') {
            streetInput.setCustomValidity('Please enter a valid street (letters, digits, spaces, and dots; cannot start with a space).');
            streetInput.classList.add('is-invalid');
            valid = false;
        } else {
            streetInput.setCustomValidity('');
            streetInput.classList.remove('is-invalid');
            streetInput.classList.add('is-valid');
        }

        // Check if form is valid before submitting
        if (valid) {
            form.submit();
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        const input_file = document.querySelector('input[type="file"]');
        const profile_img = document.querySelector('.profile label');

        input_file.onchange = (e) => {
            let file = e.target.files[0];
            let url = URL.createObjectURL(file);

            profile_img.style.background = `url(${url}) center / cover no-repeat`;
            profile_img.querySelector('.user').style.display = "none";

            setTimeout(() => {
                URL.revokeObjectURL(url);
            }, 100);
        };
    });
</script>
