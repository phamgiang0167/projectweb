@extends('admin-layout')
@section('admin-content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <?php
                            $msg = Session::get('MsgAddSuc');
                            if($msg){
                            echo '<span style ="color:red; font-weight:bold">'.$msg.'</span>';
                                Session::put('MsgAddSuc',null);
                            }
                         ?>
                        <header class="panel-heading">
                            Add FC
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-FC')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="FCName">FC name:</label>
                                    <input type="text" name = "FCName"class="form-control"  placeholder="Category name">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Decription:</label>
                                    <br>
                                    <textarea class="form-control " name="FCDescription"id="ccomment" name="comment" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Display">Display:</label>
                                    <select name="FCStatus"class="form-control input-sm m-bot15">
                                        <option value="0">Hide</option>
                                        <option value="1">show</option>
                                        
                                    </select>
                                </div>
                              
                                <button type="submit" class="btn btn-info">ADD</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
@endsection