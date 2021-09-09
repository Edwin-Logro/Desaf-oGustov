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
                                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>Photo</th>
                                                                <th>Name</th>
                                                                <th>Price</th>
                                                                <th>Description</th>
                                                                <th>State</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                        
                                                        <tbody>
                                                            @foreach($menus as $menu)
                                                            <tr> 
                                                                <td>
                                                              
                                                                <img src="{{ asset('storage').'/'.$menu->photo}}" height="150" width="150" alt="">
                                                               
                                                            </td>
                                                                <td>{{$menu['name']}}</td>
                                                                <td>{{$menu['price']}}</td>
                                                                <td>{{$menu['description']}}</td>
                                                               
                                                                @if($menu->state==1)
                                                                <td>
                                                                <span class="badge badge-light-success badge-pill ml-50">ACTIVE</span>
                                                                </td>
                                                                @else
                                                                <td> <span class="badge badge-light-danger badge-pill ml-50">DESACTIVE</span>
                                                            </td>   
                                                                @endif
                                                                <td> 
                                                                  <a href="{{url('/menu/'.$menu->id.'/edit')}}"><h1  class="bx bx-edit-alt"></h1><br><br>
                                                                  <form action="{{url('/menu/'.$menu->id) }}" method="post">
                                                                    @csrf
                                                                    {{method_field('DELETE')}}
                                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete menu?')" class="btn btn-icon btn-danger rounded-circle" type="button" data-repeater-delete="">
                                                                    <i class="bx bx-x"></i>
                                                                    </button></a>
                                                                   
                                                                  </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach                  
                                                        </tbody>
                                            </table>
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
