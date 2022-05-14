<div class="page-wrapper">
    <!-- login modal -->
    <div class="modal fade" id="loginModal" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="account-form-area">
                        <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close"><i
                                class="las la-times"></i></button>
                        <h3 class="title">Welcome Back</h3>
                        <div class="account-form-wrapper">
                            <form method="POST" action="{{ URL::route('login.post') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email <sup>*</sup></label>
                                    <input type="email" name="email" id="email" placeholder="Enter your Email">
                                </div>
                                <div class="form-group">
                                    <label>password <sup>*</sup></label>
                                    <input type="password" name="password" id="password" placeholder="password">
                                </div>
                                <div class="d-flex flex-wrap justify-content-between mt-2">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" name="id-1" id="id-1" checked>
                                        <label for="id-1">Remember Password</label>
                                        <span class="checkbox"></span>
                                    </div>
                                    <a href="#0" class="link">Forgot Password?</a>
                                </div>
                                <div class="form-group text-center mt-5">
                                    <button type="submit" class="cmn-btn">log in</button>
                                </div>
                            </form>
                            <p class="text-center mt-4">Don’t have an account? <a href="#0" data-toggle="modal"
                                    data-target="#signupModal" data-dismiss="modal" aria-label="Close"> Sign Up Now</a>
                            </p>
                            <div class="divider">
                                <span>or</span>
                            </div>
                            <ul class="social-link-list">
                                <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up modal -->
    <div class="modal fade" id="signupModal" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="account-form-area">
                        <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close"><i
                                class="las la-times"></i></button>
                        <h3 class="title">Open Free Account</h3>
                        <div class="account-form-wrapper">
                            <form action="{{ route('register.post') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Username <sup>*</sup></label>
                                    <input type="text" name="username" id="username" placeholder="Enter your username">
                                </div>
                                <div class="form-group">
                                    <label>Firstname <sup>*</sup></label>
                                    <input type="text" name="firstname" id="firstname"
                                        placeholder="Enter your firstname">
                                </div>
                                <div class="form-group">
                                    <label>Lastname <sup>*</sup></label>
                                    <input type="text" name="lastname" id="lastname" placeholder="Enter your lastname">
                                </div>
                                <div class="form-group">
                                    <label>Email <sup>*</sup></label>
                                    <input type="email" name="email" id="email" placeholder="Enter your Email">
                                </div>
                                <div class="form-group">
                                    <label>password <sup>*</sup></label>
                                    <input type="password" name="password" id="password" placeholder="password">
                                </div>
                                <div class="form-group">
                                    <label>confirm password <sup>*</sup></label>
                                    <input type="password" name="password_confirmation" id="signup_re-pass"
                                        placeholder="Confirm Password">
                                </div>
                                <div class="d-flex flex-wrap mt-2">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" name="id-2" id="id-2" checked>
                                        <label for="id-2">I agree to the</label>
                                        <span class="checkbox"></span>
                                    </div>
                                    <a href="#0" class="link ml-1">Terms, Privacy Policy and Fees</a>
                                </div>
                                <div class="form-group text-center mt-5">
                                    <button class="cmn-btn" type="submit">Register</button>
                                </div>
                            </form>
                            <p class="text-center mt-4"> Already have an account? <a href="#0" data-target="#loginModal"
                                    data-toggle="modal" data-dismiss="modal" aria-label="Close">Login</a></p>
                            <div class="divider">
                                <span>or</span>
                            </div>
                            <ul class="social-link-list">
                                <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
