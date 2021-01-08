<x-layouts.clean :title="__('trans.Register Page Title')">

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">

            <div class="card overflow-hidden">
                <div class="bg-soft-primary">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-4">
                                <h5 class="text-primary">{{ __('trans.Register Page Title') }}</h5>
                                <p>{{ __('trans.Register Page Sub Title') }}</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ url('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0"> 
                    <div>
                        <a href="{{ route('home') }}"">
                            <div class="avatar-md profile-user-wid mb-4">
                                <span class="avatar-title rounded-circle bg-light">
                                    <img src="{{ url('assets/images/logo.svg') }}" alt="" class="rounded-circle" height="34">
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-2">
                        {{ Aire::open()->route('register')->post() }}

                            {{ 
                                Aire::input('name', __('validation.attributes.name'))
                                ->required()
                                ->groupClass('form-group')
                            }}

                            {{ 
                                Aire::email('email', __('validation.attributes.email'))
                                ->required()
                                ->groupClass('form-group')
                            }}

                            {{ 
                                Aire::password('password', __('validation.attributes.password'))
                                ->required()
                                ->groupClass('form-group')
                            }}

                            {{ 
                                Aire::password('password_confirmation', __('validation.attributes.password_confirmation'))
                                ->required()
                                ->groupClass('form-group')
                            }}
                            
                            <div class="mt-3">
                                {{
                                    Aire::button()
                                    ->labelHtml(__('trans.Register Page Button'))
                                    ->addClass('btn-primary btn-block')
                                }}
                            </div>
                        
                        {{ Aire::close() }}
                    </div>

                </div>
            </div>

            <div class="mt-5 text-center">
                <div>
                    <p>{{ __('trans.Register Page Have Account') }} <a href="{{ route('login') }}" class="font-weight-medium text-primary">{{ __('trans.Login Page Title') }}</a> </p>
                </div>
            </div>

        </div>
    </div>
    
</x-layouts.clean>