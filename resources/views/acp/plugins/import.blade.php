@extends("acp.layout.main")

@section("content")
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Plugin Import</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            Hier hast Du die Möglichkeit ein Plugin für das SAMP-CP zu importieren. <br><br>
            <form enctype="multipart/form-data" method="POST" action="{{ URL::route("acp.plugins.import") }}" }}>
                <div class="form-group">
                    <label for="themeimport">Plugin Importieren</label>
                    <input type="file" name="archive">
                </div>
                <input type="submit" class="btn btn-primary btn-sm" value="Plugin Importieren">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@stop