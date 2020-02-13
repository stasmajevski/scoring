
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" value="@if(isset($getUser->name)) {{$getUser->name}} @endif" required>
    </div>
    <div class="form-group">
        <label for="surname">Surname</label>
        <input name="surname" type="text" class="form-control" value="@if(isset($getUser->surname)) {{$getUser->surname}} @endif" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input name="phone" type="text" class="form-control" value="@if(isset($getUser->phone)) {{$getUser->phone}} @endif" required>
    </div>
        <input name="hidden-phone" type="hidden">
    <div class="form-group">
        <label for="email">E-mail</label>
        <input name="email" type="email" class="form-control" value="@if(isset($getUser->email)) {{$getUser->email}} @endif" required>
    </div>
    <div class="form-group">
        <label for="education">Education</label>
        <select name="education_id" class="custom-select" required>
            @if (isset($getUser->education))
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
            <input name="terms" class="form-check-input" type="checkbox" @if(!isset($getUser->terms)) id="create-terms" @endif @if(isset($getUser->terms) && $getUser->terms) checked id="edit-terms" @endif>
            <label class="form-check-label" for="terms">
                I agree with processing of my personal data
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
