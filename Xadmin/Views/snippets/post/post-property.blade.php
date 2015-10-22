<!-- Property Details -->
<div class="block">
    <div class="block-header bg-gray-lighter">
        <h3 class="block-title">{{ trans('admin.property_details') }}</h3>
    </div>
    <div class="block-content">
        <div class="form-group">
            <div class="col-xs-12">
                <div class="form-material">
                    <label for="blog-title">{{ trans('admin.property_address') }}</label>
                    <input class="form-control" type="text" name="meta[address]" value="{{ _postMeta($post->id, 'address') }}">
                </div>
                <br/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="form-material">
                    <label for="blog-title">{{ trans('admin.property_price') }}</label>
                    <input class="form-control" type="text" name="meta[price]" value="{{ _postMeta($post->id, 'price') }}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="form-material">
                    <label for="blog-title">{{ trans('admin.property_area') }}</label>
                    <input class="form-control" type="text" name="meta[area]" value="{{ _postMeta($post->id, 'area') }}">
                </div>
            </div>
        </div>
        {{-- Type --}}
        <div class="form-group">
            <label class="col-xs-12" for="example-select">{{ trans('admin.property_type') }}</label>
            <div class="col-sm-12">

                {!! Form::select('meta[property_type]', ['Option #1', 'Option #2', 'Option #3'], _postMeta($post->id, 'property_type'), ['class' => 'form-control', 'size' => 1] ) !!}

            </div>
        </div>
        {{-- Status --}}
        <div class="form-group">
            <label class="col-xs-12" for="example-select">{{ trans('admin.property_status') }}</label>
            <div class="col-sm-12">

                {!! Form::select('meta[property_status]', ['Option #1', 'Option #2', 'Option #3'], _postMeta($post->id, 'property_status'), ['class' => 'form-control', 'size' => 1] ) !!}

            </div>
        </div>
        {{-- Country --}}
        <div class="form-group">
            <label class="col-xs-12" for="example-select">{{ trans('admin.property_country') }}</label>
            <div class="col-sm-12">

                {!! Form::select('meta[country]', ['Option #1', 'Option #2', 'Option #3'], _postMeta($post->id, 'country'), ['class' => 'form-control', 'size' => 1] ) !!}

            </div>
        </div>

        {{-- Amenities --}}
        <div class="form-group">
            <div class="col-md-12">
                <label>Amenities</label><br>
                @foreach(_dataAmenities() as $amenity)
                    <?php $amenityTitle = $amenity['title'] ?>
                    <div class="col-lg-4">
                        <label>{{ $amenityTitle }}</label>
                        <input class="form-control" type="text" name="meta[amenities][{{ $amenityTitle }}]" value="{{ _postMeta($post->id, ['meta_key'=>'amenities', 'meta_value' => $amenityTitle]) }}">
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
<!-- Property Details End