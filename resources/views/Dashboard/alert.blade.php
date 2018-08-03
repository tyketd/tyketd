@if (isset($error))
    <div class="alert alert-danger">
        <p>{{ $error }}</p>
    <!--ul class="list-group">
            @_foreach($error as $err)
                <li class="list-group-item">{ $error }}</li>
            @_endforeach
        </ul-->
    </div>
@endif
@if (isset($success))
    <div class="alert alert-success">
        <p>{{ $success }}</p>
        <!--ul class="list-group">
            @_foreach($success as $succes)
                <li class="list-group-item">{ $succes }}</li>
            @_endforeach
        </ul-->
    </div>
@endif
