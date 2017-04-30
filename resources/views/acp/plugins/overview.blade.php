@extends("acp.layout.main")

@section("content")
    @if( sizeof($plugins) > 0 )
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">@lang("acp.plugin.heading")</h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="@lang("acp.plugin.search")">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>@lang("acp.plugin.name")</th>
                        <th>@lang("acp.plugin.desc")</th>
                        <th>@lang("acp.plugin.developer")</th>
                        <th>@lang("acp.plugin.version")</th>
                        <th>@lang("acp.plugin.actions")</th>
                    </tr>
                    @foreach( $plugins as $plugin )
                        <tr>
                            <td>{{ $plugin->title }}</td>
                            <td>{{ $plugin->description }}</td>
                            <td>{{ $plugin->developer_name }}</td>
                            <td>{{ $plugin->version }}</td>
                            <td>
                                <a href="{{ URL::route("acp.plugins.remove", $plugin->id) }}" class="btn btn-danger btn-xs">@lang("acp.plugin.delete")</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @else
        <div class="alert alert-info">@lang("acp.plugin.messages.noplugins")</div>
    @endif
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