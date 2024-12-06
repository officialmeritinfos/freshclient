@extends('user.base')
@section('content')

    <div class="pricing-area">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @foreach($packages as $package)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-pricing-card">
                            <div class="pricing-bar">
                                <span>{{$package->name}}</span>
                                <h2>{{$package->roi}}%  <sub>/ {{$package->returnTypes->name}}</sub></h2>
                            </div>

                            <div class="price-list">
                                <ul>
                                    <li><b>Minimum</b>  ${{number_format($package->minAmount,2)}}</li>
                                    <li><b>Maximum</b> @if($package->unlimited !=1)
                                            ${{number_format($package->maxAmount,2)}}
                                        @else
                                            Unlimited
                                        @endif
                                    </li>
                                    <li><b>{{$package->returnTypes->name}} returns</b> at {{$package->roi}}%</li>
                                    <li><b>Referral bonus</b> {{$package->referral}}%</li>
                                    <li><b>Contract</b> {{$package->Duration}}</li>
                                    <li><b>Total</b> {{$package->roi*$package->numberOfReturns}}%</li>
                                </ul>

                                <a href="{{ route('new_investment.select',['id'=>$package->id]) }}" class="default-btn">
                                    Choose plan
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
