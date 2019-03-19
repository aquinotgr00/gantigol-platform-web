<div class="accordion mb-4" id="privileges">
@php
    $categoryName = '';
    $cardState = 'show';
    $selectedPrivileges = $user->privileges->pluck('privilege_id')->all();
@endphp
@forelse($privileges as $privilege)
    @php
        if($categoryName !== $privilege->privilegeCategory->name) {
            if(!empty($categoryName)) {
                @endphp
                </div>
            </div>
        </div>
    </div>
                @php
                $cardState = '';
            }

            $categorySlug = str_slug($privilege->privilegeCategory->name)
    @endphp
    <div class="card">
        <!-- Card Header - Accordion -->
        <a href="#{{ $categorySlug }}-privilege" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="{{ $categorySlug }}-privilege">
            <h6 class="m-0 font-weight-bold text-primary">{{ $privilege->privilegeCategory->name }}</h6>
        </a>

        <!-- Card Content - Collapse -->
        <div class="collapse {{ $cardState }}" id="{{ $categorySlug }}-privilege" data-parent="#privileges">
            <div class="card-body">
                <div class="form-group">
    @php
            $categoryName = $privilege->privilegeCategory->name;
        }

        $privilegeSlug = str_slug($privilege->name);
        
        $checked = '';
        if(array_search($privilege->id, $selectedPrivileges, true)!==false) {
            $checked = 'checked';
        }
    @endphp

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="privilege[][privilege_id]" value="{{ $privilege->id }}" class="custom-control-input chk-privilege" id="chk-{{ $privilegeSlug }}" {{$checked}}>
                    <label class="custom-control-label" for="chk-{{ $privilegeSlug }}">{{ $privilege->name }}</label>
                </div>

@empty
    <p>No privileges available</p>
@endforelse
@if(!empty($categoryName))
                </div>
            </div>
        </div>
    </div>
@endif
</div>