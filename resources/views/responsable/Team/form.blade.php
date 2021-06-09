@csrf
                <div class="row">
                <div class="col">
                        <div class="form-group">
                            <label for="name">Full Name  :</label>
                            <input type="text" name="team_name" id="team_name" value="{{$team->team_name ?? old('team_name') }}" class="form-control" >
                            @error('team_name')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                          </div>

                <br>
                <div class="col">
                <div class="form-group">
                            <label for="name">Titre :</label>
                            <input type="text" name="team_titre" id="team_titre" value="{{$team->team_titre ?? old('team_titre') }}" class="form-control" >
                            @error('team_titre')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                          </div>
                          </div>

                <br>
                <input type="hidden" value="{{$team->id ?? ''}}" name="id">
                <div class="form-group">
                  <label for="image">Image :</label>
                  <input type="file" name="team_img" id="team_img" value="{{ $team->team_img ?? ''}}" class="form-control" >
                  @error('team_img')<div class="text-danger">{{ $message }}</div>@enderror
                </div>
                <br>
                <div class="row">
                <div class="col">
                <div class="form-group">
                            <label for="name">Facebook :</label>
                            <input type="text" name="team_fb" id="team_fb" value="{{$team->team_fb ?? old('team_fb') }}" class="form-control" >
                            @error('team_fb')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                          </div>
                <br>
                <div class="col">
                <div class="form-group">
                            <label for="name">Instagram :</label>
                            <input type="text" name="team_insta" id="team_insta" value="{{$team->team_insta ?? old('team_insta') }}" class="form-control" >
                            @error('team_insta')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                          </div>
                          </div>

                <br>
                <div class="row">
                <div class="col">
                <div class="form-group">
                            <label for="name">twitter :</label>
                            <input type="text" name="team_twitter" id="team_twitter" value="{{$team->team_twitter ?? old('team_twitter') }}" class="form-control" >
                            @error('team_twitter')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                          </div>

                <br>
                <div class="col">
                <div class="form-group">
                            <label for="name">linkedin :</label>
                            <input type="text" name="team_linkedin" id="team_linkedin" value="{{ $team->team_linkedin ?? old('team_linkedin') }}" class="form-control" >
                            @error('team_linkedin')<div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                          </div>
                          </div>

                <br>
                <div class="row">
                    <div class="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class="fa fa-save"></i>  Add</button></div>
                    <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fa fa-window-close"></i>Cancel</button></div>
                </div>
