
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DSSP "Zdravica" - Niš</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    #zaglavlje{
      word-wrap: break-word;
      font-size: 9pt;
      width: auto !important;
    }
    #user_table{
      font-size: 9pt;
    }
    #picture2 {
      position: absolute;
      top: 80px;
      right: 20px;
    }
    #picture2 img{
      width: 250px;
      border: 1px solid green;
    }
  </style>
 </head>
 <body>
  <div class="container"> 
     <h3 align="center">Baza podataka članova DSSP "Zdravica" - Niš</h3>
     <div align="right">
      <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Novi član / Nov član</button>
     </div>
     <br />
   <div class="table-responsive">
    <table id="user_table" class="table table-bordered table-striped">
     <thead>
      <tr>
        <th style="width: 50px !important;">Detalji</th>
        <th id="zaglavlje">Ime i/in prezime/priimek</th><!-- 
        <th id="zaglavlje">Prezime/ Priimek</th> -->
        <th id="zaglavlje">E-mail</th>
        <th id="zaglavlje">Tel.broj/ Tel.štev.</th><!-- 
        <th id="zaglavlje">Adresa/Naslov</th>
        <th id="zaglavlje">Grad/Mesto</th>
        <th id="zaglavlje">Pošt.broj/ Pošt.štev.</th>
        <th id="zaglavlje">Država</th>
        <th id="zaglavlje">Dat.&nbsp;rođenja/ Dat.&nbsp;rojstva</th>
        <th id="zaglavlje">Rodni&nbsp;grad/ Rojstno&nbsp;mesto</th>
        <th id="zaglavlje">Država&nbsp;rođenja/ Država&nbsp;rojstva</th>
        <th id="zaglavlje">Državljanstvo</th>
        <th id="zaglavlje">Napomena/ Pripomba</th>
        <th id="zaglavlje">Slika</th>
        <th id="zaglavlje">Uplatnica</th>
        <th id="zaglavlje">Član&nbsp;od</th>
        <th id="zaglavlje">Uloga/Vloga</th> -->
        <th style="width: 50px !important;">Opcije</th>
      </tr>
     </thead>
    </table>
   </div>
   <br />
   <br />
  </div>

<div id="detailsModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detaljan pregled podataka</h4>
      </div>
      <div class="modal-body">
       <span id="form_result1"></span>         
       <div class="form-group">
        <label class="control-label col-md-4">Ime: </label>
        <div class="col-md-8">
         <div id="first_name1"></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">Prezime/Priimek: </label>
        <div class="col-md-8">
         <div id="last_name1"></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">e-mail: </label>
        <div class="col-md-8">
         <div id="e_mail1"></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">Adresa/Naslov: </label>
        <div class="col-md-8">
         <div id="address1"></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">Grad/Mesto: </label>
        <div class="col-md-8">
         <div id="city1"></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">Država: </label>
        <div class="col-md-8">
         <div id="country1" ></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">Pošt.broj/Pošt.številka: </label>
        <div class="col-md-8">
         <div id="postal_number1"></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">Tel.broj/Tel.številka: </label>
        <div class="col-md-8">
         <div id="phone_number1"></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">Datum rođenja/rojstva: </label>
        <div class="col-md-8">
         <div id="birth_date1"></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">Grad rođenja/Mesto rojstva: </label>
        <div class="col-md-8">
         <div id="hometown1"></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">Država rođenja/rojstva: </label>
        <div class="col-md-8">
         <div id="coutry_of_birth1"></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">Državljanstvo: </label>
        <div class="col-md-8">
         <div id="citizenship1"></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">Napomena / Pribomba: </label>
        <div class="col-md-8">
         <div id="note1"></div>
        </div>
       </div><br><!-- 
       <div class="form-group">
        <label class="control-label col-md-4">Napomena / Pribomba: </label>
        <div class="col-md-8">
         <div id="picture1"></div>
        </div>
       </div><br>
       <div class="form-group">
        <label class="control-label col-md-4">Napomena / Pribomba: </label>
        <div class="col-md-8">
         <div id="proof_of_payment1"></div>
        </div>
       </div><br> -->
       <div class="form-group">
        <label class="control-label col-md-4">Član od: </label>
        <div class="col-md-8">
         <div id="proof_of_payment1"></div>
        </div>
       </div><br>
      </div> 
      <div id="picture2"><img id="image" /></div> 
    </div>
  </div>
</div>

<div id="formModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Unos novog člana</h4>
   </div>
   <div class="modal-body">
   <span id="form_result"></span>
   <form method="post" id="sample_form" class="form-horizontal">
    @csrf
    <div class="form-group">
      <label class="control-label col-md-4" >Ime : </label>
      <div class="col-md-8">
       <input type="text" name="first_name" id="first_name" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Prezime/Priimek : </label>
      <div class="col-md-8">
       <input type="text" name="last_name" id="last_name" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">e-mail : </label>
      <div class="col-md-8">
       <input type="text" name="e_mail" id="e_mail" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Adresa/Naslov : </label>
      <div class="col-md-8">
       <input type="text" name="address" id="address" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Grad/Mesto : </label>
      <div class="col-md-8">
       <input type="text" name="city" id="city" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Država : </label>
      <div class="col-md-8">
       <input type="text" name="country" id="country" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Pošt.broj/Pošt.številka : </label>
      <div class="col-md-8">
       <input type="text" name="postal_number" id="postal_number" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Tel.broj/Tel.številka : </label>
      <div class="col-md-8">
       <input type="text" name="phone_number" id="phone_number" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Datum rođenja/rojstva : </label>
      <div class="col-md-8">
       <input type="text" name="birth_date" id="birth_date" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Grad rođenja/Mesto rojstva : </label>
      <div class="col-md-8">
       <input type="text" name="hometown" id="hometown" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Država rođenja/rojstva : </label>
      <div class="col-md-8">
       <input type="text" name="coutry_of_birth" id="coutry_of_birth" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Državljanstvo : </label>
      <div class="col-md-8">
       <input type="text" name="citizenship" id="citizenship" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Napomena / Pribomba : </label>
      <div class="col-md-8">
       <input type="text" name="note" id="note" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Napomena / Pribomba : </label>
      <div class="col-md-8">
       <input type="text" name="picture" id="picture" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Napomena / Pribomba : </label>
      <div class="col-md-8">
       <input type="text" name="proof_of_payment" id="proof_of_payment" class="form-control" />
      </div>
     </div>
     <div class="form-group">
      <label class="control-label col-md-4">Član od : </label>
      <div class="col-md-8">
       <input type="text" name="proof_of_payment" id="proof_of_payment" class="form-control" />
      </div>
     </div>
      <br />
      <div class="form-group" align="center">
       <input type="hidden" name="action" id="action" value="Potvrdi" />
       <input type="hidden" name="hidden_id" id="hidden_id" />
       <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Potvrdi" />
      </div>
   </form>
    </div>
   </div>
 </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Brisanje člana</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Da li zaista želite da obrišete člana? /  <br />Ali ste prepričani, da želite izbrisati člana?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">Da</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Ne</button>
            </div>
        </div>
    </div>
</div>
 </body>
</html>


<script>
$(document).ready(function(){

 $('#user_table').DataTable({
  processing: true,
  serverSide: true,
  ajax: {
   url: "{{ route('sample.index') }}",
  },
  columns: [
   {
    data: 'details',
    name: 'details', 
    orderable: false
   },
   {
    data: 'last_first_name',
    name: 'last_first_name'
   },
   /*{
    data: 'last_name',
    name: 'last_name'
   },*/
   {
    data: 'e_mail',
    name: 'e_mail'
   },
   {
    data: 'phone_number',
    name: 'phone_number'
   },/*
   {
    data: 'address',
    name: 'address'
   },
   {
    data: 'city',
    name: 'city'
   },
   {
    data: 'country',
    name: 'country'
   },*/
   /*{
    data: 'postal_number',
    name: 'postal_number'
   },
   {
    data: 'birth_date',
    name: 'birth_date'
   },
   {
    data: 'hometown',
    name: 'hometown'
   },
   {
    data: 'coutry_of_birth',
    name: 'coutry_of_birth'
   },
   {
    data: 'citizenship',
    name: 'citizenship'
   },
   {
    data: 'note',
    name: 'note'
   },
   {
    data: 'picture',
    name: 'picture'
   },
   {
    data: 'proof_of_payment',
    name: 'proof_of_payment'
   },
   {
    data: 'member_from',
    name: 'member_from'
   },
   {
    data: 'permissions_id',
    name: 'permissions_id'
   },*/
   {
    data: 'action',
    name: 'action',
    orderable: false
   }
  ]
 });

 $('#create_record').click(function(){
  $('.modal-title').text('Unos novog člana');
  $('#action_button').val('Potvrdi');
  $('#action').val('Potvrdi');
  $('#form_result').html('');

  $('#formModal').modal('show');
 });

 $('#sample_form').on('submit', function(event){
  event.preventDefault();
  var action_url = '';

  if($('#action').val() == 'Potvrdi')
  {
   action_url = "{{ route('sample.store') }}";
  }

  if($('#action').val() == 'Uredi')
  {
   action_url = "{{ route('sample.update') }}";
  }

  $.ajax({
   url: action_url,
   method:"POST",
   data:$(this).serialize(),/*
   data: {"_token": "{{ csrf_token() }}"},*/
   dataType:"json",
   success:function(data)
   {
    var html = '';
    if(data.errors)
    {
     html = '<div class="alert alert-danger">';
     for(var count = 0; count < data.errors.length; count++)
     {
      html += '<p>' + data.errors[count] + '</p>';
     }
     html += '</div>';
    }
    if(data.success)
    {
     html = '<div class="alert alert-success">' + data.success + '</div>';
     $('#sample_form')[0].reset();
     $('#user_table').DataTable().ajax.reload();
    }
    $('#form_result').html(html);
   }
  });
 });

 $(document).on('click', '.details', function(){
  var id = $(this).attr('id');
  $('#form_result1').html('');
  $.ajax({
    url :"sample/"+id,
    dataType:"json",
    success:function(data)
    {
      /*$('#action').val('Uredi');*/
      $('#first_name1').html(data.result.first_name);
      $('#last_name1').html(data.result.last_name);
      $('#e_mail1').html(data.result.e_mail);
      $('#address1').html(data.result.address);
      $('#city1').html(data.result.city);
      $('#postal_number1').html(data.result.postal_number);
      $('#phone_number1').html(data.result.phone_number);
      $('#country1').html(data.result.country);
      $('#birth_date1').html(data.result.birth_date);
      $('#hometown1').html(data.result.hometown);
      $('#coutry_of_birth1').html(data.result.coutry_of_birth);
      $('#citizenship1').html(data.result.citizenship);
      $('#note1').html(data.result.note);
      $('#picture1').html(data.result.picture);
      $('#proof_of_payment1').html(data.result.proof_of_payment);
      $('#member_from1').html(data.result.member_from);
      $('#permissions_id1').html(data.result.permissions_id);
      $('.modal-title').text('Detaljan prikaz podataka');
      $('#image').attr('src', 'images/'+data.result.picture);
      /*$('#action_button').val('Uredi');*/
      $('#detailsModal').modal('show'); 
    }
  })

 });


 $(document).on('click', '.edit', function(){
  var id = $(this).attr('id');
  $('#form_result').html('');
  $.ajax({
   url :"sample/"+id+"/edit",
   dataType:"json",
   success:function(data)
   {
    $('#action').val('Uredi');
    $('#first_name').val(data.result.first_name);
    $('#last_name').val(data.result.last_name);
    $('#e_mail').val(data.result.e_mail);
    $('#address').val(data.result.address);
    $('#city').val(data.result.city);
    $('#postal_number').val(data.result.postal_number);
    $('#phone_number').val(data.result.phone_number);
    $('#country').val(data.result.country);
    $('#birth_date').val(data.result.birth_date);
    $('#hometown').val(data.result.hometown);
    $('#coutry_of_birth').val(data.result.coutry_of_birth);
    $('#citizenship').val(data.result.citizenship);
    $('#note').val(data.result.note);
    $('#picture').val(data.result.picture);
    $('#proof_of_payment').val(data.result.proof_of_payment);
    $('#member_from').val(data.result.member_from);
    $('#permissions_id').val(data.result.permissions_id);
    $('#hidden_id').val(id);
    $('.modal-title').text('Uređivanje podataka o članu');
    $('#action_button').val('Uredi');
    $('#formModal').modal('show');
   }
  })
 });

 var user_id;

 $(document).on('click', '.delete', function(){
  user_id = $(this).attr('id');
  $('.modal-title').text('Brisanje člana');
  $('#confirmModal').modal('show');
 });

 $('#ok_button').click(function(){
  $.ajax({
   url:"sample/destroy/"+user_id,
   beforeSend:function(){
    $('#ok_button').text('Brisanje...');
   },
   success:function(data)
   {
    setTimeout(function(){
     $('#confirmModal').modal('hide');
     $('#user_table').DataTable().ajax.reload();
     alert('Podaci obrisani!');
    }, 2000);
   }
  })
 });

});
</script>


