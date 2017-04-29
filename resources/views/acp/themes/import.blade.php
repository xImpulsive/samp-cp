@extends("acp.layout.main")

@section("content")
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Theme Import</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            Hier hast Du die Möglichkeit ein Theme für das SAMP-CP zu importieren. <br><br>
            <div class="form-group">
                <label for="themeimport">Theme Importieren</label>
                <input type="file" id="themeimport">
            </div>
            <input type="submit" class="btn btn-primary btn-sm" value="Theme Importieren">
        </div>
    </div>
@stop