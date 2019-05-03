@include('header')

<div class="container my-5">
    <a href="/" class="btn btn-secondary mb-5">Go back</a>
    <div class="row">
        <div class="col-lg-12">
            <h3>Your search result:</h3>
        </div>
    </div>
</div>
<div class="container">
        <div class="container">
                   
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                <a>
                                        {!!Form::open(['action'=>['phonebookController@destroy',$user->id],'method'=>'Post','class'=>'pull-left'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete Contact',['class'=>'btn btn-danger'])}}
                                     {!!Form::close()!!}
                                </a>
                            </td>
                        </tr>
                      
                        @endforeach
                    </tbody>
                </table>
            </div>
     
</div>





