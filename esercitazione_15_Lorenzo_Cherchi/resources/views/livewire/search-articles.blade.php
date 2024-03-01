<div>
    <div class="container-fluid">
        <div class="row">
            <div>
                <label for="search">Cerca l'articolo</label>
                <input type="text" wire:model.live="search" id="search">
            </div>
            @foreach ($articles as $article)

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-text">{{$article->description}}</p>
                 
                </div>
              </div>
              @endforeach
        </div>       
    </div>
</div>
