

<div class="panel panel-primary">
    <div class="panel-heading">
        Rooms <small>({{ $rooms->count() }})</small>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="container">
                <form action="{{ url('search') }}" method="get">
                    <div class="form-group">
                        <input
                                type="text"
                                name="q"
                                class="form-control"
                                placeholder="Search..."
                                value="{{ request('q') }}"
                        />
                    </div>
                </form>
            </div>
        </div>
