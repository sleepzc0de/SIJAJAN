<div class="row">
  <div class="col mb-3"> 
    <form action="/daftarmenu">  
      @if (request('category'))
        <input type="giden" name="category" value="{{ request('category') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn" type="submit" id="search">Serach</button>
      </div>
    </form> 
  </div>
</div> 