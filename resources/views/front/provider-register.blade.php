
    <div class="container-fluid login">
        <div class="row d-flex justify-content-center">
            <div class="col-6 border" style="background-color: white">
                <h5 class="text-center mt-5"><b style="color: #0096B7">Sign Up for RojgarSewa</b></h5>
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-7">
                        <form>
                        <div class="row">
                            <div class="col-3">
                                <label class="mt-2">Name</label>
                            </div>
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Full Name">
                            </div>
                        </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <label class="mt-2">Email</label>
                                </div>
                                <div class="col">
                                    <input type="email" name="email" class="form-control" placeholder="abcd@gmail.com">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <label class="mt-2">Service Provided</label>
                                </div>
                                <div class="col">
                                    <input type="email" name="email" class="form-control" placeholder="Eg. Plumber, Electrician">
                            </div>

                            <div class="row mt-3">
                                <div class="col-3">
                                    <label class="mt-2">Password</label>
                                </div>
                                <div class="col">
                                    <input type="password" name="password" class="form-control" placeholder="Strong Password">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <label class="mt-2">Street</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="street" class="form-control" placeholder="New Baneshwor">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <label class="mt-2">City</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="city" class="form-control" placeholder="Kathmandu">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <label class="mt-2">Phone No.</label>
                                </div>
                                <div class="col">
                                    <input type="tel" name="phone" class="form-control" placeholder="98XXXXXXX">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <label class="mt-2">Date of Birth</label>
                                </div>
                                <div class="col">
                                    <input type="date" name="street" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <label class="mt-2">Category</label>
                                </div>
                                <div class="col">
                                    <select name="rocket" id="car">
                                        <option value="volvo">Cleaning</option>
                                        <option value="saab">Delivery</option>
                                        <option value="volvo">engineering</option>
                                        <option value="saab">doctor</option>
                                        <option value="volvo">electrician</option>
                                        <option value="saab">Saab</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                    </select>
                                </div>
                            </div>

                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary">SIGN UP</button>
                        </div>
                        <p class="mt-4 mb-5 text-center">Already have an account? <a href="{{route('login')}}" style="text-decoration: none; color: #0096B7">Login</a></p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

