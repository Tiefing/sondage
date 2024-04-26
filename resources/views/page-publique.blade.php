<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
     integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb"
      crossorigin="anonymous"> --}}
    <title>Document</title>
</head>
<body class="contenire">

  <div class="ms-auto">
    <div>
      <h5><a href="{{ route('creersondage') }}">Ajouter un sondage</a></h5>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <form action="{{ route('login') }}" method="post">
        @csrf
        
        <button class="nav-link">Se connecter</button>
      </form>
      </li>
    </ul>
    @auth
        <ul class="navbar-nav">
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="post">
            @csrf
            @method('delete')
            <button class="nav-link">Se deconnecter</button>
          </form>
          </li>
        </ul>
    @endauth
  </div>
    <form action="{{ route('reponse') }}" method="POST">
      @csrf
    @forelse ($ms as $m)
    <h3> {{ $m->title }}</h3>
    <p>{{ $m->description }}</p>
    <h1>{{ $m->question }}</h1>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="rname" id="exampleRadios1" value="{{ $m->reponse1 }}" checked>
            <label class="form-check-label" for="exampleRadios1">
              {{ $m->reponse1 }}
            </label>
          
          </div>

          {{-- <input class="form-check-input" type="radio" name="rname" id="exampleRadios1" value="{{ $m->reponse1 }}" checked> --}}

          <div class="form-check">
            <input class="form-check-input" type="radio" name="rname" id="{{ $m->reponse2 }}" value="{{ $m->reponse2 }}">
            <label class="form-check-label" for="exampleRadios2">
                {{ $m->reponse2 }}
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rname" id="exampleRadios3" value="{{ $m->reponse3 }}">
            <label class="form-check-label" for="exampleRadios3">
                {{ $m->reponse3 }}
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rname" id="exampleRadios3" value="{{ $m->reponse4 }}">
            <label class="form-check-label" for="exampleRadios3">
                {{ $m->reponse4 }}
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rname" id="exampleRadios3" value="{{ $m->reponse5 }}">
            <label class="form-check-label" for="exampleRadios3">
                {{ $m->reponse5 }}
            </label>
          </div>
    @empty
    <h1>Pas de sondage</h1>
    @endforelse

    <input type="submit" value="Envoyer">
</form>

    
</body>
</html>