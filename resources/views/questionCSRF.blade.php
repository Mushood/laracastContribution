<form role="form" method="POST" action="#" id="form1">
    <input type="hidden" value="register" name="tab" />
    {{ csrf_field() }}



    <div class="form-group">
        <label for="email">First Name:</label>
        <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" autocomplete="off" required>
        @if ($errors->has('fname'))
            <span>
              <small style="color: #e05d6e;">{{ $errors->first('name') }}</small>
            </span>
        @endif
    </div>

    <div class="form-group">
        <label for="email">Last Name:</label>
        <input type="text" name="lname" id="lname" class="form-control" value="{{ old('lname') }}" autocomplete="off" required>
        @if ($errors->has('lname'))
            <span>
              <small style="color: #e05d6e;">{{ $errors->first('lname') }}</small>
            </span>
        @endif
    </div>

    <div class="form-group">
        <label for="email"> Mobile or Email <small style="color: #e05d6e;">(Email compulsory if not from community link)</small>:</label></br>
        <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" autocomplete="off" style="width: 100% !important">
        @if ($errors->has('mobile'))
            <span>
              <small style="color: #e05d6e;">{{ $errors->first('mobile') }}</small>
            </span>
        @endif
    </div>

    <div class="form-group">
        <label for="password">Password: </label>
        <input id="pass" type="password" name="pass" class="form-control" autocomplete="off" required>
        @if ($errors->has('pass'))
            <span>
              <small style="color: #e05d6e;">{{ $errors->first('pass') }}</small>
            </span>
        @endif
    </div>

    <input type="submit" name="signup" value="Sign Up & Login" class="btn btn-primary btn-block active" aria-pressed="true">

</form>
