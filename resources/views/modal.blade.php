
<!-- Modal -->

{!! Form::open(['action' => 'phonebookController@store','method' => 'Post']) !!}
  
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      @include('messages')
      <div class="form-group">
          <h4> {{form::label('title','New Contact',['class'=>'modal-title px-3'])}} </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
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



{!! Form::close() !!}

  