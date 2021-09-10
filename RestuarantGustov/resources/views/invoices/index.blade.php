@include('dashboard.links');
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <section id="dashboard-ecommerce">
                    <div class="row">
                        <div class="col-lg-12 col-xl-14 user-details-card">
                            <div class="card widget-user-details"> 
                                <div class="card-header">
                                    <div class="card-title-details d-flex align-items-center">
                                       
                                         <div class="dashboard-content-right">
                                                  <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                                        <lord-icon
                                                            src="https://cdn.lordicon.com/nocovwne.json"
                                                            trigger="loop"
                                                            colors="primary:#121331,secondary:#1663c7"
                                                            style="width:180px;height:180px">
                                                        </lord-icon>
                                         </div>
                                        <div>
                                            <h5>LIST MENÚ</h5><br>
                                            @if(Session::has('note'))
                                                {{ Session::get('note') }}
                                                @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div Class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tbody>
                                              
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
