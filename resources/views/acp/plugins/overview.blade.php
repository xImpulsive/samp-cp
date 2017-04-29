@extends("acp.layout.main")

@section("content")
    @if( sizeof($plugins) > 0 )
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Installierte Plugins</h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Plugin suchen">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Plugin</th>
                        <th>Beschreibung</th>
                        <th>Entwickler</th>
                        <th>Version</th>
                        <th>Aktionen</th>
                    </tr>
                    @foreach( $plugins as $plugin )
                        <tr>
                            <td>{{ $plugin->title }}</td>
                            <td>{{ $plugin->description }}</td>
                            <td>{{ $plugin->developer_name }}</td>
                            <td>{{ $plugin->version }}</td>
                            <td><input type="submit" class="btn btn-danger btn-xs" value="Löschen"></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
    @else
        <div class="alert alert-info">Noch keine Plugins installiert!</div>
    @endif
@stop