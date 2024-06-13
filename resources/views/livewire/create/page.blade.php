<div>
{{-- With label, invalid feedback disabled, and form group class --}}
    <div class="row">
        <x-adminlte-input name="iLabel" wire:model="title" label="judul" placeholder="silahkan ketik judul"
            fgroup-class="col-md-6" disable-feedback/>
    </div>

        
    <div class="row">
        <x-adminlte-textarea name="iLabel" wire:model="short" label="shortnews" placeholder="silahkan ketik judul"
            fgroup-class="col-md-6" disable-feedback/>
    </div>
    <div class="row">
        <x-adminlte-textarea name="iLabel" wire:model="long" label="longnews" placeholder="silahkan ketik judul"
            fgroup-class="col-md-6" disable-feedback/>
    </div>
    <hr>
    <div class="row">
        <x-adminlte-button wire:click="save" icon="fa fa-save" theme="success" label="save"/>
    </div>
</div>
