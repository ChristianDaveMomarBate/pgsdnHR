 @extends('pages/design')
 @section('content')
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script type="text/javascript">
         $(document).ready(function() {
             $(".btn-group .btn").click(function() {
                 var inputValue = $(this).find("input").val();
                 if (inputValue != 'all') {
                     var target = $('table tr[data-status="' + inputValue + '"]');
                     $("table tbody tr").not(target).hide();
                     target.fadeIn();
                 } else {
                     $("table tbody tr").fadeIn();
                 }
             });
             var bs = $.fn.tooltip.Constructor.VERSION;
             var str = bs.split(".");
             if (str[0] == 4) {
                 $(".label").each(function() {
                     var classStr = $(this).attr("class");
                     var newClassStr = classStr.replace(/label/g, "badge");
                     $(this).removeAttr("class").addClass(newClassStr);
                 });
             }
         });
     </script>
     <div class="row">
         <div class="col-12 py-5">
         </div>
     </div>
     <div class="form-control">
         <div class="table-wrapper">
             <div class="table-title">
                 <div class="row">
                     <div class="col-sm-12 text-center">
                         <h4>Product Table</h4>
                         <div class="btn-group" data-toggle="buttons">
                             <label class="btn btn-secondary btn-rounded">
                                 <input type="radio" name="status" value="all" checked="checked"> Displayall
                             </label>
                             <label class="btn btn-info btn-rounded">
                                 <input type="radio" name="status" value="nothing" checked="checked"> Data1
                             </label>
                             <label class="btn btn-success btn-rounded">
                                 <input type="radio" name="status" value="active"> Data2
                             </label>
                             <label class="btn btn-dark btn-rounded">
                                 <input type="radio" name="status" value="inactive"> Data3
                             </label>
                             <label class="btn btn-danger btn-rounded">
                                 <input type="radio" name="status" value="expired"> Data4
                             </label>
                         </div>
                     </div>
                 </div>
             </div>
             <br>
             <br>
             <div class="row">
                 <h6> <button type="button" class="btn btn-success has-icon btn-block mt-0">
                         <i class="mdi mdi-account-multiple-plus-outline"></i>Add Product</button></h6>
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
                     <tr data-status="nothing">
                         <td>1</td>
                         <td><a href="#">loremvallis.com</a></td>
                         <td>04/10/2013</td>
                         <td><span class="label label-primary">Aktif</span></td>
                         <td>Buenos Aires</td>
                     </tr>
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
 @endsection
