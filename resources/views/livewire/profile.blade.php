<div>
    @if(($xch_address))
    <div class="container white-255-text">
        <div class="center">
            <h1>{{$username}}</h1>

        </div>

    </div>
    @else
        <livewire:validate-xch/>
    @endif
</div>
