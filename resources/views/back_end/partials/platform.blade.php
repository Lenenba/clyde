                      <div class="item form-group {{$errors->has('libelle') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="libelle">libelle <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="libelle" class="form-control col-md-7 col-xs-12" name="libelle" placeholder="entrer le libelle du type_plat" required="required" type="text" value="@if(!empty(old('libelle'))){{old('libelle') }}@else{{$plat->libelle}}@endif
                          ">

                          {!!  $errors->first('libelle', '<span class:"help-block">:message</span>')!!}
                        </div>
                      </div>
                      
                      <div class="item form-group {{$errors->has('prix') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="prix">prix <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="prix" class="form-control col-md-7 col-xs-12"  name="prix" placeholder="entrer le type de plat" required="required" type="text" value="@if(!empty(old('prix'))){{old('prix') }}@else{{$plat->prix}}@endif
                          ">
                          {!!  $errors->first('type', '<span class:"help-block">:message</span>')!!}
                        </div>
                      </div>

                       <div class="item form-group {{$errors->has('imagel') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="imagel">image<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="imagel" name="imagel" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="@if(!empty(old('imagel')))
                          {{old('imagel') }}
                          @else
                          {{$plat->image}}
                          @endif">
                          {!!  $errors->first('imagel', '<span class:"help-block">:message</span>')!!}
                        </div><span class="small">(Taille: 1024*1024 min)</span>
                      </div>

                       <div class="item form-group {{$errors->has('image2') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image2">image2 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="image2" name="image2" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="@if(!empty(old('image2')))
                          {{old('image2') }}
                          @else
                          {{$plat->image2}}
                          @endif">
                          {!!  $errors->first('image2', '<span class:"help-block">:message</span>')!!}
                        </div><span class="small">(Taille: 150*150 min)</span>
                      </div>

                      <div class="item form-group {{$errors->has('image3') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image3">image3 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="image3" name="image3" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="@if(!empty(old('image3')))
                          {{old('image3') }}
                          @else
                          {{$plat->image3}}
                          @endif">
                          {!!  $errors->first('image3', '<span class:"help-block">:message</span>')!!}
                        </div><span class="small">(Taille: 150*150 min)</span>
                      </div>
                    
                     <div class="item form-group {{$errors->has('description') ? 'has-error' : ''}}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="textarea" class="form-control col-md-7 col-xs-12" name="description" placeholder="entrer le libelle du type_plat" required="required" type="text" value="@if(!empty(old('description'))){{old('description') }}@else{{$plat->description}}@endif
                          ">

                          {!!  $errors->first('description', '<span class:"help-block">:message</span>')!!}
                        </div>
                      </div>