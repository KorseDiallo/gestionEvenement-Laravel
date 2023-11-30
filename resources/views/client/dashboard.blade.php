<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <input type="submit" value="Se Deconnecter">
    </form>
   
    <h1>Client connecté</h1>
    <div class="d-flex flex-row">
    @foreach($evenements as $evenement)
    <div class="card" style="width: 18rem; margin-right: 10px; margin-bottom: 10px;">
        @if($evenement->image_mise_en_avant)
            <img src="{{ Storage::url($evenement->image_mise_en_avant) }}" alt="Image Mise en Avant" >
         @endif
        <div class="card-body">
          <h5 class="card-title">{{$evenement->libelle}}</h5>
          <p class="card-text">{{$evenement->description}}</p>
          {{-- <p class="card-text">{{$evenement->description}}</p> --}}
          <a href="/faireReservation/{{$evenement->id}}" class="btn btn-primary">Reserver</a>
        </div>
      </div>
    @endforeach
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>