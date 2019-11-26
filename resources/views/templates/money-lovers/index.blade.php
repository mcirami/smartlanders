@extends('templates.money-lovers.layouts.header')

@section('content')

    <div class="row hero pb-3 pb-md-5 section ml_page_wrap" id="welcome">
        <div class="col-12 text-center">
            <div class="container">
                <img src="{{ url('/storage/images/moneylovers/img_moneylover.png') }}"  alt="" />
                <h2>The Dating Program That Converts</h2>
                <p class="mb-3">Welcome to Money Lovers! We're here to re-ignite your belief that a quality network makes all the difference in your bottom line. <br>
                    Join our team today and contact us for details or special setups. We're always here and always happy to help you make the most money possible on your traffic, cause after all… we are ALL Money Lovers.
                </p>
                <a class="rounded-pill py-2 pl-3 pr-4 signup_button scroll" href="#signup">
                    <span class="mr-2 pb-2"><img src="{{ url('/storage/images/moneylovers/button-arrow.png') }}"  alt="" /></span>Sign Up Now
                </a>
                <div class="row mt-5">
                    <div class="col-6 col-md-3 col_bg">
                        <h3 class="mt-lg-3 mt-xl-4">Pay Per Auth</h3>
                        <h2>UP TO $65</h2>
                    </div>
                    <div class="col-6 col-md-3 col_bg">
                        <h3 class="mt-lg-3 mt-xl-4">Pay Per Sale</h3>
                        <h2>UP TO $50</h2>
                    </div>
                    <div class="col-6 col-md-3 col_bg">
                        <h3 class="mt-lg-3 mt-xl-4">Iframe Trial Sales</h3>
                        <h2>UP TO $35</h2>
                    </div>
                    <div class="col-6 col-md-3 col_bg">
                        <h3 class="mt-lg-3 mt-xl-4">Pay Per Trial</h3>
                        <h2>UP TO $35</h2>
                    </div>
                </div>
            </div><!-- container -->
        </div>
    </div><!-- hero -->
    <div class="row text-center chat_section section py-3 py-md-5" id="chat">
        <div class="col-12">
            <div class="container">
                <h2>ML Chat</h2>
                <h4>Earn big money chatting! We have multiple offers, provide weekly payouts, and have multiple payment methods.</h4>
                <h3 class="mt-5 mb-3">How does it work?</h3>
                <div class="row">
                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                        <div class="arrow">
                            <img src="{{ url('/storage/images/moneylovers/icon_arrow.png') }}"  alt="" />
                        </div>
                        <h4>Start <span>Chatting</span></h4>
                        <img class="img-fluid" src="{{ url('/storage/images/moneylovers/icon_start_chatting.png') }}"  alt="" />
                    </div>
                    <div class="col-6 col-md-3 mb-3 mb-md-0">
                        <div class="arrow d-none d-md-block">
                            <img src="{{ url('/storage/images/moneylovers/icon_arrow.png') }}"  alt="" />
                        </div>
                        <h4>Get Your <span>Offer Links</span></h4>
                        <img class="img-fluid" src="{{ url('/storage/images/moneylovers/img_offerlink.png') }}"  alt="" />
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="arrow">
                            <img src="{{ url('/storage/images/moneylovers/icon_arrow.png') }}"  alt="" />
                        </div>
                        <h4>Promote <span>Your Links</span></h4>
                        <img class="img-fluid" src="{{ url('/storage/images/moneylovers/icon_promote_link.png') }}"  alt="" />
                    </div>
                    <div class="col-6 col-md-3">
                        <h4>Get <span>Paid</span></h4>
                        <img class="img-fluid" src="{{ url('/storage/images/moneylovers/icon_getpaid.png') }}"  alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div><!-- chat_section -->

    <div class="row mail_section section text-center py-3 py-md-5" id="mail">
        <div class="col-12">
            <div class="container">
                <h2>ML Mail</h2>
                <h4>Monetize Your Data with Moneylovers Email delivery</h4>
                <div class="row mt-5">
                    <div class="col-12">
                        <h3 class="mb-3 text-left">What Can You Expect From MoneyLovers Mail?</h3>
                        <div class="row">
                            <div class="col-12 col-md-9 text-left">
                                <p>The bottom line is this; we offer a no BS, fully functional, fully managed data delivery solution to generate the maximum revenue possible. Start and stop as you wish, but once you start you won't want to stop.</p>
                                <p>There are never any fees to use our service, we simply split all revenue generated from your delivered campaigns 50/50. We handle everything from managing your campaigns, to keeping servers and IP reputation up, we monitor delivery to stay inboxing through various ISPs, and the list goes on. Our goal is to create great partnerships with solid internet marketers and generate a great source of revenue for everyone involved. After working so hard to collect your data, isn't it time to sit back and reap all the benefits? We think so, and we're here to help! Put your trust in us, kick back and watch the revenue begin to flow! </p>
                            </div>
                            <div class="col-12 col-md-3 media">
                                <img class="mx-auto img-fluid align-self-center" src="{{ url('/storage/images/moneylovers/img_money.png') }}"  alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-left">
                        <h3 class="mb-3">Amazing Services For Awesome Clients</h3>
                        <div class="row">

                            <ul class="list-unstyled col-12 col-lg-6 mb-0 mb-lg-auto">
                                <li>
                                    <p>Campaign monitoring and management</p>
                                </li>
                                <li>
                                    <p>Server and IP reputation monitoring</p>
                                </li>
                                <li>
                                    <p>Daily delivery of your data to converting offers</p>
                                </li>
                            </ul>
                            <ul class="list-unstyled col-12 col-lg-6">
                                <li>
                                    <p>Data delivery reports including opens and clicks</p>
                                </li>
                                <li>
                                    <p>Easy API setup to submit live data directly to us</p>
                                </li>
                                <li>
                                    <p>One on one support for all of our clients</p>
                                </li>
                            </ul>

                        </div><!-- row -->
                    </div><!-- co-12 -->
                </div><!-- row -->

                <div class="row mt-5">
                    <div class="col-12 text-left">
                            <h3 class="mb-3">Put Your Trust In Money Lovers!</h3>
                            <div class="row">
                                <div class="col-12 col-md-9">
                                    <p>We have helped countless clients increase their bottom lines by remarketing data they are already generating. Our hands on, reliable, no BS support is here to help you get set up. After the initial set up, all you really need to do other than your typical day to day traffic generation and auto API submission into our system is check your bank deposits twice a month! </p>
                                    <p>We will give you full access to stats tracking so you can monitor as little or as often as you like. Payments are made bi-monthly via Payoneer or Wire Transfer. Take a moment to Contact Us DO NOT JUST SIT ON YOUR VALUABLE DATA!</p>
                                </div>
                                <div class="col-12 col-md-3 media">
                                    <img class="mx-auto img-fluid align-self-center" src="{{ url('/storage/images/moneylovers/icon_trust.png') }}" alt="" />
                                </div>
                            </div>
                    </div>
                </div><!-- row -->

                <div class="row text-left mt-5">
                    <div class="col-12">
                        <h3 class="mb-3">We Offer Comprehensive, Honest and Upfront Support</h3>
                        <div class="row">
                            <div class="col-12 col-md-3 text-center media">
                                <img class="mx-auto img-fluid align-self-center" src="{{ url('/storage/images/moneylovers/icon_upfront.png') }}" alt="" />
                            </div>
                            <div class="col-12 col-md-9">
                                <p>MoneyLovers Mail is always here to serve you! We will provide any feedback you require and quickly address any issues that arise so you can feel comfortable that we are on top of your data! We offer 24/7 chat via Skype to all of our clients which allows you to reach out to us at any time. </p>
                                <p>Awesome campaigns keep customer service needs low and revenue up!</p>
                                <p>Bi-monthly payouts, on time, every time, whenever your leads convert!</p>
                                <p>Top notch client support to make sure your needs are always met!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- container -->
        </div>
    </div><!-- mail_section -->



    <div class="row signup_section section pb-3 pb-md-5 text-center" id="signup">
        <div class="col-12">
            <div class="row payment_section section py-3 py-md-5 text-center">
                <div class="col-12">
                    <div class="container">
                        <h4>Weekly payouts with no hold! <span>Fast payments!</span></h4>
                        <h4 class="mb-4">Earn On Free Trial and Pay Per Sale Memberships!</h4>
                        <div class="row">
                            <div class="col-6">
                                <img class="ml-auto float-right img-fluid" src="{{ url('/storage/images/moneylovers/logo_bank_wire.png') }}" alt="" />
                            </div>
                            <div class="col-6 pl-0">
                                <img class="mr-auto float-left img-fluid" src="{{ url('/storage/images/moneylovers/logo-paypal.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h2 class="mt-3 mt-md-5">Money Lovers Affiliate Signup</h2>
                <h4>
                    Attention new affiliates!! For your new affiliate registration, please fill out the form below. Make sure you provide as much detailed information as possible so we can assist you to get started with your traffic and earning money asap!
                    <a class="scroll" href="#contact">Contact Us</a> with questions.
                </h4>
                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled m-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row text-left mt-5">
                    <div class="col-12">
                        <form action="/ml-create" method="post">
                            {{ csrf_field() }}

                            <p>Company Information</p>
                            <div class="form-row pl-4 pr-4">
                                <div class="form-group col-md-6">
                                    <label for="company">Company Name <sup>*</sup></label>
                                    <input type="text" class="form-control @if ($errors->has('company')) border_error @endif" id="company" name="company" value="{{ old('company') }}" required>

                                    @if ($errors->has('company'))
                                        <span class="row">
                                            <span class="col-12 text-danger">
                                                <small><strong>{{ $errors->first('company') }}</strong></small>
                                            </span>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">City <sup>*</sup></label>
                                    <input type="text" class="form-control @if ($errors->has('city')) border_error @endif" id="city" name="city" value="{{ old('city') }}" required>
                                    @if ($errors->has('city'))
                                        <span class="row">
                                            <span class="col-12 text-danger">
                                                <small><strong>{{ $errors->first('city') }}</strong></small>
                                            </span>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row pl-4 pr-4">
                                <div class="form-group col-md-6">
                                    <label for="address">Address <sup>*</sup></label>
                                    <input type="text" class="form-control @if ($errors->has('address')) border_error @endif" id="address" name="address" value="{{ old('address') }}" required>
                                    @if ($errors->has('address'))
                                        <span class="row">
                                            <span class="col-12 text-danger">
                                                <small><strong>{{ $errors->first('address') }}</strong></small>
                                            </span>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="address2">Address 2</label>
                                    <input type="text" class="form-control" id="address2" name="address2" value="{{ old('address2') }}">
                                </div>
                            </div>
                            <div class="form-row pl-4 pr-4">
                                <div class="form-group col-md-6">
                                    <label for="state">State <sup>*</sup></label>
                                    <input type="text" class="form-control @if ($errors->has('state')) border_error @endif" id="state" name="state" value="{{ old('state') }}" required>
                                    @if ($errors->has('state'))
                                        <span class="row">
                                            <span class="col-12 text-danger">
                                                <small><strong>{{ $errors->first('state') }}</strong></small>
                                            </span>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="postcode">Zip/Postcode <sup>*</sup></label>
                                    <input type="text" class="form-control @if ($errors->has('postcode')) border_error @endif" id="postcode" name="postcode" value="{{ old('postcode') }}" required>
                                    @if ($errors->has('postcode'))
                                        <span class="row">
                                            <span class="col-12 text-danger">
                                                <small><strong>{{ $errors->first('postcode') }}</strong></small>
                                            </span>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row pl-4 pr-4">
                                <div class="form-group col-md-6">
                                    <label for="country">Country <sup>*</sup></label>
                                    <select class="bfh-countries w-100 bg-white @if ($errors->has('country')) border_error @endif" data-country="US" id="country" name="country" required></select>
                                    @if ($errors->has('country'))
                                        <span class="row">
                                            <span class="col-12 text-danger">
                                                <small><strong>{{ $errors->first('country') }}</strong></small>
                                            </span>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="website">Corporate Website</label>
                                    <input type="text" class="form-control" id="website" name="website" value="{{ old('website') }}">
                                </div>
                            </div><!-- company information -->

                            <p class="mt-4">Marketing Information</p>
                            <div class="form-row pl-4 pr-4">
                                <div class="form-group col-md-6">
                                    <label for="model">Payment Model</label>
                                    <select class="w-100 bg-white" id="model" name="model">
                                        <option value="1" @if (old('model') == 1 || old('model') == "") selected @endif  >CPA</option>
                                        <option value="2" @if (old('model') == 2) selected @endif>CPC</option>
                                        <option value="3" @if (old('model') == 3) selected @endif>CPM</option>
                                        <option value="4" @if (old('model') == 4) selected @endif>Fixed</option>
                                        <option value="5" @if (old('model') == 5) selected @endif>RevShare</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="category1">Primary Category</label>
                                    <select class="w-100 bg-white" id="category1" name="category1">
                                        <option value="13" @if (old('category1') == 2 || old('category1') == "") selected @endif>Dating</option>
                                        <option value="1" @if (old('category1') == 1) selected @endif>BizOp</option>
                                        <option value="3" @if (old('category1') == 3) selected @endif>Financial</option>
                                        <option value="4" @if (old('category1') == 4) selected @endif>Free Giveaways</option>
                                        <option value="5" @if (old('category1') == 5) selected @endif>Health and Beauty</option>
                                        <option value="6" @if (old('category1') == 6) selected @endif>Retail</option>
                                        <option value="7" @if (old('category1') == 7) selected @endif>Social Networking</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row pl-4 pr-4">
                                <div class="form-group col-md-6">
                                    <label for="comments">Comments</label>
                                    <textarea class="w-100" name="comments" id="comments" rows="3" >{{ old('comments') }}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="category2">Secondary Category</label>
                                    <select class="w-100 bg-white" id="category2" name="category2">
                                        <option value="13" @if (old('category2') == 2 || old('category2') == "") selected @endif>Dating</option>
                                        <option value="1" @if (old('category2') == 1) selected @endif>BizOp</option>
                                        <option value="3" @if (old('category2') == 3) selected @endif>Financial</option>
                                        <option value="4" @if (old('category2') == 4) selected @endif>Free Giveaways</option>
                                        <option value="5" @if (old('category2') == 5) selected @endif>Health and Beauty</option>
                                        <option value="6" @if (old('category2') == 6) selected @endif>Retail</option>
                                        <option value="7" @if (old('category2') == 7) selected @endif>Social Networking</option>
                                    </select>
                                </div>
                            </div><!-- marketing information -->

                            <p>Contact Information</p>
                            <div class="form-row pl-4 pr-4">
                                <div class="form-group col-md-6">
                                    <label for="jobTitle">Job title</label>
                                    <input type="text" class="form-control" id="jobTitle" name="jobTitle" value="{{ old('jobTitle') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Work Phone <sup>*</sup></label>
                                    <input type="text" class="form-control  @if ($errors->has('phone')) border_error @endif" id="phone" name="phone" value="{{ old('phone') }}" required>

                                    @if ($errors->has('phone'))
                                        <span class="row">
                                            <span class="col-12 text-danger">
                                                <small><strong>{{ $errors->first('phone') }}</strong></small>
                                            </span>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row pl-4 pr-4">
                                <div class="form-group col-md-6">
                                    <label for="firstName">First Name <sup>*</sup></label>
                                    <input type="text" class="form-control @if ($errors->has('firstName')) border_error @endif" id="firstName" name="firstName" value="{{ old('firstName') }}" required>
                                    @if ($errors->has('firstName'))
                                        <span class="row">
                                            <span class="col-12 text-danger">
                                                <small><strong>{{ $errors->first('firstName') }}</strong></small>
                                            </span>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastName">Last Name <sup>*</sup></label>
                                    <input type="text" class="form-control @if ($errors->has('lastName')) border_error @endif" id="lastName" name="lastName" value="{{ old('lastName') }}" required>
                                    @if ($errors->has('lastName'))
                                        <span class="row">
                                            <span class="col-12 text-danger">
                                                <small><strong>{{ $errors->first('lastName') }}</strong></small>
                                            </span>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row pl-4 pr-4">
                                <div class="form-group col-md-6">
                                    <label for="cell">Cell Phone</label>
                                    <input type="text" class="form-control" id="cell" name="cell" value="{{ old('cell') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fax">Fax</label>
                                    <input type="text" class="form-control" id="fax" name="fax" value="{{ old('fax') }}">
                                </div>
                            </div>

                            <div class="form-row pl-4 pr-4">
                                <div class="form-group col-md-6">
                                    <label for="email">Email <sup>*</sup></label>
                                    <input type="email" class="form-control @if ($errors->has('email')) border_error @endif" id="email" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="row">
                                            <span class="col-12 text-danger">
                                                <small><strong>{{ $errors->first('email') }}</strong></small>
                                            </span>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="im">IM <sup>*</sup></label>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4 mb-md-0">
                                            <input type="text" class="form-control @if ($errors->has('imName')) border_error @endif" id="imNme" name="imName" value="{{ old('imName') }}" required>
                                            @if ($errors->has('imName'))
                                                <span class="row">
                                                    <span class="col-12 text-danger">
                                                        <small><strong>{{ $errors->first('imName') }}</strong></small>
                                                    </span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <select class="w-100 bg-white" id="imService" name="imService">
                                                <option value="Skype" selected>Skype</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- contact information -->

                            <p class="mt-4">Payment Information</p>
                            <div class="form-row pl-4 pr-4">
                                <div class="form-group col-md-6">
                                    <label for="tax-class">Tax Class <sup>*</sup></label>
                                    <select class="w-100 bg-white" id="tax-class" name="tax-class" required>
                                        <option value="Individual/Sole Proprietor" @if (old('tax-class') == 2 || old('tax-class') == "") selected @endif>Individual/Sole Proprietor</option>
                                        <option value="Corporation" @if (old('tax-class') == "Corporation") selected @endif>Corporation</option>
                                        <option value="Partners/LLC/LLP" @if (old('Partners/LLC/LLP') == 7) selected @endif>Partners/LLC/LLP</option>
                                        <option value="Other" @if (old('Other') == 7) selected @endif>Other</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="payment">Payment To <sup>*</sup></label>
                                    <select class="w-100 bg-white" id="payment" name="payment" required>
                                        <option value="1" selected>Main Contact</option>
                                        <option value="0">Company Name</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="ssn">SSN/Tax ID <sup>*</sup></label>
                                    <input type="text" class="form-control @if ($errors->has('ssn')) border_error @endif" id="ssn" name="ssn" value="{{ old('ssn') }}" required>
                                    @if ($errors->has('ssn'))
                                        <span class="row">
                                                    <span class="col-12 text-danger">
                                                        <small><strong>{{ $errors->first('ssn') }}</strong></small>
                                                    </span>
                                                </span>
                                    @endif
                                </div>
                            </div><!-- marketing information -->

                            <button type="submit" class="rounded-pill py-2 px-4 mt-5">Submit Signup</button>
                            <h5 class="mt-3 ml-1">By clicking "Submit Signup" below, you agree to our <a target="_blank" href="/ml-terms?t=2">Terms of Service</a>.</h5>
                        </form>

                    </div>
                </div>
            </div><!-- container -->

        </div><!-- col-12 -->
    </div><!-- signup_section -->

    <div class="row contact_section section py-3 py-md-5 text-center" id="contact">
        <div class="col-12">
            <div class="container">
                <h2>Contact Us</h2>
                <h4>If you have any questions or issues, please feel free to contact our staff. We value our affiliates and strive to provide the best support possible. You can contact any of our representatives via the contact methods below. We will be more than happy to help you in any way that we can, and we look forward to speaking with you.</h4>

                <div class="row contact_content text-left mt-5">
                    <div class="col-12">
                        <h3>Management</h3>
                        <p class="d-inline-block ml-4">Jeff</p>
                        <div class="contact_box row ml-4 mr-4 mr-md-auto py-2">
                            <div class="col-12 col-md-4 col-lg-3 media">
                                <img class="img-fluid my-auto mr-2" src="{{ url('/storage/images/moneylovers/icon_mail.png') }}" alt="">
                                <a class="media-body" href="mailto:jeff@moneylovers.com">jeff@moneylovers.com</a>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 pt-1 pt-md-0 media">
                                <img class="img-fluid my-auto mr-2" src="{{ url('/storage/images/moneylovers/icon-skype.png') }}" alt="">
                                <a class="media-body" href="skype:moneylovers.jeff?add">moneylovers.jeff</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row contact_content text-left mt-4">
                    <div class="col-12">
                        <h3>Affiliate Manager</h3>
                        <p class="d-inline-block ml-4">Matteo</p>
                        <div class="contact_box row ml-4 mr-4 mr-md-auto py-2">
                            <div class="col-12 col-md-4 col-lg-3 media">
                                <img class="img-fluid my-auto mr-2" src="{{ url('/storage/images/moneylovers/icon_mail.png') }}" alt="">
                                <a class="media-body" href="mailto:matteo@moneylovers.com">matteo@moneylovers.com</a>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 pt-1 pt-md-0 media">
                                <img class="img-fluid my-auto mr-2" src="{{ url('/storage/images/moneylovers/icon-skype.png') }}" alt="">
                                <a class="media-body" href="skype:moneylovers.matteo?add">moneylovers.matteo</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- contact_section -->

@endsection
