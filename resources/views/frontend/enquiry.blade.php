<div class="container-fluid py-5" id="admission">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <p class="section-title pr-5"><span class="pr-2">Book A Seat / Drop your enquiry</span></p>
                <!--<h1 class="mb-4">Book A Seat For Your Kid</h1> -->
                <p>For admissions, job vacancies, or any inquiries, just drop us a message—we’ll get in touch with you!</p>
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-secondary text-center p-4">
                        <h2 class="text-white m-0">Enquiry</h2>
                    </div>
                    <div class="card-body rounded-bottom bg-primary p-5">

                        <div class="form-group">
                            <select class="custom-select border-0 px-4" style="height: 47px;" id="select">
                                <option selected>Select</option>
                                <option value="adm">Admission Enquiry</option>
                                <option value="gen">General Enquiry</option>
                            </select>
                        </div>
                        <form action="send-admission-enquiry" method="get" class="admission_form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Name*"
                                    required="required" name="name" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Email*"
                                    name="email" />
                                @error('email')
                                    <h5>{{ $message }}</h5>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Phone Number*"
                                    required="required" name="phone_number" />
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;" name="klass">
                                    <option selected>Select A Class*</option>
                                    <option value="1">K.G</option>
                                    <option value="2">I</option>
                                    <option value="2">II</option>
                                    <option value="3">III</option>
                                    <option value="4">IV</option>
                                    <option value="5">V</option>
                                    <option value="6">VI</option>
                                    <option value="7">VII</option>
                                    <option value="8">VIII</option>
                                    <option value="9">IX</option>
                                    <option value="9">X</option>
                                    <option value="9">XI</option>
                                    <option value="9">XII</option>

                                </select>
                            </div>
                            <div>
                                <button class="btn btn-secondary btn-block border-0 py-3" type="submit">Book
                                    Now</button>
                            </div>
                        </form>
                        <form action="send-general-enquiry" method="get" class="general_form">

                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Name*"
                                    required="required" name="name" />
                            </div>
                            <div class="form-group">
                                <input type="phone_number" class="form-control border-0 p-4" placeholder="Phone Number*"
                                    required="required" name="phone_number" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Email*"
                                    name="email" />
                            </div>
                            <div class="form-group">
                                <input type="textarea" class="form-control border-0 p-4"
                                    placeholder="Enter your message*" required="required" name="message_content" />
                            </div>

                            <div>
                                <button class="btn btn-secondary btn-block border-0 py-3" type="submit">Send
                                    your
                                    Enquiry</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>