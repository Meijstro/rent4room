<div class="card-header" id="headingTwo">
    <h5 class="mb-0">
      <button class="btn btn-success" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Foto's Uploaden
      </button>
    </h5>
  </div>

<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
  <form action="/newroom/foto" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    Selecteer foto's:<br>
    <input type="file" id="image" name="images[]"><br>
    <input type="submit" value="Upload" name="submit"><br>
</form>
<hr>
</div>
