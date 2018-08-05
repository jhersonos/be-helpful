<div class="form-group">
    {{ Form::label('nombre', 'Nombre de la campaña') }}
    {{ Form::text('nombre', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'Url') }}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('n_cuenta', 'Numero de cuenta') }}
    {{ Form::text('n_cuenta', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('direccion', 'Direccion') }}
    {{ Form::text('direccion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('n_vol', 'n_vol') }}
    {{ Form::number('n_vol', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('meta_don', 'meta_don') }}
    {{ Form::number('meta_don', null, ['class' => 'form-control']) }}
</div>
{{ Form::hidden('users_id', Auth::user()->id, ['class' => 'form-control']) }}
<div class="form-group">
    {{ Form::label('descripcion', 'Descripción') }}
    {{ Form::textarea('descripcion', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('status', 'Estado') }}
    {{ Form::select('status', array(
        '1' => 'Active',
        '2' => 'Inactive',
    ), null,['class' => 'form-control', 'id' => 'status']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
<a class="btn btn-sm btn-danger my-3 float-right" style="color: white;" href="{{ route('campains.index') }}">Volver</a>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(e) {
            var name = document.getElementById('nombre'),
                slug = document.getElementById('slug');
            name.onkeyup = function() {
            slug.value = string_to_slug(name.value);
            }
        });
        function string_to_slug (str) {
                str = str.replace(/^\s+|\s+$/g, '');
                str = str.toLowerCase();
                var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
                var to   = "aaaaeeeeiiiioooouuuunc------";
                for (var i=0, l=from.length ; i<l ; i++) {
                    str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }
                str = str.replace(/[^a-z0-9 -]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');

                return str;
        }
    </script>
