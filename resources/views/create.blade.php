
    @include('header')


<!-- Modal -->

{!! Form::open(['action' => 'phonebookController@store','method' => 'Post']) !!}
  
      
      <div class="container mt-5">
            <div class="form-group">
                    @include('messages')

                    <h4> {{form::label('title','New Contact',['class'=>'modal-title px-3'])}} </h4>
                    <div class="modal-body">
                        {{form::text('name','',['class'=>'form-control','placeholder'=>'Enter Name'])}}
                        <br>
                        {{form::number('phone','',['class'=>'form-control','placeholder'=>'Enter Phine number'])}}
          
                    </div>
                    <div class="modal-footer">
                        {{form::submit('submit',['class'=>'btn btn-primary'])}}
                   </div>
          
                </div>
      </div>
    </div>
  </div>
</div>



{!! Form::close() !!}

  

    @include('footer')
</body>
</html>