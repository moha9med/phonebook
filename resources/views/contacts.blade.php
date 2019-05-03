
    @include('header')

    <div class="container my-5">
        <div class="row pull-right">
            <div class="col-lg-12 ">
                <h3>:جهات الاتصال</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr class="text-right">
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($contacts as $item)
                <tr class="text-right">

                    <td>
                            <a>
                                    {!!Form::open(['action'=>['phonebookController@destroy',$item->id],'method'=>'Post','class'=>''])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('مسح جهة الاتصال',['class'=>'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </a>
                    </td>
                    <td>
                            <a href="/phonebook/{{$item->id}}/edit"><i class="text-success fas fa-edit"></a></i>&nbsp;&nbsp;
                            <a href="/phonebook/{{$item->id}}"><i class="text-primary fas fa-eye"></i></a>
                            </td>
                    <td> {{$item->phone}}</td>
                    <td> {{$item->name}}</td>
                    <th scope="row">{{$item->id}}</th>


                </tr>
                @endforeach

            </tbody>
            </table>
            {{$contacts->links()}}

    </div>
   

    @include('footer')
</body>
</html>