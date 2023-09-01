<main class="col-md-10 ms-sm-auto col-lg-60 px-md-90">
<form action="{{route('pubcreate_update', $rs->id)}}" method='POST'>
  @csrf
 @method('PUT')
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">name</label>
    <input type="text" class="form-control"name='name' id="exampleInputEmail1"  placeholder="enter your name"value="{{$rs->name}}">
   
  </div>
  
  <div class="mb-3">
    <label for="exampleInputemail" class="form-label">des</label>
    <input type="text" class="form-control" name='des'id="exampleInputPassword1"placeholder="enter email"value="{{$rs->des}}">
</div>

  
  
 
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</main>