@modal(['id'=>'logoutModal','title'=>'Ready to Leave?'])
    @slot('body')
        Select "Logout" below if you are ready to end your current session.
    @endslot
    @slot('footer')
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <form method="post" action="{{ route('admin.logout') }}">
            @csrf
            <button class="btn btn-primary">Logout</button>
        </form>
    @endslot
@endmodal