

<div class="panel panel-primary">

    <div class="panel-body">

        <div class="row">

            <div class="container">
              <div class="panel-heading">
                  Rooms <small>({{ $rooms->count() }})</small>
              </div>
                <form action="{{ url('search') }}" method="get">
                    <div class="form-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..." value="{{ request('q') }}"/>
                    </div>
                </form>
            </div>
        </div>
