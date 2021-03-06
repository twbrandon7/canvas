<form role="form" id="form-create" method="POST" action="{{ route('canvas.tag.store') }}">
    @csrf
    <input type="hidden" name="id" hidden value="{{ $data['id'] }}">

    <tag inline-template>
        <div>
            <div class="form-group row my-5">
                <div class="col-lg-12">
                    <input type="text" name="name" v-model="name" title="Name"
                           class="form-control-lg form-control border-0 px-0"
                           value="{{ old('name') }}" required placeholder="Give your tag a name">
                    @if ($errors->has('name'))
                        <div class="invalid-feedback d-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12">
                    <p class="lead text-muted" style="cursor: default">{{ sprintf('%s/%s', config('app.url'), config('canvas.public_path')) }}/tag/<span class="text-primary">@{{ slug }}</span></p>
                    <input type="hidden" name="slug" v-model="slug" readonly>
                </div>
            </div>
        </div>
    </tag>
</form>
