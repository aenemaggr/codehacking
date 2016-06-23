{{-- This code displays errors if they are any.--}}
@if(count($errors) > 0)

    <div class="alert alert-danger">

        <ul>

            {{--TO DISPLAY ERRORS EVERYTHING ELSE DIDNT WORK--}}
            @foreach($errors->all() as $error)


                <li>{!! $error !!}</li>


            @endforeach


        </ul>

    </div>


@endif