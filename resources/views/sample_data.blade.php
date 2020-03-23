
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
  <style type="text/css">
    #zaglavlje, td{
      width: 100px !important;
      word-break: normal;
      font-size: 9pt;
    }
    #user_table{
      font-size: 9pt;
    }
  </style>
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Baza podataka članova DSSP "Zdravica" - Niš</h3>
     <br />
     <div align="right">
      <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Novi član / Nov član</button>
     </div>
     <br />
   <div class="table-responsive">
    <table id="user_table" class="table table-bordered table-striped">
     <thead>
      <tr>
        <th id="zaglavlje">Ime</th>
        <th id="zaglavlje">Prezime Priimek</th>
        <th id="zaglavlje">E-mail</th>
        <th id="zaglavlje">Adresa Naslov</th>
        <th id="zaglavlje">Grad Mesto</th>
        <th id="zaglavlje">Pošt.br Pošt.štev</th>
        <th id="zaglavlje">Tel.br Tel.štev</th>
        <th id="zaglavlje">Država</th>
        <th id="zaglavlje">Datum rođenja</th>
        <th id="zaglavlje">Rodni grad</th>
        <th id="zaglavlje">Država rođenja/rojstva</th>
        <th style="width: 120px !important;">Action</th>
      </tr>
     </thead>
    </table>
   </div>
   <br />
   <br />
  </div>
 </body>
</html>

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
                <h2 class="modal-title">Potvrda</h2>
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
    data: 'first_name',
    name: 'first_name'
   },
   {
    data: 'last_name',
    name: 'last_name'
   },
   {
    data: 'e_mail',
    name: 'e_mail'
   },
   {
    data: 'address',
    name: 'address'
   },
   {
    data: 'city',
    name: 'city'
   },
   {
    data: 'postal_number',
    name: 'postal_number'
   },
   {
    data: 'phone_number',
    name: 'phone_number'
   },
   {
    data: 'country',
    name: 'country'
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
   data:$(this).serialize(),
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

 $(document).on('click', '.edit', function(){
  var id = $(this).attr('id');
  $('#form_result').html('');
  $.ajax({
   url :"sample/"+id+"/edit",
   dataType:"json",
   success:function(data)
   {
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
    $('#hidden_id').val(id);
    $('.modal-title').text('Uređivanje podataka o članu');
    $('#action_button').val('Uredi');
    $('#action').val('Uredi');
    $('#formModal').modal('show');
   }
  })
 });

 var user_id;

 $(document).on('click', '.delete', function(){
  user_id = $(this).attr('id');
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


