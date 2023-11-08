<form class="p-5 shadow bg-white rounded" wire:submit.prevent="store">
    @csrf
    @if(session('articleCreated'))
        <div class="alert alert-success">
            {{ session('articleCreated') }}
        </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" wire:model="title">
        @error('title')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="subtitle" class="form-label">Sottotitolo</label>
        <input type="text" class="form-control" id="subtitle" wire:model="subtitle">
        @error('subtitle')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Corpo</label>
        <textarea wire:model="body" class="form-control" id="body" cols="30" rows="5"></textarea>
        @error('body')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-custom">Inserisci articolo</button>
    </div>
   
</form>