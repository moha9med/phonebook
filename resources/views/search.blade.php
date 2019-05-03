@include('header')

<div class="container my-5">
    <a href="/" class="btn btn-secondary mb-5 text-right pull-right">للعودة</a>
    <div class="row">
        <div class="col-lg-12 text-right">
        </div>
    </div>
</div>
<div class="container">
        <div class="row">
                <div class="col-lg-12 text-right">
                    <h3>: نتائج بحثك</h3>
                </div>
            </div>
        <div class="container">
                   
                <table class="table table-striped">
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
                        @foreach($details as $user)
                        <tr class="text-right">
        
                            <td>
                                    <a>
                                            {!!Form::open(['action'=>['phonebookController@destroy',$user->id],'method'=>'Post','class'=>''])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('مسح جهة الاتصال',['class'=>'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </a>
                            </td>
                            <td>
                                    <a href="/phonebook/{{$user->id}}/edit"><i class="text-success fas fa-edit"></a></i>&nbsp;&nbsp;
                                    <a href="/phonebook/{{$user->id}}"><i class="text-primary fas fa-eye"></i></a>
                                    </td>
                            <td> {{$user->phone}}</td>
                            <td> {{$user->name}}</td>
                            <th scope="row">{{$user->id}}</th>
        
        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
     
</div>





