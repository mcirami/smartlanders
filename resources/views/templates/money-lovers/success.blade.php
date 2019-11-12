@extends('templates.money-lovers.layouts.header')


@section('content')
    <div class="row pb-3 pb-md-5 section success_section ml_page_wrap">
        <div class="col-12">
            <div class="container">
                <h2 class="text-center">Registered Successfully!!</h2>
                <div class="row">
                    <div class="col-12 box p-4 my-4">
                        <h4>Thank you for registering with Money Lovers!</h4>
                        <h4>Please contact Matteo on Skype at <a href="skype:moneylovers.matteo?add">moneylovers.matteo</a> for your account to be approved.</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>If you have any questions or issues, please feel free to contact our staff. We will be more than happy to help you in any way that we can, and we look forward to speaking with you.</p>
                    </div>
                </div>
                <div class="row contact_content text-left mt-4">
                    <div class="col-12">
                        <h3>Affiliate Managers</h3>
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
    </div>

@endsection
