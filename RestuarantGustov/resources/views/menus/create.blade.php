@include('dashboard.links');
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <section id="dashboard-ecommerce">
                    <div class="row">
                        <div class="col-lg-12 col-xl-8 user-details-card">
                            <div class="card widget-user-details">
                                <div class="card-header">
                                    <div class="card-title-details d-flex align-items-center">
                                       
                                         <div class="dashboard-content-right">
                                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                                <lord-icon
                                                    src="https://cdn.lordicon.com/coqbeapw.json"
                                                    trigger="loop"
                                                    colors="primary:#121331,secondary:#1663c7"
                                                    style="width:180px;height:180px"
                                                    class="img-fluid">
                                                </lord-icon>
                                         </div>
                                      
                                        <div>
                                            <h5>REGISTER NEW MENÚ</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div Class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tbody>
                                                <form class="form form-vertical " action="{{url('/menu') }}" method="post" enctype="multipart/form-data">
                                                 @csrf
                                                                    <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                                        <label for="first-name-icon">Name</label>
                                                                        <input type="text" class="form-control round form-control-lg shadow pl-2" name="name" id="name" placeholder="Register Name">
                                                                    </fieldset>
                                                                    <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                                        <label for="first-name-icon">Price</label>
                                                                        <input type="text" class="form-control round form-control-lg shadow pl-2" name="price"id="price" placeholder="Register Price">
                                                                    </fieldset>
                                                                    <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                                        <label for="first-name-icon">Description</label>
                                                                        <input type="textarea" class="form-control round form-control-lg shadow pl-2" name="description" id="description" placeholder="Register Description">
                                                                    </fieldset>
                                                                    <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                                        <label for="first-name-icon">Photo</label>
                                                                         <input type="file"  name="photo" id="photo">
                                                                    </fieldset>
                                                                    <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                                        <br>
                                                                        <label for="first-name-icon">State</label>
                                                                        <br><br>

                                                                                <div class="form-check form-check-inline">
                                                                                    <input type="radio" class="form-check-input" id="state" name="state" value="1" checked>
                                                                                    <label class="form-check-label" for="materialInline1">Active</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input type="radio" class="form-check-input" id="state" name="state" value="0">
                                                                                    <label class="form-check-label" for="materialInline2">Inactive</label>
                                                                                </div>
                                                                    </fieldset>
                                                                    <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                                                    
                                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Guardar</button>
                                                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Cancelar</button>
                                                                   </fieldset>        
                                                    </form>
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