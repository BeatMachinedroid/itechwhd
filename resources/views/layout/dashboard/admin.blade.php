@section('content')
    <div class="page-header">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-2">Welcome iTech Helpdesk</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card board1 fill">
                <a href="{{route('history')}}" class="menu">
                    <div class="card-body ">
                        <div class="dash-widget-header">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    ticket
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-500">{{ $count }}</div>
                            </div>
                            <div class="col-auto">

                                <i class="fas fa-book fa-2x text-gray-200"></i>
                            </div>
                        </div>

                    </div>
                </a>
            </div>

        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card board1 fill">
                <a href="{{ route('aset') }}">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    Asset</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count1 }}</div>
                            </div>
                            <div class="col-auto">

                                <i class="fas fa-cube fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card board1 fill">
                <a href="{{route('faq')}}">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">FAQs
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $count2 }}</div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>

                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card board1 fill">
                @if (Auth::user()->role == 'viewers / audience')
                <a href="">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    Account</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-500">{{ $count3 }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user"></i>
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
                @else
                <a href="{{route('pegawai')}}">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    Account</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-500">{{ $count3 }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user"></i>
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">Area Loket</h4> </div>
                <div class="card-body">
                    <div id="bar-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">Area Loket</h4> </div>
                <div class="card-body">
                    <div id="donut-chart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

