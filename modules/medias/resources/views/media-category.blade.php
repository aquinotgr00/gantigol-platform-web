@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
@endpush

<div class="col-md-3">
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">Media Name</h6>
            <input id="title-image" class="form-control" type="text" value="" disabled>
        </div>
        <div class="card-body">
            <form method="post" id="form-assign-category" action="{{route('media.assignMediaCategory')}}" class="mt-20">
                <h6 class="card-title">Media Category</h6>
                @csrf
                <input type="hidden" id="input-image-id" name="id" value="">
                <select name="category" id="category-media-list" class="form-control selectpicker" data-live-search="true">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
                <br/>
                <a href="#" data-toggle="modal" data-target="#openModal" >+ new category</a>
                <br/>
                <button id="button-add-category" type='submit' class="btn btn-outline-primary btn-sm">Apply</button>
            </form>
        </div>
    </div>
</div>

<div id="openModal" class="modal fade" role="dialog">
    <div class="modal-dialog"> 
        <div class="modal-content">
            <div class="modal-body">
                <h4>Add Category</h4>
                <p>Add new category.</p>
                <div class="form-group" id="form-category">
                    <input type="text" id="input-category" value="" class="form-control">
                </div>
                <button onclick="addCategory()"id="button-add-category" class="btn btn-default pull-right">Add</button><br/><br/>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
<script>
    //add to category section
    $('.list-media').on('click', '.action-image', function() {
        $('#title-image').val($(this).data('name'))
        $('#input-image-id').val($(this).data('id'))
    });
    
    //ajax post new category
    function addCategory() {
        $('#openModal').modal('hide');
        $('#notification-message').html("Please wait adding category <img width='64px' src='https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif'>")
        $('#openModalNotification').modal('show')
        $.post("{{ route('media.storeCategory') }}", { title:$('#input-category').val(), '_token': "{{ csrf_token() }}" })
        .done(function(data) {
            addHtml = "<option value='" + data.data.id + "'>" + data.data.title + "</option>"
            $('#category-media-list').append(addHtml)
            $("#category-media-list").val(data.data.id)
            $('#notification-message').html(data.message)
            $('#category-media-list').selectpicker('refresh')
        });
    }

    //ajax assign category
    $("#form-assign-category").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var url = form.attr('action');
        $('#notification-message').html("Please wait Assign category to image <img width='64px' src='https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif'>")
        $('#openModalNotification').modal('show')

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                $('#notification-message').html(data.message)
            }
        });
    });
</script>
@endpush