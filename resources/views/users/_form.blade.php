 <div class='form-group col-lg-4'>
            {{form::label('username','Username')}}
            {{form::text('username', $users->username, ['class'=>'form-control', 'placeholder' => 'Username'])}}
        </div>
        <div class='form-group col-lg-4'>
            {{form::label('password','Password')}}
            {{form::text('password', $users->password, ['class'=>'form-control', 'placeholder' => 'Password'])}}
        </div>
        <div class='form-group col-lg-4'>
            {{form::label('firs_name','First_Name')}}
            {{form::text('firs_name', $users->firs_name, ['class'=>'form-control', 'placeholder' => 'First_Name'])}}
        </div><div class='form-group col-lg-4'>
            {{form::label('last_name','Last_Name')}}
            {{form::text('last_name', $users->last_name, ['class'=>'form-control', 'placeholder' => 'Last_name'])}}
        </div><div class='form-group col-lg-4'>
            {{form::label('address','Address')}}
            {{form::text('address', $users->address, ['class'=>'form-control', 'placeholder' => 'Address'])}}
        </div>