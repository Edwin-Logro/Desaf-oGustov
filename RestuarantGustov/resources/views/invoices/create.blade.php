
@include('dashboard.links');
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <section id="dashboard-ecommerce">
                    <div class="row">
                        <div class="col-lg-12 col-xl-10 user-details-card">
                            <div class="card widget-user-details"> 
                                <div class="card-header">
                                    <div class="card-title-details d-flex align-items-center">
                                       <tbody>
                                       <form class="form form-vertical " action="/invoice" method="post" enctype="multipart/form-data">                                         
                                        {{csrf_field()}}      
            <section>
                    <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-12">

                                                        <div class="card faq-bg bg-transparent box-shadow-0 p-1 p-md-5">
                                                        @csrf     
                                                        <fieldset class="faq-search-width form-group position-relative w-20 mx-auto">
                                                        <h1>SALE</h1>
                                                        </fieldset>
                                                        <fieldset class="faq-search-width form-group position-relative w-20 mx-auto">
                                                        <lord-icon
                                                            src="https://cdn.lordicon.com/imamsnbq.json"
                                                            trigger="loop"
                                                            colors="primary:#121331,secondary:#1663c7"
                                                            style="width:250px;height:250px">
                                                        </lord-icon>
                                                                </lord-icon>  
                                                            </fieldset>
                                                            <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                                                                            
                                                                            <label for="first-name-icon">Customer</label>
                                                                            <input type="text" class="form-control round form-control-lg shadow pl-2" name="name" id="name" placeholder="Name">
                                                                        </fieldset>
                                                                        <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                                            <label for="first-name-icon">Nit</label>
                                                                            <input type="text" class="form-control round form-control-lg shadow pl-2" name="nit"id="nit" placeholder="Nit">
                                                                        </fieldset>
                                                                        <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                                            <label for="first-name-icon">CI</label>
                                                                            <input type="textarea" class="form-control round form-control-lg shadow pl-2" name="ci" id="ci" placeholder="Ci">
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                </div>
                                                                    
                    </section>
                    <h1>MENÚS</h1>
                    <!-- // Basic Horizontal form layout section end -->
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                        <th>estado</th>
                                        <th>Add Quantyti</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($menus as $menu)
                                    <tr> 
                                    
                                    <tr> 
                                        <td>
                                       <input type="number" name="number[]" class="form-control" id="number" placeholder="quantity" >
                                    
                                        </td>     
                                        </td>
                                        <td>
                                        <input type="hidden" name="id[]" class="form-control" id="id" value="{{ $menu->id }}" >{{ $menu->id }}
                                        </td>
                                        <td><input type="hidden" name="nameMenu[]" class="form-control" id="nameMenu" value="{{ $menu->nameMenu }}">{{ $menu->nameMenu }}
                                        </td>
                                        <td><input type="hidden" name="price[]" class="form-control" id="preci" value="{{ $menu->price }}">{{ $menu->price }}
                                        </td>
                                        <td><input type="hidden" name="description[]" class="form-control" id="name" value="{{ $menu->description }}" >{{ $menu->description }}
                                        </td>
                                        <td><input type="hidden" name="photo[]" class="form-control" id="name" value="{{ $menu->photo }}" ><img src="{{ asset('storage').'/'.$menu->photo}}" height="150" width="150" alt="">
                                        </td>
                                    
                                        @if($menu->state==1)
                                        <td>
                                        <span class="badge badge-light-success badge-pill ml-50">ACTIVE</span>
                                        </td>
                                        @else
                                        <td> <span class="badge badge-light-danger badge-pill ml-50">DESACTIVE</span>
                                    </td>   
                                        @endif
                                        <td> 
                                        
                                    </tr>
                                    @endforeach  
                                                                    
                                </tbody>
                            </table>
                            <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">                                          
                            <button type="submit" class="btn btn-primary mr-1 mb-1">ADD SALE</button>
                            </fieldset> 

        </form>
                                              
                                        </tbody>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
