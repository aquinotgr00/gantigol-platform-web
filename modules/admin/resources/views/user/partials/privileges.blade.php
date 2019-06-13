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
<div class="flex-column privilage-item">
    <!-- Card Header - Accordion -->
    <a href="#{{ $categorySlug }}-privilege" data-toggle="collapse" role="button" aria-expanded="true"
        aria-controls="{{ $categorySlug }}-privilege">
        <h6 class="m-0 font-weight-bold text-primary">{{ $privilege->privilegeCategory->name }}</h6>
    </a>
    <hr>
    <!-- Card Content - Collapse -->
    <div class="collapse {{ $cardState }} list-privilage" id="{{ $categorySlug }}-privilege" data-parent="#privileges">

        @php
        $categoryName = $privilege->privilegeCategory->name;
        }

        $privilegeSlug = str_slug($privilege->name);

        $checked = '';
        if(array_search($privilege->id, $selectedPrivileges, true)!==false) {
        $checked = 'checked';
        }
        @endphp
        <div class="form-check mb-3">
            <input type="checkbox" name="privilege[][privilege_id]" value="{{ $privilege->id }}"
                class="custom-control-input chk-privilege" id="chk-{{ $privilegeSlug }}" {{$checked}}
                @cannot('edit-user-privileges',$user) disabled @endcannot>
            <label class="custom-control-label" for="chk-{{ $privilegeSlug }}">{{ $privilege->name }}</label>
        </div>

        @empty
        <p>No privileges available</p>
        @endforelse
        @if(!empty($categoryName))

    </div>
</div>
@endif
</div>