<div class="collapse show" id="collapseSuperAdmin">
    @if(isset($groups))
    
        @php
            $selectedPrivileges = $user->privileges->pluck('privilege_id')->all();
        @endphp

        @forelse($groups as $key => $group)
        <div>
            <ul class="flex-column privilage-item">
                <li>
                    <a href="#{{ $key.'Collapse' }}" data-toggle="collapse" aria-expanded="false">{{ ucwords($key) }}</a>
                    <hr>
                    <ul class="collapse list-privilage" id="{{ $key.'Collapse' }}">
                        @foreach($group as $index => $data)

                        @php

                        $checked = '';

                        if(array_search($data->id, $selectedPrivileges, true)!==false) {
                            $checked = 'checked';
                        }
                        @endphp

                        <li>

                            <div class="form-check mb-3">
                                <input 
                                type="checkbox"
                                name="privilege[][privilege_id]" value="{{ $data->id }}"
                                class="form-check-input"
                                @cannot('edit-user-privileges',$user) disabled @endcannot
                                {{ $checked }} />
                                <label class="form-check-label style-privilage" >{{ ucwords($data->name) }}</label>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
        @empty
            <div>
                <p>No Privileges</p>
            </div>
        @endforelse

    @endif
</div>