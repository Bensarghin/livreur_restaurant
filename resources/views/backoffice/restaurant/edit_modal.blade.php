  <!-- Modal -->
  <div class="modal fade" id="edit_Modal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifer Categorie</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('categorie.update',['id'=>$item->id])}}" method="post">
                @csrf
            <div class="mb-3">
              <label for="exampleFormControlInput1"  class="form-label">Name</label>
              <input type="text" class="form-control" value="{{$item->name}}" name='name' id="name" >
            </div>
            
          <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>