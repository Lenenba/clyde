                      <div class="item form-group {{$errors->has('nom') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nom <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nom" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nom" placeholder="entrer le nom de votre Restaurant" required="required" type="text" value="@if(!empty(old('nom'))){{old('nom') }}@else{{$resto->nom_resto}}@endif
                          ">

                          {!!  $errors->first('nom', '<span class:"help-block">:message</span>')!!}
                        </div>
                      </div>
                      <div class="item form-group {{$errors->has('email') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="@if(!empty(old('email')))
                          {{old('email') }}
                          @else
                          {{$resto->email_resto}}
                          @endif">

                          {!!  $errors->first('email', '<span class:"help-block">:message</span>')!!}
                        </div>
                      </div>
                      <div class="item form-group {{$errors->has('email_confirmation') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirmation de votre Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="confirm_email" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12" value="@if(!empty(old('email')))
                          {{old('email') }}
                          @else
                          {{$resto->email_resto}}
                          @endif">

                           {!!  $errors->first('email_confirmation', '<span class:"help-block">:message</span>')!!}
                        </div>
                      </div>
                      <div class="item form-group {{$errors->has('localisation') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="localisation">localisation <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="localisation" type="text" name="localisation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" value="@if(!empty(old('localisation'))){{old('localisation')}}@else{{$resto->localisation}}@endif">

                          {!!  $errors->first('localisation', '<span class:"help-block">:message</span>')!!}
                        </div>
                      </div>
                      <div class="item form-group {{$errors->has('telephone') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="telephone" name="telephone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="@if(!empty(old('telephone'))){{old('telephone') }}
                          @else{{$resto->telephone_resto}}@endif">

                          {!!  $errors->first('telephone', '<span class:"help-block">:message</span>')!!}
                        </div>
                      </div>
                      <div class="item form-group {{$errors->has('logo') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="logo">logo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="logo" name="logo" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="@if(!empty(old('logo')))
                          {{old('logo') }}
                          @else
                          {{$resto->logo}}
                          @endif">
                          {!!  $errors->first('logo', '<span class:"help-block">:message</span>')!!}
                        </div>
                      </div>
                      <div class="item form-group {{$errors->has('adresse') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Adresse <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="adresse" class="form-control col-md-7 col-xs-12">@if(!empty(old('adresse'))){{old('adresse') }}@else{{$resto->adresse_resto}}@endif</textarea>

                          {!!  $errors->first('adresse', '<span class:"help-block">:message</span>')!!}
                        </div>
                      </div>