@extends("acp.layout.main")

@section("content")
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">@lang("acp.plugin.import")</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            @lang("acp.plugin.importinfo")<br><br>
            <form enctype="multipart/form-data" method="POST" action="{{ URL::route("acp.plugins.import") }}" }}>
                <div class="form-group">
                    <label for="themeimport">@lang("acp.plugin.importbutton")</label>
                    <input type="file" name="archive">
                </div>
                <input type="submit" class="btn btn-primary btn-sm" value="@lang("acp.plugin.importbutton")">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@stop