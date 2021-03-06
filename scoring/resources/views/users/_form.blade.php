<div class="form-group">
    <label for="name">Name</label>
    <input id="name" name="name" type="text" class="form-control"
        value="@if(isset($getUser->name)) {{$getUser->name}} @endif" required>
</div>
<div class="form-group">
    <label for="surname">Surname</label>
    <input id="surname" name="surname" type="text" class="form-control"
        value="@if(isset($getUser->surname)) {{$getUser->surname}} @endif" required>
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input id="phone" name="phone" pattern="^(\+7)\(9[0-9]{2}\)[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$"
        type="text" class="form-control" value="@if(isset($getUser->phone)) {{$getUser->phone}} @endif" required>
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input id="email" name="email" type="email" class="form-control"
        value="@if(isset($getUser->email)) {{$getUser->email}} @endif" required>
</div>
<div class="form-group">
    <label for="education">Education</label>
    <select id="education" name="education_id" class="custom-select" required>
        @if(isset($getUser->education))
            <option value={{$getUser->education->id}}>{{$getUser->education->name}}</option>
            @foreach($educations as $education)
                @if($education->id == $getUser->education->id)
                    @continue
                @endif
            <option value={{$education->id}}>{{$education->name}}</option>
            @endforeach
        @else
            <option selected disabled value="">Select education</option>
            @foreach($educations as $education)
                <option value={{$education->id}}>{{$education->name}}</option>
            @endforeach
        @endif
    </select>
</div>
<div class="form-group">
    <div class="form-check">
        <input id="terms" name="terms" class="form-check-input" type="checkbox" @if(isset($getUser->terms) && $getUser->terms) checked @endif>
        <label class="form-check-label" for="terms">
            I agree with processing of my personal data
        </label>
    </div>
</div>
<button type="submit" class="btn btn-primary btn-block">Submit</button>
