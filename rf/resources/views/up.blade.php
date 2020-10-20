<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

{{--Start Insert Modal--}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="{{url('mm')}}" method="post" id='main'>
      @csrf
      <div class="modal-body">
        
   
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="enter your first name">
    
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="address" class="form-control" name="address" placeholder="enter your address">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="enter your mobile number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
{{--End Insert Modal--}}

{{--Start Edit modal--}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="{{url('ab')}}" method="post" id="editform">
      @csrf
      {{method_field('put')}}
      <div class="modal-body">
        
   
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="enter your first name">
    
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="address" class="form-control" name="address" id="address" placeholder="enter your address">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Mobile</label>
    <input type="text" class="form-control" name="mobile" id="mobile"placeholder="enter your mobile number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">update changes</button>
      </div>
    </div>
  </div>
</div>
{{--End Edit modal--}}

{{--Start Delete modal--}}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="{{url('ab')}}" method="post" id="deleteform">
      @csrf
      {{method_field('put')}}
      <div class="modal-body">
        <input type="hidden" name=_method value='delete'>
        <p>Are sure you  want to delte </p>
   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Yes delete</button>
      </div>
    </div>
  </div>
</div>
{{--End Delete modal--}}

<div class=container>
<table id="datatable" class="table table-hover table-dark" width=600>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>
  <tfoot>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Action</th>
    </tr>
    </tfoot>
  <tbody>
   @foreach($user as $userdata)
    <tr>
      <th>{{$userdata->id}}</th>
      <td>{{$userdata->name}}</td>
      <td>{{$userdata->address}}</td>
      <td>{{$userdata->mobile}}</td>
    
    <td>
   <a href="#"   class="btn btn-success edit" >Edit</a>
   <a href="#"  class="btn btn-danger delete" data-toggle="modal" >Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>


 
 




<script type="text/javascript">
$(document).ready(function(){
  
var table= $('#datatable').DataTable();

table.on('click','.edit',function(){
$tr = $(this).closest('tr');
if ($($tr).hasClass('child')){
  $tr=$tr.prev('.parent');
}
var data = table.row($tr).data();
 console.log(data);

$('#name').val(data[1]);
$('#address').val(data[2]);
$('#mobile').val(data[3]);

$('#editform').attr('action','/mm'+data[0]);
$('#editModal').modal('show');

});
table.on('click','.delete',function(){
  

$('#deleteModal').modal('show');

});
});

</script>
</body>
</html>