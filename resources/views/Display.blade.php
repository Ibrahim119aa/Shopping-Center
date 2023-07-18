@extends('Home')
@section('content')

<div class="modal fade" id="Example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="">Student Name</label>
            <input type="text" class="Name form-control"> 
        </div>
        <div class="form-group">
            <label for="">Student Email</label>
            <input type="text" class="Email form-control"> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="Save btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Student Data</h2>
                    <a href="" data-bs-toggle="modal"  data-bs-target="#Example" class="btn btn-primary">Add Student</a>
                </div>
            </div>
        </div>
    </div>
</div>
<select id="category" name="category">
  <option value="0">Please Select</option>
  <option value="50" data-value="akne">ACNE</option>
  <option value="11" data-value="rednessbumps">Redness / Bumps</option>
  <option value="15" data-value="sunspotsfreckles">Sunspots / Freckles</option>
  <option value="16" data-value="agingwrinkles">Aging / Wrinkles</option>
  <option value="17" data-value="dry-sensitive">Dry Sensitive</option>
</select>   

@endsection

@section('script')
<script>
    $(document).ready(function()
    {
        $(document).on('click','.Save',function(e)
    {
     e.preventDefault();
     var data={
        'Name':$('.Name').val(),
        'Email':$('.Email').val()
     }


     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    
    $.ajax
     (
     {

        url:'Store',
        type:'POST',
        data:data,
        dataType:'json',
        success:function()
        {
            console.log("djdjd");
        }
     }
     );

})
    $("#category").change(function () {
            var abc = $('option:selected',this).data("value");
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    $.ajax
     (
     {

        url:'See',
        type:'POST',
        data:{
          Value:abc
        },
        dataType:'json',
        success:function()
        {
            console.log("djdjd");
        }
     }
     );

        
        }
        )
    });

</script>

@endsection

