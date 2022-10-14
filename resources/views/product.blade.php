 @extends('pages/design')
 @section('content')
     @include('include/categoryinclude')
     <div class="row">
         <div class="col-12 py-5">
         </div>
     </div>
     <div class="">
         <div class="table-wrapper">
             <div class="table-title">
                 <div class="row">
                     <div class="col-sm-12 text-center">
                         <h4>Product Table</h4>
                         <div class="btn-group" data-toggle="buttons">
                             <label class="btn btn-dark btn-rounded">
                                 <input type="radio" name="status" value="all" checked="checked"> Displayall
                             </label>
                             <label class="btn btn-success btn-rounded">
                                 <input type="radio" name="status" value="active"> Recently Added Data
                             </label>
                             <label class="btn btn-info btn-rounded">
                                 <input type="radio" name="status" value="inactive"> Updated Data
                             </label>
                             <label class="btn btn-danger btn-rounded">
                                 <input type="radio" name="status" value="expired"> Deleted Data
                             </label>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div col-4></div>
                 <div col-4></div>
                 <div class="col-4" id="success_message"></div>
             </div>
             <br>
             <div class="row">
                 <div class="col-2">
                     <h6> <button type="button" class="btn btn-success has-icon btn-block mt-0" data-toggle="modal"
                             data-target="#addproduct">
                             <i class="mdi mdi-cart-plus"></i>Add Product</button></h6>
                 </div>
                 <div class="col-2">
                     <h6> <button type="button" class="btn btn-success has-icon btn-block mt-0" data-toggle="modal"
                             data-target="#addcategory">
                             <i class="mdi mdi-cart-plus"></i>Additional</button></h6>
                 </div>
             </div>
             <table class="table table-striped table-hover">
                 <thead>
                     <tr>
                         <th>#</th>
                         <th>Adres</th>
                         <th>Oluşturulma&nbsp;Tarih</th>
                         <th>Durum</th>
                         <th>Güncel&nbsp;Konum</th>

                     </tr>
                 </thead>
                 <tbody>
                     <tr data-status="active">
                         <td>1</td>
                         <td><a href="#">loremvallis.com</a></td>
                         <td>04/10/2013</td>
                         <td><span class="label label-success">Aktif</span></td>
                         <td>Buenos Aires</td>
                     </tr>
                     <tr data-status="inactive">
                         <td>2</td>
                         <td><a href="#">quisquamut.net</a></td>
                         <td>05/08/2014</td>
                         <td><span class="label label-dark">Aktif Değil</span></td>
                         <td>Australia</td>
                     </tr>
                     <tr data-status="active">
                         <td>3</td>
                         <td><a href="#">convallissed.com</a></td>
                         <td>11/05/2015</td>
                         <td><span class="label label-success">Aktif</span></td>
                         <td>Birleşik Krallık</td>
                     </tr>
                     <tr data-status="expired">
                         <td>4</td>
                         <td><a href="#">phasellusri.org</a></td>
                         <td>06/09/2016</td>
                         <td><span class="label label-danger">Dolmuş</span></td>
                         <td>Romanya</td>
                     </tr>
                     <tr data-status="expired">
                         <td>4</td>
                         <td><a href="#">phasellusri.org</a></td>
                         <td>06/09/2016</td>
                         <td><span class="label label-danger">Dolmuş</span></td>
                         <td>Romanya</td>
                     </tr>
                     <tr data-status="expired">
                         <td>4</td>
                         <td><a href="#">phasellusri.org</a></td>
                         <td>06/09/2016</td>
                         <td><span class="label label-danger">Dolmuş</span></td>
                         <td>Romanya</td>
                     </tr>
                     <tr data-status="inactive">
                         <td>5</td>
                         <td><a href="#">facilisleo.com</a></td>
                         <td>12/08/2017</td>
                         <td><span class="label label-dark">Aktif Değil</span></td>
                         <td>Almanya</td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </div>

     <form action="">
         <div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="addproduct"
             aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="addproduct">PRODUCT</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                         <button type="button" style="border: none;"><i class=" reload mdi mdi-reload"></i></button>
                     </div>
                     <div class="modal-body">
                         <div class="row">
                             <div class="col-3">
                                 <img class=" image text-center rounded-circle"
                                     src="/assets/images/profile/male/image_1.jpg" alt="profile image"
                                     style="width:200px; height:200px;">
                             </div>
                             <div class="col-1"></div>
                             <div class="col-3">
                                 <label for="cars">Product Category:</label>
                                 <select name="cars" class="pcategoryadd form-control border-success">
                                     @foreach ($category as $item)
                                         <option value="{{ $item->category }}">
                                             {{ $item->category }}
                                         </option>
                                     @endforeach
                                 </select>
                                 <label for="">Product Information Log</label>
                                 <input type="text" class="pnameadd form-control border-success"
                                     placeholder="Product Name">
                                 <input type="number" class="ppriceadd form-control border-success"
                                     placeholder="Product Price">
                                 <input type="number" class="pstockadd form-control border-success" placeholder="Stock">
                             </div>
                             <div class="col-5">
                                 <label for="cars">Product Information:</label>
                                 <input type="number" class="pdtimeadd form-control border-success"
                                     placeholder="Delivery Time / days">
                                 <p>Product Desctiption:</p>
                                 <textarea class="pdescriptionadd form-control border-success" rows="5"></textarea>
                             </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <input class="pimageadd form-control " type="file">
                         <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                         <button type="button" class="addProduct btn btn-dark">Add </button>
                     </div>
                 </div>
             </div>
         </div>
     </form>
     <form action="">
         <div class="modal fade bd-example-modal-lg" id="addcategory" tabindex="-1" role="dialog"
             aria-labelledby="addcategory" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered " role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="addcategory">ADD CATEGORY</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                         <button type="button" style="border: none;"><i class=" reload mdi mdi-reload"></i></button>
                     </div>
                     <div class="modal-body text-center">
                         <p id="save_msgList"></p>
                         <div class="row ">
                             <div class="col">
                                 @foreach ($category as $item)
                                     <button type="button" class=" btn btn-outline-primary btn-rounded btn-xs"
                                         aria-label="Close">{{ $item->category }} <i
                                             class="mdi mdi-delete-forever"></i></button>
                                 @endforeach
                             </div>
                         </div>
                         <br>
                         <br>
                         <input type="text" class="category  form-control border-info" placeholder="Category Name :">
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                         <button type="button" class="saveCategory btn btn-dark">Add</button>
                     </div>
                 </div>
             </div>
         </div>
     </form>
 @endsection
