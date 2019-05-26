<div class="row">
    <div class="col-md-4">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            @if(isset($courier))

            @foreach($courier as $key => $value)
            <a class="nav-link {{ ($key == 0)? 'active' : ''    }}" id="v-pills-{{ $value['id'] }}-tab"
                data-toggle="pill" href="#v-pills-{{ $value['id'] }}" role="tab"
                aria-controls="v-pills-{{ $value['id'] }}" aria-selected="true">
                {{ $value['name'] }}
            </a>
            @endforeach
            @endif
        </div>
    </div>
    <div class="col-md-8">
        <div class="tab-content" id="v-pills-tabContent">
            @if(isset($courier))

            @foreach($courier as $key => $value)

            <div class="tab-pane fade show {{ ($key == 0)? 'active' : ''    }}" id="v-pills-{{ $value['id'] }}"
                role="tabpanel" aria-labelledby="v-pills-{{ $value['id'] }}-tab">

                @include('preorder::includes.courier',[
                'name' => $value['name']
                ])
            </div>

            @endforeach

            @endif
        </div>
    </div>
</div>