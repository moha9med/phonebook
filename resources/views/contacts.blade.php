
    @include('header')

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <h3>Contacts:</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($contacts as $item)
                <tr>
                    
                    <th scope="row">{{$item->id}}</th>
                    <td> {{$item->name}}</td>
                    <td> {{$item->phone}}</td>
                    <td>
                    <a href="/phonebook/{{$item->id}}/edit"><i class="text-success fas fa-edit"></a></i>&nbsp;&nbsp;
                    <a href="/phonebook/{{$item->id}}"><i class="text-primary fas fa-eye"></i></a>
                    </td>
                    <td>
                            <a>
                                    {!!Form::open(['action'=>['phonebookController@destroy',$item->id],'method'=>'Post','class'=>''])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete Contact',['class'=>'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
            </table>
            {{$contacts->links()}}

    </div>
   

    @include('footer')
</body>
</html>