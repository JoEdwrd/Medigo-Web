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
</style>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit your profile here</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <form class="row g-3 needs-validation" novalidate action="/updateProfile" method="POST" enctype="multipart/form-data">>
                        
                        @csrf
                        @method('put')
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
                            <button class="btn btn-success" type="submit">Save Changes</button>
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

    let input_file = document.querySelector('input[type="file"]');
    let profile_img = document.querySelector('.profile label');

    input_file.onchange = (e) => {
        // accessing 1st choosen file
        let file = e.target.files[0];

        // Store "file's data" with the help of "URL Object"
        let url = URL.createObjectURL(file);

        // Changing background of 'label' and hiding user emoji icon
        profile_img.style.background = `url(${url}) center / cover no-repeat`;
        profile_img.querySelector('.user').style.display = "none";

        // Free up memory space (better perfomance)
        setTimeout(() => {
            URL.revokeObjectURL(url);
        }, 100)
    }
</script>
