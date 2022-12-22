<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Tested</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ $testedcas[0]->tested }}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-white text-white rounded-circle shadow">
                                        
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-warning mr-2"><i class="fa fa-arrow-up"></i> {{ $caslastmounth[1]->nb ?? 0 }}</span>
                                <span class="text-nowrap">Aujourd'hui</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Confirmed</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ $confirmedcas[0]->conf }}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-white text-white rounded-circle shadow">
                                        
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-danger mr-2"><i class="fas fa-arrow-up"></i>{{ $caslastmounth[0]->nb ?? 0 }}</span>
                                <span class="text-nowrap">Aujourd'hui</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Death</h5>
                                    <span class="h2 font-weight-bold mb-0"> {{ $decescas[0]->death }}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-white text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-danger mr-2"><i class="fas fa-arrow-up"></i> {{ $caslastmounth[2]->nb ?? 0 }}</span>
                                <span class="text-nowrap">Aujourd'hui</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0"> Guerison</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ $gueriscas[0]->guer }}</span>
                                </div>
                                <div class="col-auto">
                                  
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-success mr-2"> <i class="fa fa-arrow-up"></i> {{ $caslastmounth[2]->nb ?? 0 }}</span>
                                <span class="text-nowrap">Aujourd'hui</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>