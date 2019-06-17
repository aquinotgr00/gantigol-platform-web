<div class="input-group srch">
    <input type="text" class="form-control search-box" placeholder="Search" name="s" value="{{ request()->query('s') }}">
    <div class="input-group-append">
        <button class="btn btn-search" type="button">
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>