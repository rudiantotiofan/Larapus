<div id="ajax-tables" >
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>

        @if($author->count()==0)
            <tr>
                <td colspan="2" class="text-center">Tidak ada data ditemukan.</td>
            </tr>
        @else
            @foreach($author as $temp)
                <tr>
                    <td>{{ $temp->id }}</td>
                    <td>{{ $temp->name }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>    
    <div class="col-md-2 col-md-offset-5" id="paginate">
        {{ $author->links() }}
    </div>
</div>