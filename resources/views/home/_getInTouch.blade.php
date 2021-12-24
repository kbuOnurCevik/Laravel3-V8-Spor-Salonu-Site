@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

<!-- Get In Touch Section Begin -->
<div class="gettouch-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-map-marker"></i>
                    <p>{{$setting->address}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-mobile"></i>
                    <ul>
                        <li>Phone : {{$setting->phone}}</li>
                        <li>Fax : {{$setting->fax}}</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text email">
                    <i class="fa fa-envelope"></i>
                    <p>{{$setting->email}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Get In Touch Section End -->
