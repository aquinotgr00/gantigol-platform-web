@extends('admin::layout-nassau')

@push('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style>
    .custom-combobox {
        position: relative;
        display: inline-block;
        padding-left: 0px;
        margin-bottom: 5px;
    }
    .custom-combobox-toggle {
        position: absolute;
        top: 0;
        bottom: 0;
        margin-left: -1px;
        padding: 0;
    }
    .custom-combobox-input {
        margin: 0;
        padding: 6px 12px;
        width: inherit;
        height: 34px;background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-top-color: rgb(204, 204, 204);
        border-right-color: rgb(204, 204, 204);
        border-bottom-color: rgb(204, 204, 204);
        border-left-color: rgb(204, 204, 204);
        border-radius: 4px;
    }
</style>
@endpush

@section('content')
{{ Form::open(['route' => 'adjustment.store']) }}
{{ Form::hidden('users_id', \Illuminate\Support\Facades\Auth::id()) }}

<div class="row">
    <div class="col-6">

        <div class="form-group{{ $errors->has('product_variants_id') ? ' has-error' : '' }}">
            {{ Form::label('product_variants_id', 'Product Variant', ["class" => "control-label"]) }}

            <div class="ui-widget">
                <select name="product_variants_id" class="form-control" id="combobox"
                    onchange="return checkValue(this.value);" required autofocus>
                    <option></option>
                    @foreach ($productVariants as $i => $row)
                    <option value="{{ $row->id }}">{{ $row->product->name }} - {{ $row->variant }} - {{ $row->sku }}
                    </option>
                    @endforeach
                </select>
            </div>

            @if ($errors->has('product_variants_id'))
            <span class="help-block">
                <strong>{{ $errors->first('product_variants_id') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('method') ? ' has-error' : '' }}">
            {{ Form::label('method', 'Method', ["class" => "control-label"]) }}

            <select name="method" class="form-control" required autofocus>
                <option></option>
                @foreach ($method as $key => $row)
                <option value="{{ $key }}">{{ $row }}</option>
                @endforeach
            </select>

            @if ($errors->has('method'))
            <span class="help-block">
                <strong>{{ $errors->first('method') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('qty') ? ' has-error' : '' }}">
            {{ Form::label('qty', 'Stock Adjustment', ["class" => "control-label"]) }}
            {{ Form::number('qty', null, ['style' => 'text-transform:capitalize','class' => 'form-control', 'onkeypress' => "return isNumberKey(event)", "required"] ) }}

            @if($errors->has('qty'))
            <span class="help-block">
                <strong>{{ $errors->first('qty') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
            {{ Form::label('note', 'Note', ["class" => "control-label"]) }}
            {{ Form::textarea('note', null, ['class' => 'form-control', 'cols' => '5', 'rows' => '5', 'required'] ) }}

            @if($errors->has('note'))
            <span class="help-block">
                <strong>{{ $errors->first('note') }}</strong>
            </span>
            @endif
        </div>

    </div>
    <div class="col-6">
        <div class="form-group" id="variant-info" style="display: none;">
            {{ Form::label('image', 'Product Variant Info : ', ["class" => "control-label"]) }}
            <br />
            {{ Form::label('variant-name', '', ["class" => "control-label", "id" => "variant-name"]) }}
            <br />
            {{ Form::label('variant-stock', '', ["class" => "control-label", "id" => "variant-stock"]) }}

            <div>
                <img src="" id="variant-image" width="300px" />
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="text-right">
            <div class="form-group">
                {{ link_to(url()->previous(), $title = 'Cancel', $attributes = ['class'=>'btn btn-default'], $secure = null) }}
                {{ Form::submit('Add Adjustment',["class"=>"btn btn-primary"]) }}
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
@endsection

@push('scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31
            && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
    $(document).ready(function () {
        $(".date").datepicker({
            dateFormat: 'yy-mm-dd',
            autoclose: true
        });
    });

    $(function () {
        var autofilter = false;

        function setFilter(e) {
            autofilter = e;
        }

        function getFilter() {
            return autofilter;
        }

        $.widget("custom.combobox", {
            _create: function () {
                this.wrapper = $("<span>")
                    .addClass("custom-combobox")
                    .addClass("col-sm-12")
                    .insertAfter(this.element);

                this.element.hide();
                this._createAutocomplete();
                this._createShowAllButton();
            },

            _createAutocomplete: function () {
                var selected = this.element.children(":selected"),
                    value = selected.val() ? selected.text() : "";

                setFilter(true);

                this.input = $("<input>")
                    .appendTo(this.wrapper)
                    .val(value)
                    .attr("title", "")
                    .addClass("custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left")
                    .autocomplete({
                        delay: 0,
                        minLength: 0,
                        source: $.proxy(this, "_source")
                    })
                    .tooltip({
                        classes: {
                            "ui-tooltip": "ui-state-highlight"
                        }
                    });

                this._on(this.input, {
                    autocompleteselect: function (event, ui) {
                        ui.item.option.selected = true;

                        getVariantDetail(ui.item.option.value);

                        this._trigger("select", event, {
                            item: ui.item.option
                        });
                    },

                    autocompletechange: "_removeIfInvalid"
                });
            },

            _createShowAllButton: function () {
                var input = this.input,
                    wasOpen = false

                $("<a>")
                    .attr("tabIndex", -1)
                    .attr("title", "Show All Items")
                    .attr("height", "")
                    .tooltip()
                    .appendTo(this.wrapper)
                    .button({
                        icons: {
                            primary: "ui-icon-triangle-1-s"
                        },
                        text: "false"
                    })
                    .removeClass("ui-corner-all")
                    .addClass("custom-combobox-toggle ui-corner-right")
                    .on("mousedown", function () {
                        setFilter(false);

                        wasOpen = input.autocomplete("widget").is(":visible");
                    })
                    .on("click", function () {
                        input.trigger("focus");

                        // Close if already visible
                        if (wasOpen) {
                            return;
                        }

                        // Pass empty string as value to search for, displaying all results
                        input.autocomplete("search", "");
                    });
            },

            _source: function (request, response, filter) {
                var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), "i");
                response(this.element.children("option").map(function () {
                    var text = $(this).text();

                    if (request.term)
                        setFilter(true);

                    if (this.value && (!request.term || matcher.test(text)) && (getFilter() == false || (getFilter() == true && request.term.length >= 2))) {

                        return {
                            label: text,
                            value: text,
                            option: this
                        };
                    }
                }));
            },

            _removeIfInvalid: function (event, ui) {

                // Selected an item, nothing to do
                if (ui.item) {
                    return;
                }

                // Search for a match (case-insensitive)
                var value = this.input.val(),
                    valueLowerCase = value.toLowerCase(),
                    valid = false;
                this.element.children("option").each(function () {
                    if ($(this).text().toLowerCase() === valueLowerCase) {
                        this.selected = valid = true;
                        return false;
                    }
                });

                // Found a match, nothing to do
                if (valid) {
                    return;
                }

                // Remove invalid value
                this.input
                    .val("")
                    .attr("title", value + " didn't match any item")
                    .tooltip("open");
                this.element.val("");
                this._delay(function () {
                    this.input.tooltip("close").attr("title", "");
                }, 2500);
                this.input.autocomplete("instance").term = "";
            },

            _destroy: function () {
                this.wrapper.remove();
                this.element.show();
            }
        });

        $("#combobox").combobox();
        $("#toggle").on("click", function () {
            $("#combobox").toggle();
        });

        function getVariantDetail(id) {
            if (id != '' || id != null) {
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "{{ route('get.variantById') }}",
                    data: "id=" + id,
                    success: function (data) {
                        if (data.status == true) {
                            $("#variant-info").show();

                            $("#variant-name").text("Name : " + data.data.product_name);
                            $("#variant-stock").text("Stock : " + data.data.stock)
                            $("#variant-image").attr('src', data.data.image);
                        }
                    }
                });
            }
        }

    });

    function checkValue(e) {
        alert(e);
    }
</script>
@endpush