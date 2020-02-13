<!-- Modal -->
<!-- Modal HTML Markup -->
<div id="create" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST"  action="{{ action('UserController@store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input name="surname" type="text" class="form-control" id="surname" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input name="phone" type="text" class="form-control" id="phone" required>
                    </div>
                        <input name="hidden-phone" type="hidden">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email" type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="education">Education</label>
                        <select name="education" id="education" class="custom-select" required>
                            <option selected disabled value="">Select education</option>
                             @foreach($educations as $education)
                                <option value={{$education->id}}>{{$education->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input name="terms" class="form-check-input" type="checkbox" id="terms">
                            <label class="form-check-label" for="terms">
                                I agree with processing of my personal data
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
