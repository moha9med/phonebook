@include('header')

<div class="container my-5">
    <a href="/phonebook" class="btn btn-secondary mb-5 pull-right">للعودة للصفحة السابقة</a>
    <div class="row">
        <div class="col-lg-12">
        </div>
    </div>
</div>
<div class="container">
        <div class="row">
                <div class="col-lg-12 text-right">
                    <h3>:جهة الاتصال</h3>
                </div>
            </div>
    <table class="table border">
        <tbody>
                
            <tr>
                <td> {{$contact->name}}</td>
                <td> {{$contact->phone}}</td>
                <td>
                    <a href="/phonebook/{{$contact->id}}/edit"><i class="text-success fas fa-edit"></a></i>&nbsp;&nbsp;
                </td>
            </tr>
           
      
        </tbody>
        </table>
        {!!Form::open(['action'=>['phonebookController@destroy',$contact->id],'method'=>'Post','class'=>'pull-left'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete Contact',['class'=>'btn btn-danger'])}}
         {!!Form::close()!!}
</div>

