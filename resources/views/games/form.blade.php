
        <!-- creates text field for the game title -->
        <div class="form-group">

            {!! Form::label('title' ,'Title:') !!}

             {!! Form::text('title' ,null, ['class' =>'form-control'] ) !!}

            </div>


            <!-- creates a text field for the game publisher -->
         <div class ="form group">
            
                {!! Form :: label('publisher' , 'Publisher :') !!}
            
                {!! Form :: text ('publisher' ,null, ['class'=> 'form-control']) !!}
                
                </div>

        <div class="checkbox">
            
            <label for="complete">

                <input type="checkbox" name="complete"  /> Complete?

            </label>

        </div>            

                            
        <!-- creates a submit button -->
        <div class ="form group">

            <br/>
        
            {!! Form :: submit($buttonText , ['class'=>'btn btn-success '] ) !!}

            <a href="{{ action('gamesController@index') }}" class="btn btn-link">Cancel</a>

            </div>


